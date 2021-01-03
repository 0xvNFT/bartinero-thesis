<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="https://kit.fontawesome.com/7586c5b6d3.js" crossorigin="anonymous"></script>
    <script src="{{asset('js/app.js')}}"></script>
    <title>Bartinero</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg justify-content-between sticky-top">
    {{-- <nav class="navbar navbar-expand-lg navbar-light justify-content-between sticky-top">     --}}

        <div class="container">

            <a href="/" class="navbar-brand">
                <img src="{{ asset('img/bart_logo_full.svg') }}" alt="">
            </a>

            <button type="button" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#navbarMenu">
                <span class="navbar-toggler-icon"></span>
                <i class="fas fa-bars"></i>
            </button>


            <div class="collapse navbar-collapse" id="navbarMenu">

                <form class="form-inline mr-auto ml-auto">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search an item..." aria-label="Search">
                    {{-- <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> --}}
                </form>

                <ul class="navbar-nav">

                    @auth
                        <li class="nav-item">
                            <a href="/categories" class="nav-link">Categories</a>
                        </li>

                        <li class="nav-item altnav">
                            <div class="dropdown">

                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Hi, {{ auth()->user()->fname }}!</button>

                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                                    <a class="dropdown-item" href="{{ route('dashboard') }}">Dashboard</a>

                                    <form action="{{ route('logout') }}" method="post">
                                        @csrf
                                        <button type="submit" class="btn btn-primary">Log Out</button>
                                    </form> 

                                </div>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('posts') }}" class="nav-link altrade">Trade</a>
                        </li>
                    @endauth

                    @guest
                        <li class="nav-item">
                            <a href="/categories" class="nav-link">Categories</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('register') }}" class="nav-link">Sign Up</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('login') }}" class="nav-link">Log In</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('register') }}" class="nav-link">Trade</a>
                        </li>
                    @endguest

                </ul>

            </div>

        </div>

    </nav>

    @yield('content')
    
</body>

<footer>
    <div class="container">
        <div class="row align-items-center d-flex">
            <div class="col-lg-6">
                <img src="{{ asset('img/bart_logo_solo.svg') }}" alt=""> 
            </div>

            <div class="col-lg-6">
                <a href="#">Privacy Policy</a>
                <a href="#">Terms and Conditions</a>
            </div>
        </div>
    </div>
</footer>

</html>