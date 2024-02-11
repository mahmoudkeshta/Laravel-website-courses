<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses</title>

    <!-- Fontawsome v4.7 Iconc Library Css File -->
    <link rel="stylesheet" href="{{ asset('cms/css/font-awesome.min.css') }}">

    <!-- file code normalize css -->
    <link rel="stylesheet" href="{{ asset('cms/css/normalize.css') }}">

    <!-- file code Bootstrap css v5 -->
    <link rel="stylesheet" href="{{ asset('cms/css/bootstrap.min.css') }}">
    <!-- <link rel="stylesheet" href="css/bootstrap-rtl.min.css"> -->

    <!-- file code css -->
    <link rel="stylesheet" href="{{ asset('cms/css/style.css') }}">
    @yield('css')
</head>

<body>
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->
    <!-- Header -->
    <header class="">
        <!-- NavBar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-dark">
            <div class="container">
                <!-- <div class="container"> -->
                <a class="navbar-brand" href="{{ route('index') }}">Courses</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            {{-- <a class="nav-link active" aria-current="page" href="{{route('index')}}">Home</a> --}}
                            <a class="nav-link" aria-current="page" href="{{ route('index') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('products') }}">Our Courses</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('about') }}">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Account
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                @guest
                                <li><a class="dropdown-item" href="{{ route('login') }}">Login</a></li>
                                <li><a class="dropdown-item" href="{{ route('register-user') }}">Register</a></li>
                                @else
                                <li><a class="dropdown-item" href="{{ route('admins.index') }}">Admin</a></li>
                                <li><a class="dropdown-item" href="{{ route('signout') }}">Logout</a></li>
                                @endguest
                            </ul>
                        </li>
                </div>
                <!-- </div> -->
            </div>
        </nav>
        <!-- End NavBar -->
    </header>
    <!-- Header End-->
    @yield('name')
    <!-- Footer -->

    <footer>
        <div class="container">
            <hr>
            <div class="col-12 text-center">
                <div class="inner-content">
                    <p>Copyright &copy; 2021 <em>Courses</em></p>
                </div>
            </div>
        </div>
    </footer>

    <!-- End Footer -->
    <!-- file code jquery js -->
    <script src="{{ asset('cms/js/jquery.js') }}"></script>
    <script src="{{ asset('cms/js/crud.js') }}"></script>
    <script src="{{ asset('cms/js/axios.min.js') }}"></script>
    <script src="{{ asset('cms/js/toastr.min.js') }}"></script>
    <script src="{{ asset('js/star-rating.js') }}"></script>

    <!-- file code bootstrap js v5 -->
    <script src="{{ asset('cms/js/bootstrap.min.js') }}"></script>

    <!-- file code main js -->
    <script src="{{ asset('cms/js/main.js') }}"></script>
    @yield('script')
</body>

</html>
