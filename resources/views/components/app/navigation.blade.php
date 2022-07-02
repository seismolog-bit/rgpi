<header class="navbar-light navbar-sticky header-static">
    <!-- Logo Nav START -->
    <nav class="navbar navbar-expand-xl">
        <div class="container">
            <!-- Logo START -->
            <a class="navbar-brand" href="index.html">
                <img class="light-mode-item navbar-brand-item" src="/assets/images/logo.png" alt="logo" style="height: 42px;">
                <img class="dark-mode-item navbar-brand-item" src="/assets/images/logo-light.png" alt="logo" style="height: 42px;">
            </a>
            <!-- Logo END -->

            <!-- Responsive navbar toggler -->
            <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-animation">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
            </button>

            <!-- Main navbar START -->
            <div class="navbar-collapse w-100 collapse" id="navbarCollapse">

                <!-- Nav Main menu START -->
                <ul class="navbar-nav navbar-nav-scroll mx-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="profil" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Profil</a>
                        <ul class="dropdown-menu" aria-labelledby="profil">
                            <li> <a class="dropdown-item" href="#">Sejarah</a></li>
                            <li> <a class="dropdown-item" href="#">Visi-Misi</a></li>
                            <li> <a class="dropdown-item" href="#">Rencana Strategis</a></li>
                            <li> <a class="dropdown-item" href="#">Pengurus DPP</a></li>
                        </ul>
                    </li>

                    <li class="nav-item"><a class="nav-link {{ (request()->is('agenda*')) ? 'active' : '' }}" href="{{ route('agenda') }}">Agenda</a></li>
                    <li class="nav-item"><a class="nav-link {{ (request()->is('berita*')) ? 'active' : '' }}" href="{{ route('berita') }}">Berita</a></li>
                    <li class="nav-item"><a class="nav-link {{ (request()->is('galeri*')) ? 'active' : '' }}" href="#">Galeri</a></li>
                    <li class="nav-item"><a class="nav-link {{ (request()->is('bisnis*')) ? 'active' : '' }}" href="{{ route('bisnis') }}">Bisnis</a></li>
                    <li class="nav-item"><a class="nav-link {{ (request()->is('kontak*')) ? 'active' : '' }}" href="#">Kontak</a></li>

                </ul>
                <!-- Nav Main menu END -->

                <!-- Nav Search START -->
                <div class="nav my-3 my-xl-0 px-4 flex-nowrap align-items-center">
                    <div class="nav-item w-100">
                        <form class="position-relative">
                            <input class="form-control pe-5 bg-transparent" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn bg-transparent px-2 py-0 position-absolute top-50 end-0 translate-middle-y" type="submit"><i class="fas fa-search fs-6 "></i></button>
                        </form>
                    </div>
                </div>
                <!-- Nav Search END -->
            </div>
            <!-- Main navbar END -->

            <!-- Profile START -->

            @guest

            <div class="navbar-nav ms-2">
                <a class="btn btn-sm btn-dark mb-0" type="botton" href="{{ route('login') }}"><i class="bi bi-power me-2"></i>Sign In</a>
            </div>
            @else

            <div class="dropdown ms-1 ms-lg-0">
                <a class="avatar avatar-sm p-0" href="#" id="profileDropdown" role="button" data-bs-auto-close="outside" data-bs-display="static" data-bs-toggle="dropdown" aria-expanded="false">
                    @if(Auth::user()->photo)
                    <img class="avatar-img rounded-circle" src="{{ asset('storage/' . Auth::user()->photo ) }}" alt="avatar">
                    @else
                    <img class="avatar-img rounded-circle" src="/assets/images/logo.jpg" alt="avatar">
                    @endif
                </a>
                <ul class="dropdown-menu dropdown-animation dropdown-menu-end shadow pt-3" aria-labelledby="profileDropdown">
                    <!-- Profile info -->
                    <li class="px-3">
                        <div class="d-flex align-items-center">
                            <!-- Avatar -->
                            <div class="avatar me-3">
                                @if(Auth::user()->photo)
                                <img class="avatar-img rounded-circle shadow" src="{{ asset('storage/' . Auth::user()->photo ) }}" alt="avatar">
                                @else
                                <img class="avatar-img rounded-circle shadow" src="/assets/images/logo.jpg" alt="avatar">
                                @endif
                            </div>
                            <div>
                                {{ Auth::user()->name }}
                                <p class="small m-0">{{ Auth::user()->email }}</p>
                            </div>
                        </div>
                        <hr>
                    </li>
                    <!-- Links -->
                    <li><a class="dropdown-item" href="{{ route('dashboard') }}">
                            <i class="bi bi-ui-checks-grid fa-fw me-2"></i>Dashboard</a>
                    </li>
                    <li><a class="dropdown-item" href="#"><i class="bi bi-info-circle fa-fw me-2"></i>Pusat Bantuan</a></li>
                    <li>
                        <a class="dropdown-item bg-danger-soft-hover" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="bi bi-power fa-fw me-2"></i>{{ __('Logout') }}</a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <!-- Dark mode switch START -->
                    <li>
                        <div class="modeswitch-wrap" id="darkModeSwitch">
                            <div class="modeswitch-item">
                                <div class="modeswitch-icon"></div>
                            </div>
                            <span>Dark mode</span>
                        </div>
                    </li>
                    <!-- Dark mode switch END -->
                </ul>
            </div>

            @endguest
            <!-- Profile START -->

        </div>
    </nav>
    <!-- Logo Nav END -->
</header>
<!-- Header END -->