@extends('layouts.app')

@section('content')

<section id="dashboard">
    <div class="container">

        <div class="nav justify-content-between">
            <div class="greeting">
                <h1>Welcome, {{ auth()->user()->fname }} {{ auth()->user()->lname }}!</h1>
                <p><i class="fas fa-location-arrow"></i>{{ auth()->user()->barangay }}</p>
            </div>
            <div class="tab justify-content-center align-items-center d-flex">
                <button class="tablinks" onclick="openCity('Deals')">Deals</button>
                <button class="tablinks" onclick="openCity('Messages')">Messages</button>
                <button class="tablinks" onclick="openCity('Account')">Account</button>
            </div>
        </div>

        <div class="wrapper">

            {{-- Posts --}}
            <div class="dashboard-grid">

                <h3>Your active listings</h3>

                @if ($posts->count())
                    @foreach ($posts as $post)

                    <div class="archive-post">
                        <a href="">{{ $post->user->username }}</a>
                        <span>• {{ $post->created_at->diffForHumans() }}</span>
                        <p>{{ $post->title }}</p>
                    </div>

                    

                    @endforeach
                @else
                    <p>You currently have no active listings.</p>
                    <a href="/register">Join the Las Piñas barter community</a>
                @endif
            </div>

            {{-- Messages --}}
            <div class="dashboard-grid d-flex justify-content-center align-items-center">

                <h1>No new messages.</h1>

            </div>

        </div>

        {{-- Account --}}
        <div class="account-grid">

            <h1>Account</h1>

            <div class="avatar">

                <div class="card-body">
                    <form action="/upload" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="image" id="avatar">
                        <input type="submit" value="upload">
                    </form>
                </div> 

            </div>

        </div>

        <div class="row">


            

            

        </div>



       
            

      
    

    </div>
</section>

@endsection