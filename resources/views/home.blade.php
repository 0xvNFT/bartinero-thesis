@extends('layouts.app')

@section('content')

<section id="hero">

    <div class="container">

        <div class="row align-items-center justify-content-center d-flex">
            <div class="col-lg-5">
                <h1>A hub for the<br>Las Piñas barter<br>community.</h1>
                <div class="hero-cta">
                    <a href="#about">Why barter?</a>
                    <a href="/register">Start trading now</a>
                </div>
            </div>
            <div class="col-lg-6">
                <img class="img-fluid" src="{{ asset('img/barter-arrows-alt.png') }}" alt="">
            </div>
        </div>
        
    </div>


    {{-- <div class="hero-slider">
        {{-- <div><img src="{{ asset('img/cat-banner-sample.png') }}" alt=""></div> --}}
        {{-- <div style="background-color: blue">Test</div>
        <div style="background-color: red">Test</div>
        <div style="background-color: yellow">Test</div>
        <div style="background-color: green">Test</div>
    </div> --}}
</section>

<section id="hero-byline">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-lg-4 d-flex align-items-baseline">

                <div class="d-flex justify-content-center align-items-center byline-icon">
                    <i class="fas fa-plus"></i>
                </div>

                <div class="byline-text">
                    <h1>Post a deal.</h1>
                    <p>Barter old or new items. Even services.</p>
                </div>
                    
            </div>

            <div class="col-lg-4 d-flex align-items-baseline">

                <div class="d-flex justify-content-center align-items-center byline-icon">
                    <i class="fas fa-mouse-pointer"></i>
                </div>

                <div class="byline-text">
                    <h1>Choose an offer.</h1>
                    <p>Plenty of options to choose from.</p>
                </div> 

            </div>

            <div class="col-lg-4 d-flex align-items-baseline">

                <div class="d-flex justify-content-center align-items-center byline-icon">
                    <i class="fas fa-handshake"></i>
                </div>
                
                <div class="byline-text">
                    <h1>Trade with ease.</h1>
                    <p>Communicate within the site.</p>
                </div>
                
            </div>

        </div>
    </div>
</section>

<section id="prodcat-slider">
    <div class="container">
        <h1>Look for the things you need</h1>
        <p>Choose among these categories for new or used items</p>
        <div class="cat-selector">

            <a href="/">
                <div class="cat-item">
                    <i class="fas fa-utensils"></i>
                    <h3>Food</h3>
                </div> 
            </a>
            
            <a href="/">
                <div class="cat-item">
                    <i class="fas fa-mobile"></i>
                    <h3>Electronics</h3>
                </div>
            </a>

            <a href="/">
                <div class="cat-item">
                    <i class="fas fa-leaf"></i>
                    <h3>Gardening</h3>
                </div>
            </a>
            
            <a href="/">
                <div class="cat-item">
                    <i class="fas fa-tshirt"></i>
                    <h3>Clothing</h3>
                </div>
            </a>

            <a href="/">
                <div class="cat-item">
                    <i class="fas fa-tools"></i>
                    <h3>Services</h3>
                </div>
            </a>

            <a href="/">
                <div class="cat-item">
                    <i class="fas fa-car"></i>
                    <h3>Automotives</h3>
                </div>
            </a>

            <a href="/">
                <div class="cat-item">
                    <i class="fas fa-heart"></i>
                    <h3>Health & Wellness</h3>
                </div>
            </a>

            <a href="/">
                <div class="cat-item">
                    <i class="fas fa-couch"></i>
                    <h3>Furniture</h3>
                </div>
            </a>

        </div>
    </div>
</section>

<section id="featdeals">
    <div class="container">
        <h1>Check out these featured deals</h1>
        <p>Start trading with a Las Pinero</p>

        <div class="featured-deals align-items-center justify-content-center d-flex">
            <h1>Items will be posted here. At least 8.</h1>
        </div>

    </div>



</section>
 

<section id="about">
    <div class="container">

        <h1>Why barter?</h1>

        <div class="row">

            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title">No money involved.</h1>
                        <p>You don't have to shell out actual money to obtain an item. Just trade with whatever you have, whether it may be an item or a service.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title">Environment-friendly.</h1>
                        <p>The act of bartering also aims for a zero-waste lifestyle. Not only you can save money, but also the environment.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title">Pragmatic solutions.</h1>
                        <p>Bartering could act as a pragmatic solution for those who are in need. Especially for people who are affected badly by the pandemic.</p>
                    </div>
                </div>
            </div>

        </div>

        <div class="about-cta d-flex align-items-center justify-content-center">
            <a href="/register">Join the Las Piñas barter community</a>
        </div>
    
    </div>
</section>

@endsection