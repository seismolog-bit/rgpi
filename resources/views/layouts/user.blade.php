<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Webestica.com">
    <meta name="description" content="Eduport- LMS, Education and Course Theme">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('/'); }}assets/images/favicon.ico">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;700&family=Roboto:wght@400;500;700&display=swap">

    <!-- Plugins CSS -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/'); }}assets/vendor/font-awesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/'); }}assets/vendor/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/'); }}assets/vendor/tiny-slider/tiny-slider.css">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/'); }}assets/vendor/choices/css/choices.min.css">

    <!-- Theme CSS -->
    <link id="style-switch" rel="stylesheet" type="text/css" href="{{ URL::asset('/'); }}assets/css/style.css">

</head>

<body>

    @include('components.app.navigation')

    <main>
        <section class="pt-0">
            <div class="container-fluid px-0">
                <div class="card bg-blue h-100px h-md-200px rounded-0" style="background:url(/assets/images/pattern/04.png) no-repeat center center; background-size:cover;">
                </div>
            </div>
            <div class="container mt-n4">
                <div class="row">
                    <div class="col-12">
                        <div class="card bg-transparent card-body pb-0 px-0 mt-2 mt-sm-0">
                            <div class="row d-sm-flex justify-sm-content-between mt-2 mt-md-0">
                                <!-- Avatar -->
                                <div class="col-auto">
                                    <div class="avatar avatar-xxl position-relative mt-n3">
                                        @if(Auth::user()->photo)
                                        <img class="avatar-img rounded-circle border border-white border-3 shadow" src="{{ asset('storage/' . Auth::user()->photo ) }}" alt="">
                                        @else
                                        <img class="avatar-img rounded-circle border border-white border-3 shadow" src="{{ URL::asset('/'); }}assets/images/logo.jpg" alt="">
                                        @endif

                                        @if(Auth::user()->status == 3)
                                        <span class="badge bg-success text-white rounded-pill position-absolute top-50 start-100 translate-middle mt-4 mt-md-5 ms-n3 px-md-3">Active</span>
                                        @else
                                        <span class="badge bg-danger text-white rounded-pill position-absolute top-50 start-100 translate-middle mt-4 mt-md-5 ms-n3 px-md-3">Pending</span>
                                        @endif

                                    </div>
                                </div>
                                <!-- Profile info -->
                                <div class="col d-sm-flex justify-content-between align-items-center">
                                    <div>
                                        <h1 class="my-1 fs-4">{{ Auth::user()->name }}</h1>
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item me-3 mb-1 mb-sm-0">
                                                <span class="text-body fw-light">NIK: {{ Auth::user()->nik }}</span>
                                            </li>
                                            <li class="list-inline-item me-3 mb-1 mb-sm-0">
                                                <span class="text-body fw-light">|</span>
                                            </li>
                                            <li class="list-inline-item me-3 mb-1 mb-sm-0">
                                                <span class="text-body fw-light">Email: {{ Auth::user()->email }}</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Button -->
                                    <!-- <div class="mt-2 mt-sm-0">
                                    <a href="student-course-list.html" class="btn btn-outline-primary mb-0">View my courses</a>
                                </div> -->
                                </div>
                            </div>
                        </div>

                        <!-- Advanced filter responsive toggler START -->
                        <!-- Divider -->
                        <hr class="d-xl-none">
                        <div class="col-12 col-xl-3 d-flex justify-content-between align-items-center">
                            <a class="h6 mb-0 fw-bold d-xl-none" href="#">Menu</a>
                            <button class="btn btn-primary d-xl-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                                <i class="fas fa-sliders-h"></i>
                            </button>
                        </div>
                        <!-- Advanced filter responsive toggler END -->
                    </div>
                </div>
            </div>
        </section>

        <section class="pt-0">
            <div class="container">
                <div class="row">

                    <!-- Left sidebar START -->
                    <div class="col-xl-3">
                        <!-- Responsive offcanvas body START -->
                        <nav class="navbar navbar-light navbar-expand-xl mx-0">
                            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                                <!-- Offcanvas header -->
                                <div class="offcanvas-header bg-light">
                                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">My profile</h5>
                                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                </div>
                                <!-- Offcanvas body -->
                                <div class="offcanvas-body p-3 p-xl-0">
                                    <div class="bg-dark border rounded-3 pb-0 p-3 w-100">
                                        <!-- Dashboard menu -->
                                        <div class="list-group list-group-dark list-group-borderless">
                                            <a class="list-group-item {{ (request()->is('dashboard')) ? 'active' : '' }}" href="{{ route('dashboard') }}"><i class="bi bi-ui-checks-grid fa-fw me-2"></i>Dashboard</a>

                                            @role('admin')

                                            <a class="list-group-item {{ (request()->is('admin/wilayahs*')) ? 'active' : '' }}" href="{{ route('admin.wilayahs.index') }}"><i class="bi bi-geo-alt fa-fw me-2"></i>Wilayah</a>

                                            <a class="list-group-item {{ (request()->is('admin/users*')) ? 'active' : '' }}" href="{{ route('admin.users.index') }}"><i class="bi bi-people fa-fw me-2"></i>Anggota</a>

                                            @endrole

                                            <a class="list-group-item {{ (request()->is('profile')) ? 'active' : '' }}" href="/profile"><i class="bi bi-ui-checks-grid fa-fw me-2"></i>Profile</a>
                                            <a class="list-group-item text-danger bg-danger-soft-hover" href="#"><i class="fas fa-sign-out-alt fa-fw me-2"></i>Sign Out</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </nav>
                        <!-- Responsive offcanvas body END -->
                    </div>
                    <!-- Left sidebar END -->

                    <!-- Main content START -->
                    <div class="col-xl-9">

                        {{ $slot }}

                    </div>
                    <!-- Row END -->
                </div>
            </div>
        </section>
    </main>

    @include('components.app.footer')

    {{ $script }}

    <!-- Back to top -->
    <div class="back-top"><i class="bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle"></i></div>

    <!-- Bootstrap JS -->
    <script src="{{ URL::asset('/'); }}assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Vendors -->
    <script src="{{ URL::asset('/'); }}assets/vendor/tiny-slider/tiny-slider.js"></script>
    <script src="{{ URL::asset('/'); }}assets/vendor/purecounterjs/dist/purecounter_vanilla.js"></script>
    <script src="{{ URL::asset('/'); }}assets/vendor/choices/js/choices.min.js"></script>

    <!-- Template Functions -->
    <script src="{{ URL::asset('/'); }}assets/js/functions.js"></script>

</body>

</html>