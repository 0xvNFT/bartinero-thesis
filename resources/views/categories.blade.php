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

<section id="featured-deals">
    <div class="container">
        <h1>Featured deals</h1>

        <div class="wrapper">

            @if ($posts->count())
            
            @foreach ($posts as $post)

            <div class="card">

                <img src="{{ asset('img/img-placeholder.png') }}" alt="" class="card-img-top">

                <div class="card-body">
                    <a href="" class="user-link">{{ $post->user->username }}</a>
                    <span>• {{ $post->created_at->diffForHumans() }}</span>
                    <h5 class="card-title">
                        <a href="">{{ $post->title }}</a>
                    </h5>
                </div>

                <form action="" method="post">
                    <button type="submit"><i class="fas fa-heart"></i></button>
                </form>

            </div>

            @endforeach

            {{ $posts->links() }}

            @else

            <p>There are currently no active listings.</p>

            @endif

        </div>
            
    </div>

</section>
 

@endsection