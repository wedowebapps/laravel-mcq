<nav class="pcoded-navbar">
    <div class="nav-list">
        <div class="pcoded-inner-navbar main-menu">
            <ul class="pcoded-item pcoded-left-item">
                <li class="pcoded  {{ Request::segment(1) === 'home' ? 'active' : null }}">
                    <a href="{{ route('home') }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                        <span class="pcoded-mtext">Dashboard</span>
                    </a>
                </li>
                <li class="pcoded-hasmenu {{ Request::segment(1) === 'master' ? 'pcoded-trigger active' : null }}">
                    <a href="javascript:void(0)" class="waves-effect waves-dark ">
                        <span class="pcoded-micon"><i class="fa fa-group"></i></span>
                        <span class="pcoded-mtext">Master</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="pcoded {{ Request::segment(2) === 'user' ? 'active' : null }}">
                            <a href="{{ route('question.index') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Questions</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>