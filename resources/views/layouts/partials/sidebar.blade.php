<nav class="sidenav navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scroll-wrapper scrollbar-inner">
        <div class="scrollbar-inner scroll-content">
            <div class="sidenav-header align-items-center">
                <a class="navbar-brand" href="{{ route('home') }}">
                    Stash
                </a>
            </div>
            <div class="navbar-inner">
                <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}">
                                <i class="fas fa-home"></i>
                                <span class="nav-link-text">{{ __('Dashboard') }}</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}">
                                <i class="fab fa-spotify"></i>
                                <span class="nav-link-text">{{ __('Music') }}</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('games') }}">
                                <i class="fab fa-playstation"></i>
                                <span class="nav-link-text">{{ __('Games') }}</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}">
                                <i class="fas fa-tv"></i>
                                <span class="nav-link-text">{{ __('Movies and Shows') }}</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}">
                                <i class="fas fa-heartbeat"></i>
                                <span class="nav-link-text">{{ __('Health') }}</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}">
                                <i class="fas fa-money-bill-wave"></i>
                                <span class="nav-link-text">{{ __('Expenses') }}</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}">
                                <i class="fas fa-user"></i>
                                <span class="nav-link-text">{{ __('Profile') }}</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
