<div class="logo">
    <a href="index.html" class="logo-icon"><span class="logo-text">Neptune</span></a>
    <div class="sidebar-user-switcher user-activity-online">
        <a href="#">
            <img src="{{ Storage::url(Auth::user()->avatar) }}">
            <span class="activity-indicator"></span>
            <span class="user-info-text">{{ Auth::user()->name }}<br><span
                    class="user-state-info text-capitalize">{{ Auth::user()->role }}</span></span>
        </a>
    </div>
</div>
<div class="app-menu">
    @yield('currentPage')
    <ul class="accordion-menu">
        <li class="sidebar-title">
            Apps
        </li>
        <li @class(['active-page' => $currentPage === 'dashboard' ]) >
            <a href="{{ route('admin.dashboard') }}">
                <i class="material-icons-two-tone">dashboard</i>
                Dashboard
            </a>
        </li>
        <li @class(['active-page' => $currentPage === 'categories' ]) >
            <a href="{{ route('admin.categories') }}">
                <i class="material-icons-two-tone">calendar_today</i>
                Categories
            </a>
        </li>
        <li @class(['active-page' => $currentPage === 'articles' ]) >
            <a href="{{ route('admin.articles') }}">
                <i class="material-icons-two-tone">
                    article
                </i>
                Articles
            </a>
        </li>
        <li @class(['active-page' => $currentPage === 'users' ]) >
            <a href="{{ route('admin.users') }}">
                <i class="material-icons-two-tone">account_circle</i>
                Users
            </a>
        </li>
        <li @class(['active-page' => $currentPage === 'settings' ]) >
            <a href="{{ route('admin.settings') }}">
                <i class="material-icons-two-tone">settings</i>
                Settings
            </a>
        </li>
        <li class="sidebar-title">
            Other
        </li>
        <li>
            <a href="#!" id="btn-logout">
                Logout
                <i class="material-icons-two-tone float-end me-0">
                    logout
                </i>
            </a>
        </li>
        <form action="{{ route('auth.logout') }}" method="POST" id="form-logout">@csrf</form>
    </ul>
</div>
