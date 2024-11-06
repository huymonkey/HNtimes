<x-mail::message>
{{ \Illuminate\Mail\Markdown::parse("# Welcome $name to " . config('app.name'))  }}

{{ \Illuminate\Mail\Markdown::parse('Click the button below to verify your email') }}

<x-mail::button :url="route('auth.verifyEmail', $token)" :color="'green'">
Active your email
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
