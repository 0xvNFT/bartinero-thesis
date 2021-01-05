@extends('layouts.app')

@section('content')

<section id="single">

    <section class="single-product">

        <div class="container">
        
            <div class="row">
    
                <div class="col-lg-8">
                    <p>POPULAR ITEM</p>
                </div>
    
                <div class="col-lg-4">
                    <div class="product-desc">

                        @if ($posts->count(1))
                    @foreach ($posts as $post)


                        <a href="">{{ $post->user->username }}</a>
                        
                        <span>• {{ $post->created_at->diffForHumans() }}</span>

                        <h3>{{ $post->user->barangay }}</h3>

                        <h1>{{ $post->title }}</h1>

                        <p>{{ $post->body }}</p>

                        <div class="looking">
                            <h2>I am looking for...</h2>
                            <p>{{ $post->barter }}</p>
                        </div>
                    </div>
                    <div class="user-offers">
    
                        <input type="text" placeholder="Make an offer?">
                        <button class="btn active">Send Deal</button>
    
                    </div>

                    <form action="/" method="post">
                        @csrf
                        <button type="submit"><i class="fas fa-heart"></i></button><span>{{ $post->likes->count() }}</span>
                    </form>
    
                    

                    </div>

                    @endforeach
                    
                @else
                    <p>You currently have no active listings.</p>
                    <a href="/register">Join the Las Piñas barter community</a>
                @endif

                        
                        
                        
                     
                </div>
    
            </div>
        
        </div>
    
    </section>

</section>

@endsection