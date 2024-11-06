<x-mail::message>
    {{ Illuminate\Mail\Markdown::parse('# Reset your password') }}
    {{ Illuminate\Mail\Markdown::parse('We have received your request to reset your account password. Click the button below to reset your password:') }}
    <x-mail::button :url="route('auth.showFormChangePassword', $token)">
        Reset Password
    </x-mail::button>
    {{ Illuminate\Mail\Markdown::parse('If you did not request a password reset, no further action is required.') }}
    Thanks,<br>
    {{ config('app.name') }}
</x-mail::message>

