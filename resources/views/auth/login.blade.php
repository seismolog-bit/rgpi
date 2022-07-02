<!DOCTYPE html>
<html lang="en">

<head>
    <title>Eduport - LMS, Education and Course Theme</title>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Webestica.com">
    <meta name="description" content="Eduport- LMS, Education and Course Theme">

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;700&family=Roboto:wght@400;500;700&display=swap">

    <!-- Plugins CSS -->
    <link rel="stylesheet" type="text/css" href="assets/vendor/font-awesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap-icons/bootstrap-icons.css">

    <!-- Theme CSS -->
    <link id="style-switch" rel="stylesheet" type="text/css" href="assets/css/style.css">

</head>

<body>

    <!-- **************** MAIN CONTENT START **************** -->
    <main>
        <section class="p-0 d-flex align-items-center position-relative overflow-hidden">

            <div class="container-fluid">
                <div class="row">
                    <!-- left -->
                    <div class="col-12 col-lg-6 d-md-flex align-items-center justify-content-center bg-primary bg-opacity-10 vh-lg-100">
                        <div class="p-3 p-lg-5">
                            <!-- Title -->
                            <div class="text-center">
                                <h2 class="fw-bold">Welcome to our largest community</h2>
                                <p class="mb-0 h6 fw-light">Let's learn something new today!</p>
                            </div>
                            <!-- SVG Image -->
                            <img src="assets/images/element/02.svg" class="mt-5" alt="">
                            <!-- Info -->
                            <div class="d-sm-flex mt-5 align-items-center justify-content-center">
                                
                                <!-- Content -->
                                <!-- <p class="mb-0 h6 fw-light ms-0 ms-sm-3">.</p> -->
                            </div>
                        </div>
                    </div>

                    <!-- Right -->
                    <div class="col-12 col-lg-6 m-auto">
                        <div class="row my-5">
                            <div class="col-sm-10 col-xl-8 m-auto">
                                <!-- Title -->
                                <span class="mb-0 fs-1">👋</span>
                                <h1 class="fs-2">Login into Eduport!</h1>
                                <p class="lead mb-4">Nice to see you! Please log in with your account.</p>

                                <!-- Form START -->
                                <form method="POST" action="{{ route('login') }}" class="needs-validation" novalidate>
                                    @csrf
                                    <!-- Email -->
                                    <div class="mb-4">
                                        <label for="email" class="form-label">Email address *</label>
                                        <div class="input-group input-group-lg">
                                            <span class="input-group-text bg-light rounded-start border-0 text-secondary px-3"><i class="bi bi-envelope-fill"></i></span>
                                            <input type="email" class="form-control border-0 bg-light rounded-end ps-1" placeholder="E-mail" id="email" name="email" require autofocus>
                                        </div>
                                    </div>
                                    <!-- Password -->
                                    <div class="mb-4">
                                        <label for="password" class="form-label">Password *</label>
                                        <div class="input-group input-group-lg">
                                            <span class="input-group-text bg-light rounded-start border-0 text-secondary px-3"><i class="fas fa-lock"></i></span>
                                            <input type="password" class="form-control border-0 bg-light rounded-end ps-1" placeholder="password" id="password" name="password" autocomplete="current-password" require>
                                        </div>
                                        <div id="password" class="form-text">
                                            Your password must be 8 characters at least
                                        </div>
                                    </div>
                                    <!-- Check box -->
                                    <div class="mb-4 d-flex justify-content-between mb-4">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="remember">
                                            <label class="form-check-label" for="remember">Remember me</label>
                                        </div>
                                        <!-- <div class="text-primary-hover">
                                            <a href="forgot-password.html" class="text-secondary">
                                                <u>Forgot password?</u>
                                            </a>
                                        </div> -->
                                    </div>
                                    <!-- Button -->
                                    <div class="align-items-center mt-0">
                                        <div class="d-grid">
                                            <button class="btn btn-primary mb-0" type="submit" >Login</button>
                                        </div>
                                    </div>
                                </form>
                                <!-- Form END -->

                                <!-- Sign up link -->
                                <div class="mt-4 text-center">
                                    <span>Don't have an account? <a href="{{ route('register') }}">Signup here</a></span>
                                </div>
                            </div>
                        </div> <!-- Row END -->
                    </div>
                </div> <!-- Row END -->
            </div>
        </section>
    </main>
    <!-- **************** MAIN CONTENT END **************** -->

    <script>
            // Example starter JavaScript for disabling form submissions if there are invalid fields
            (function() {
                'use strict';
                window.addEventListener('load', function() {
                    // Fetch all the forms we want to apply custom Bootstrap validation styles to
                    var forms = document.getElementsByClassName('needs-validation');
                    // Loop over them and prevent submission
                    var validation = Array.prototype.filter.call(forms, function(form) {
                        form.addEventListener('submit', function(event) {
                            if (form.checkValidity() === false) {
                                event.preventDefault();
                                event.stopPropagation();
                            }
                            form.classList.add('was-validated');
                        }, false);
                    });
                }, false);
            })();
        </script>

    <!-- Back to top -->
    <div class="back-top"><i class="bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle"></i></div>

    <!-- Bootstrap JS -->
    <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Template Functions -->
    <script src="assets/js/functions.js"></script>

</body>

</html>