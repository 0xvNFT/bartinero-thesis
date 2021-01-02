@extends('layouts.app')

@section('content')

<section id="hero">

    <div class="container">
        <h1>A hub for the Las Piñas<br>barter community.</h1>
        <div class="hero-cta">
            <a href="#short-info">Why barter?</a>
            <a href="/register">Start trading now</a>
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

        <div class="wrapper">

            <div class="deal">
                <h1>Post a deal.</h1>
                <p>Join fellow Las Pineros in participating the community barter.</p>
            </div>

            <div class="match">
                <h1>Find a match.</h1>
                <p>Choose the best deal offers that suit you best.</p>
            </div>

            <div class="trade">
                <h1>Trade with ease.</h1>
                <p>Trade with Las Pineros hassle-free.</p>
            </div>

        </div>
        
    </div>
</section>

@endsection