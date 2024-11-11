<?php

use App\Models\Audio;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



/*--------------CLIENT--------------*/
Route::get('/', [\App\Http\Controllers\ClientController::class, 'index'])->name('index');



/*--------------AUTHENTICATE--------------*/
Route::controller(\App\Http\Controllers\AuthenController::class)
    ->name('auth.')
    ->group(function () {

        // Login
        Route::get('login', 'showFormLogin')->name('showFormLogin');
        Route::post('login', 'handleLogin')->name('handleLogin');

        // Login with Google
        Route::get('auth/google', 'redirectToGoogle')->name('google');
        Route::get('auth/google/callback', 'handleGoogleCallback');

        // Sign Up
        Route::get('sign-up', 'showFormSignUp')->name('showFormSignUp');
        Route::post('sign-up', 'handleSignUp')->name('handleSignUp');
        Route::get('sign-up-success', 'showSignUpSuccess')->name('showSignUpSuccess');
        Route::get('verify-email/{token}', 'verifyEmail')->name('verifyEmail');

        // Forgot Password
        Route::get('forgot-password', 'showFormForgotPassword')->name('showFormForgotPassword');
        Route::post('forgot-password', 'handleForgotPassword')->name('handleForgotPassword');
        Route::get('forgot-password-success', 'showForgotPasswordSuccess')->name('showForgotPasswordSuccess');

        // Change Password
        Route::get('change-password/{token}', 'showFormChangePassword')->name('showFormChangePassword');
        Route::post('change-password/{token}', 'handleChangePassword')->name('handleChangePassword');

        Route::middleware('auth')
            ->group(function () {

                // Lock Account
                Route::get('lock-account', 'showLockAccount')->name('showLockAccount');

                // Logout
                Route::post('logout', [\App\Http\Controllers\AuthenController::class, 'logout'])->name('logout');

            });

    });



/*--------------ADMIN--------------*/

Route::middleware('auth')
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {

        Route::controller(\App\Http\Controllers\AdminController::class)
            ->group(function () {

                Route::get('dashboard'  , 'dashboard')  ->name('dashboard');
                Route::get('categories' , 'categories') ->name('categories');
                Route::get('articles'   , 'articles')   ->name('articles');
                Route::get('users'      , 'users')      ->name('users');
                Route::get('settings'   , 'settings')   ->name('settings');

            });

        Route::controller(\App\Http\Controllers\Admin\ArticleController::class)
            ->prefix('articles')
            ->name('articles.')
            ->group(function () {

                Route::get('create'             ,   'create')   ->name('create');
                Route::get('show/{article}'     ,   'show')     ->name('show');
                Route::get('edit/{article}'     ,   'edit')     ->name('edit');
                Route::get('comments/{article}' ,   'comments') ->name('comments');

            });
    });

