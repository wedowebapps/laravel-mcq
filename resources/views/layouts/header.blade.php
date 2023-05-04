<div class="navbar-wrapper">
    <div class="navbar-logo">
        <a href="{{ url('/home') }}">
            <img class="img-fluid" src="{{ asset('images/logo-small_1.png') }}" alt="Theme-Logo" />
        </a>
        <a class="mobile-menu" id="mobile-collapse" href="#!">
            <i class="feather icon-menu icon-toggle-right"></i>
        </a>
        <a class="mobile-options waves-effect waves-light">
            <i class="feather icon-more-horizontal"></i>
        </a>
    </div>
    <div class="navbar-container container-fluid">
        <ul class="nav-left">
            <li class="header-search">
                <div class="main-search morphsearch-search">
                    <div class="input-group">
                        <span class="input-group-prepend search-close">
                            <i class="feather icon-x input-group-text"></i>
                        </span>
                    </div>
                </div>
            </li>
        </ul>
        <ul class="nav-right">
            <li class="user-profile header-notification">
                <div class="dropdown-primary dropdown">
                    <div class="dropdown-toggle" data-toggle="dropdown">
                        <!-- <img src="files/assets/images/avatar-4.jpg" class="img-radius" alt="User-Profile-Image"> -->
                        <span>{{ Auth::user()->name}}</span>
                        <i class="feather icon-chevron-down"></i>
                    </div>
                    <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn"
                        data-dropdown-out="fadeOut">
                        <li>
                            <a href="{{ route('user.logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <form id="logout-form" action="{{ route('user.logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                                <i class="feather icon-log-out"></i> Logout
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</div>