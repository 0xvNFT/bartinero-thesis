@extends('layouts.app')

@section('content')

<section id="dashboard">
    <div class="container">

        <div class="nav">
            <div class="tab">
                <button class="tablinks" onclick="openCity('Deals')">Deals</button>
                <button class="tablinks" onclick="openCity('Messages')">Messages</button>
                <button class="tablinks" onclick="openCity('Account')">Account</button>
            </div>
        </div>

        <div id="Deals" class="city">

            <div class="greeting">

                <h1>Welcome, {{ auth()->user()->fname }}!</h1>

                @if ($posts->count())
                    iterate
                @else
                    <p>You currently have no active listings.</p>
                    <a href="/register">Join the Las Piñas barter community</a>
                @endif

            </div>

        </div>

        <div id="Messages" class="city" style="display: none">

            <div class="greeting">

                <h1>You have no new messages.</h1>

            </div>

        </div>

        <div id="Account" class="city" style="display: none">

            <div class="greeting">

                <h1>Set up your account.</h1>

            </div>

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

        <div class="tab-content">

            

            

        </div>

    

    </div>
</section>

@endsection