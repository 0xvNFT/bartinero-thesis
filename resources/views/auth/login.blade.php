@extends('layouts.app')

@section('content')

<section id="login">

    <div class="container">

        <h2>Log in</h2>

        <div class="row justify-content-center">

            <div class="col-lg-4">

                @if (session('status'))
                    <div class="alert alert-danger">
                        <ul>
                            {{ session('status') }}
                        </ul>
                    </div>
                @endif

                {{-- Register Form --}}
                <form action="{{ route('login') }}" method="post" id="register-form">

                    @csrf

                    {{-- Username --}}
                    <div class="form-group">

                        <input type="email" class="form-control @error('email') form-error-inline @enderror" name="email" id="email" placeholder="Email" value="{{ old('email') }}">

                        @error('email')
                            <div class="form-error">
                                {{ $message }}
                            </div>
                        @enderror
                        
                    </div>

                    {{-- Password --}}
                    <div class="form-group">

                        <input type="password" class="form-control @error('password') form-error-inline @enderror" name="password" id="password" placeholder="Password">

                            @error('password')
                                <div class="form-error">
                                    {{ $message }}
                                </div>
                            @enderror
                        
                    </div>

                    {{-- Remember Me --}}
                    <div class="form-group d-flex justify-content-center checkterms">
                        <div class="form-check">
                            
                          <input class="form-check-input" type="checkbox" name="remember" id="remember">
                          <label class="form-check-label" for="remember">
                            Remember me
                          </label>

                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary w-100">Log in</button>
                
                </form>

            </div>

        </div>

</section>

@endsection