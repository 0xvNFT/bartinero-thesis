@extends('layouts.app')

@section('content')

<section id="hero">

    <div class="container">

        <div class="row align-items-center justify-content-center d-flex">
            <div class="col-lg-5">
                <h1>A hub for the<br>Las Piñas barter<br>community.</h1>
                <div class="hero-cta">
                    <a href="#short-info">Why barter?</a>
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

            <div class="col-lg-4 d-flex">

                <div class="d-flex justify-content-center align-items-center byline-icon">
                    <i class="fas fa-plus"></i>
                </div>

                <div class="byline-text">
                    <h1>Post a deal</h1>
                    <p>Barter old or new items. Even services.</p>
                </div>
                    
            </div>

            <div class="col-lg-4 d-flex">

                <div class="d-flex justify-content-center align-items-center byline-icon">
                    <i class="fas fa-mouse-pointer"></i>
                </div>

                <div class="byline-text">
                    <h1>Choose an offer</h1>
                    <p>Plenty of options to choose from.</p>
                </div> 

            </div>

            <div class="col-lg-4 d-flex">

                <div class="d-flex justify-content-center align-items-center byline-icon">
                    <i class="fas fa-handshake"></i>
                </div>
                
                <div class="byline-text">
                    <h1>Trade with ease</h1>
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

            <div class="cat-item">
                <i class="fas fa-utensils"></i>
                <h3>Food</h3>
            </div> 

            <div class="cat-item">
                <i class="fas fa-mobile"></i>
                <h3>Electronics</h3>
            </div>

            <div class="cat-item">
                <i class="fas fa-leaf"></i>
                <h3>Gardening</h3>
            </div>

            <div class="cat-item">
                <i class="fas fa-tshirt"></i>
                <h3>Clothing</h3>
            </div>

            <div class="cat-item">
                <i class="fas fa-tools"></i>
                <h3>Services</h3>
            </div>

            <div class="cat-item">
                <i class="fas fa-car"></i>
                <h3>Automotives</h3>
            </div>

            <div class="cat-item">
                <i class="fas fa-heart"></i>
                <h3>Health & Wellness</h3>
            </div>

            <div class="cat-item">
                <i class="fas fa-couch"></i>
                <h3>Furniture</h3>
            </div>

        </div>
    </div>
</section>

<section id="featdeals">
    <div class="container">
        <h1>Check out these featured deals</h1>
        <p>Start trading with a Las Pinero</p>
    </div>
</section>
 

<section id="short-info">
    <div class="container">

        <h1>Why barter?</h1>

        <div class="card">
            <div class="card-body">
                <h1 class="card-title">
                    <i class="fas fa-recycle"></i>
                    <br>
                    Zero-waste lifestyle.
                </h1>
            </div>
        </div>

    </div>
</section>

@endsection