<?php

namespace App\Http\Controllers;

use App\Http\Requests\HandleChangePasswordRequest;
use App\Http\Requests\HandleForgotPasswordRequest;
use App\Http\Requests\HandleLoginRequest;
use App\Http\Requests\HandleSignUpRequest;
use App\Mail\ResetPasswordMail;
use App\Mail\WelcomeMail;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;

class AuthenController extends Controller
{
    /*-----------LOGIN-----------*/
    public function showFormLogin(Request $request)
    {
        return view('auth.login');
    }

    public function handleLogin(HandleLoginRequest $request)
    {

        $credentials = $request->validated();

        if (Auth::attempt($credentials)) {

            $request->session()->regenerate();

            if (Auth::user()->isUnverified()) {

                Auth::logout();

                return back()->with('message', [
                    'type' => 'warning',
                    'content' => 'Your email has not been verified'
                ]);

            }

            if (Auth::user()->isLock()) {
                return redirect()->route('auth.showLockAccount');
            }

            if (Auth::user()->isAdmin()) {
                return redirect()->route('admin.dashboard')->with('alert', 'login-success');
            }

            return redirect()->intended()->with('alert', 'login-success');

        }

        return back()->with('message', [
            'type' => 'danger',
            'content' => 'Email or Password is invalid'
        ])->onlyInput('email');
    }

    /*-------LOGIN-WITH-GOOGLE--------*/
    public function redirectToGoogle()
    {
        return Socialite::driver('google')
            ->with(['prompt' => 'select_account'])
            ->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $googleUser = Socialite::driver('google')->stateless()->user();

            $user = User::query()->where('email', $googleUser->email)->first();

            if ($user) {

                Auth::login($user);

                if (Auth::user()->isUnverified()) {

                    Auth::logout();

                    return redirect()->route('auth.showFormLogin')->with('message', [
                        'type' => 'warning',
                        'content' => 'Your email has not been verified'
                    ]);

                }

                if (Auth::user()->isLock()) {
                    return redirect()->route('auth.showLockAccount');
                }

                if (Auth::user()->isAdmin()) {
                    return redirect()->route('admin.dashboard')->with('alert', 'login-success');
                }

            } else {

                $newUser = User::create([
                    'name' => $googleUser->name,
                    'email' => $googleUser->email,
                    'google_id' => $googleUser->id, // Lưu ID Google để tiện đăng nhập lần sau
                    'password' => Str::random(32), // Bạn có thể để giá trị này bất kỳ vì sẽ không dùng
                    'email_verified_at' => now()
                ]);

                Auth::login($newUser);

            }

            return redirect()->intended()->with('alert', 'login-success');

        } catch (\Throwable $e) {
            return redirect()->route('login')->with('message', [
                'type' => 'danger',
                'content' => 'An error occurred during the login process.'
            ]);
        }
    }



    /*-----------SIGN-UP-----------*/
    public function showFormSignUp()
    {
        return view('auth.sign-up');
    }

    public function handleSignUp(HandleSignUpRequest $request)
    {
        $data = $request->validated();

        $data['email_verification_token'] = str_replace('/', '@', bcrypt(Str::random(32)));

        try {

            $user = User::query()->create($data);

            Mail::to($user->email, $user->name)
                ->send(new WelcomeMail($user->name, $data['email_verification_token']));


        } catch (\Throwable $e) {
            Log::error(
                __CLASS__ . '@' . __FUNCTION__,
                ['error' => $e->getMessage()]
            );

            return back()->with('message', [
                'type' => 'danger',
                'content' => 'System Error'
            ])->onlyInput('name', 'email');
        }


        return redirect()->route('auth.showSignUpSuccess')->with('email', $user->email);
    }

    public function showSignUpSuccess()
    {
        if (!session()->has('email')) {
            return redirect()->route('auth.showFormLogin');
        }

        $email = session('email');

        return view('auth.sign-up-success', compact('email'));
    }

    public function verifyEmail(Request $request, $token)
    {
        $user = User::query()->where('email_verification_token', $token)->first();

        if (!$user) {
            return redirect()->route('auth.showFormLogin')
                ->with('message', [
                    'type' => 'danger',
                    'content' => 'Invalid verification token'
                ]);
        }

        $user->email_verified_at = now();
        $user->email_verification_token = NULL;
        $user->save();

        return redirect()->route('auth.showFormLogin')
            ->with('message', [
                'type' => 'success',
                'content' => 'Your email has been verified. You can now login !'
            ]);

    }


    /*-----------FORGOT PASSWORD-----------*/
    public function showFormForgotPassword()
    {
        return view('auth.forgot-password');
    }

    public function handleForgotPassword(HandleForgotPasswordRequest $request)
    {
        try {

            $user = User::query()->where('email', $request->email)->first();

            $token = str_replace('/', '@', bcrypt(Str::random(32)));

            DB::table('password_reset_tokens')
                ->upsert(
                    ['email' => $user->email, 'token' => $token, 'created_at' => Carbon::now()],
                    ['email'],
                    ['token', 'created_at']
                );

            Mail::to($user->email, $user->name)->send(new ResetPasswordMail($token));

        } catch (\Throwable $e) {
            Log::error(
                __CLASS__ . '@' . __FUNCTION__,
                ['error' => $e->getMessage()]
            );

            return back()->with('message', [
                'type' => 'danger',
                'content' => 'System Error'
            ])->withInput();
        }

        return redirect()->route('auth.showForgotPasswordSuccess')->with('email', $user->email);
    }

    public function showForgotPasswordSuccess() {
        if (!session()->has('email')) {
            return redirect()->route('auth.showFormLogin');
        }

        $email = session('email');

        return view('auth.forgot-password-success', compact('email'));
    }


    /*-----------CHANGE PASSWORD-----------*/
    public function showFormChangePassword($token)
    {
        return view('auth.change-password', compact('token'));
    }

    public function handleChangePassword(HandleChangePasswordRequest $request, $token)
    {
        $passwordReset = DB::table('password_reset_tokens')->where('token', $token)->first();

        if (!$passwordReset) {
            return back()->with('message', [
                'type' => 'danger',
                'content' => 'Token is invalid',
            ]);
        }

        try {
            $data = $request->safe()->only('password');

            $user = User::query()->where('email', $passwordReset->email)->first();

            $user->password = $data['password'];

            $user->save();

            DB::table('password_reset_tokens')->where('token', $token)->delete();

        }
        catch (\Throwable $e) {

            Log::error(
                __CLASS__ . '@' . __FUNCTION__,
                ['error' => $e->getMessage()]
            );

            return back()->with('message', [
                'type' => 'danger',
                'content' => 'System Error'
            ]);

        }

        return redirect()->route('auth.showFormLogin')->with('message', [
            'type' => 'success',
            'content' => 'Your password has been changed. You can login !'
        ]);


    }


    /*-----------LOCK ACCOUNT-----------*/
    public function showLockAccount()
    {
        return view('auth.lock');
    }


    /*-------------LOG OUT-------------*/
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/')->with('alert', 'logout-success');
    }

}
