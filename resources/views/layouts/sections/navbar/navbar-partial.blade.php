@php
    use Illuminate\Support\Facades\Auth;
@endphp

<nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached bg-navbar-theme px-3"
     id="layout-navbar">

    {{-- LEFT : LOGO --}}
    <a href="{{ url('/') }}" class="navbar-brand d-flex align-items-center">
        <img src="{{ asset('assets/img/branding/logo-rskk1.png') }}"
             alt="Logo"
             height="100"
             class="me-2">
        <span class="fw-bold fs-5 d-none d-md-inline">
            Digital Library Santri
        </span>
    </a>

    {{-- TOGGLER MOBILE --}}
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarGuest"
            aria-controls="navbarGuest"
            aria-expanded="false">
        <i class="ri ri-menu-line"></i>
    </button>

    {{-- MENU --}}
    <div class="collapse navbar-collapse justify-content-end" id="navbarGuest">

        {{-- ===== LOGIN USER (JIKA ADA) ===== --}}
        @auth
        <ul class="navbar-nav align-items-center">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle d-flex align-items-center"
                   href="#" role="button" data-bs-toggle="dropdown">
                    <i class="ri ri-user-line me-2"></i>
                    {{ Auth::user()->username ?? Auth::user()->name }}
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                        <a class="dropdown-item" href="{{ url('pages/account-settings-account') }}">
                            <i class="ri ri-settings-4-line me-2"></i> Settings
                        </a>
                    </li>
                    <li>
                        <form method="POST" action="{{ route('auth.logout') }}">
                            @csrf
                            <button type="submit" class="dropdown-item">
                                <i class="ri ri-logout-box-r-line me-2"></i> Logout
                            </button>
                        </form>
                    </li>
                </ul>
            </li>
        </ul>
        @endauth

    </div>
</nav>
