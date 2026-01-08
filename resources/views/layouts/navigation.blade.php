<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
    <div class="container">
        <a class="navbar-brand font-weight-bold text-primary" href="{{ route('home') }}">
            <i class="fas fa-blog mr-2"></i>Bloggers
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            @auth
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">
                        <i class="fas fa-home mr-1"></i>Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('posts.index') ? 'active' : '' }}" href="{{ route('posts.index') }}">
                        <i class="fas fa-list mr-1"></i>My Posts
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('posts.create') ? 'active' : '' }}" href="{{ route('posts.create') }}">
                        <i class="fas fa-plus mr-1"></i>Create Post
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user mr-1"></i>{{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item {{ request()->routeIs('profile.edit') ? 'active' : '' }}" href="{{ route('profile.edit') }}">
                            <i class="fas fa-user-edit mr-2"></i>Profile
                        </a>
                        <div class="dropdown-divider"></div>
                        <form method="POST" action="{{ route('logout') }}" class="d-inline">
                            @csrf
                            <button type="submit" class="dropdown-item">
                                <i class="fas fa-sign-out-alt mr-2"></i>Logout
                            </button>
                        </form>
                    </div>
                </li>
            </ul>
            @else
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">
                        <i class="fas fa-sign-in-alt mr-1"></i>Login
                    </a>
                </li>
                @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">
                        <i class="fas fa-user-plus mr-1"></i>Register
                    </a>
                </li>
                @endif
            </ul>
            @endauth
        </div>
    </div>
</nav>
