@extends('layouts.app')

@section('content')

<section id="categories-hero">
    <div class="container">
        <div class="hero-slider">
            <div><img src="{{ asset('img/cat-banner-sample.png') }}" alt=""></div>
        </div>
    </div>
</section>

<section id="categories-menu">
    <div class="container">
        <h1>Choose a category</h1>

        <div class="row">

            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <a href="/">
                            <div class="cat-item">
                                <i class="fas fa-utensils"></i>
                                <h3>Food</h3>
                            </div> 
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <a href="/">
                            <div class="cat-item">
                                <i class="fas fa-mobile"></i>
                                <h3>Electronics</h3>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <a href="/">
                            <div class="cat-item">
                                <i class="fas fa-leaf"></i>
                                <h3>Gardening</h3>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <a href="/">
                            <div class="cat-item">
                                <i class="fas fa-tshirt"></i>
                                <h3>Clothing</h3>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

        </div>

        <div class="row bottom-menu">

            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <a href="/">
                            <div class="cat-item">
                                <i class="fas fa-tools"></i>
                                <h3>Services</h3>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <a href="/">
                            <div class="cat-item">
                                <i class="fas fa-car"></i>
                                <h3>Automotives</h3>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <a href="/">
                            <div class="cat-item">
                                <i class="fas fa-heart"></i>
                                <h3>Health & Wellness</h3>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <a href="/">
                            <div class="cat-item">
                                <i class="fas fa-couch"></i>
                                <h3>Furniture</h3>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

<section id="featdeals">
    <div class="container">
        <h1>Featured deals</h1>

        <div class="featured-deals align-items-center justify-content-center d-flex">
            <h1>Min 8 items with AJAX Load More Button. Filter: All items.</h1>
        </div>

    </div>

</section>
 

@endsection