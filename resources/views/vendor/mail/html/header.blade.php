@props(['url'])
<tr>
    <td class="header">
        <a href="{{ $url }}" style="display: inline-block;">
            @if (trim($slot) === 'Laravel')
                <img src="https://laravel.com/img/notification-logo.png" class="logo" alt="Laravel Logo">
            @elseif(trim($slot) === 'HNtimes')
                <img src="https://1000logos.net/wp-content/uploads/2017/04/New-York-Times-logo.png" class="logo" alt="HNtimes">
            @else
                {{ $slot }}
            @endif
        </a>
    </td>
</tr>
