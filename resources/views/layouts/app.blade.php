<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Shop Homepage - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{asset('css/styles.css') }}" rel="stylesheet" />

        <style>
            .navbar-brand {
                font-size: 1.5rem;
                font-weight: bold;
            }

            .navbar-toggler-icon {
                background-image: url('data:image/svg+xml;charset=utf-8,%3Csvg viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg"%3E%3Cpath fill-rule="evenodd" d="M0 2a2 2 0 012-2h12a2 2 0 012 2v1a1 1 0 01-1 1H1a1 1 0 01-1-1V2zm0 5.5a2 2 0 012-2h12a2 2 0 012 2v1a1 1 0 01-1 1H1a1 1 0 01-1-1V7zm0 5.5a2 2 0 012-2h12a2 2 0 012 2v1a1 1 0 01-1 1H1a1 1 0 01-1-1v-1z" clip-rule="evenodd"%3E%3C/path%3E%3C/svg%3E');
            }

            .navbar-toggler {
                border: none;
                background: transparent;
            }

            .navbar-nav .nav-link {
                padding: 0.5rem 1rem;
                font-size: 1rem;
                font-weight: bold;
            }

            .navbar-nav .nav-link:hover {
                background-color: #f8f9fa;
            }

            .navbar-nav .dropdown-menu {
                background-color: #f8f9fa;
                border: none;
            }

            .navbar-nav .dropdown-item {
                font-weight: normal;
            }

            .header-content {
                text-align: center;
                margin-top: 5rem;
            }

            .header-content h1 {
                font-size: 3rem;
                font-weight: bold;
                color: #fff;
                line-height: 1.2;
            }

            .header-content p {
                font-size: 1.5rem;
                color: #d8d8d8;
                margin-bottom: 0;
            }

            .section-heading {
                text-align: center;
                margin-bottom: 5rem;
            }

            .section-heading h2 {
                font-size: 2.5rem;
                font-weight: bold;
                color: #212529;
                margin-bottom: 2rem;
            }

            .card {
                border: none;
                transition: all 0.3s;
                background-color: #f8f9fa;
                margin-bottom: 2rem;
            }

            .card:hover {
                transform: translateY(-10px);
            }

            .card img {
                height: 250px;
                object-fit: cover;
            }

            .card-body {
                text-align: center;
            }

            .card-title {
                font-size: 1.5rem;
                font-weight: bold;
                margin-bottom: 0.5rem;
            }

            .card-text {
                color: #6c757d;
            }

            .card-footer {
                border-top: none;
                background-color: #f8f9fa;
                text-align: center;
            }

            .btn-outline-dark {
                border-color: #343a40;
                color: #343a40;
                font-weight: bold;
            }

            .btn-outline-dark:hover {
                background-color: #343a40;
                color: #fff;
            }

            footer {
                background-color: #343a40;
                color: #f8f9fa;
                padding: 2rem 0;
            }
        </style>
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#!">Minang Saiyo</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#!">All Products</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="#!">Popular Items</a></li>
                                <li><a class="dropdown-item" href="#!">New Arrivals</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="/login">
                                <i class="bi bi-door-open"></i>
                                Login
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-primary py-3">
            <div class="container px-4 px-lg-5 my-5">
                <div class="header-content">
                    <h1 class="display-4 fw-bolder">Selamat makan di RM <br><b>Minang Saiyo</b></h1>
                    <p class="lead fw-normal text-white-50 mb-0">Menikmati Kelezatan Hidangan Padang</p>
                </div>
            </div>
        </header>
        <!-- Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    @yield('content')
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2023</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{asset('js/scripts.js') }}"></script>
    </body>
</html>
