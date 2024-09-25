<header>
    <div class=" container-fluid text-bg-dark d-flex justify-content-between p-3">
        <div>
            <a class="navbar-brand" href="{{ route('home') }}" target="_blank">
                <img src="https://cdn.pixabay.com/photo/2022/08/22/02/05/logo-7402513_640.png" alt="Bootstrap"
                    width="40" height="34">
            </a>
        </div>
        <div>
            <ul class="navbar">
                @guest
                    <li class="nav-item"><a href="{{ route('login') }}">Login</a></li>
                    <li class="nav-item"><a href="{{ route('register') }}">Register</a></li>
                @else
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{ route('admin.home') }}">Admin</a></li>
                            <li> <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>

                    </li>

                @endguest
            </ul>
        </div>
    </div>
</header>
