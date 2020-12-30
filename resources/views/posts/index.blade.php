@extends('layouts.app')

@section('content')

<section id="post">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-lg-8">

                <form action="{{ route('posts') }}" method="post" enctype="multipart/form-data">
                    
                    @csrf

                    {{-- Listing title --}}
                    <div class="form-group">

                        <input type="text" class="form-control @error('title') form-error-inline @enderror" name="title" id="title" placeholder="What would you like to trade for?" value="{{ old('title') }}">

                        @error('title')
                            <div class="form-error">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>

                    <div class="form-group">

                        <p>{{ auth()->user()->barangay }}</p>

                    </div>

                    {{-- Upload Image --}}
                    <div class="form-group">
                        <input type="file" name="file" id="file" class="form-control-file">
                    </div>

                    {{-- Text Area --}}
                    <div class="form-group">
                        <input type="file" name="file" id="file" class="form-control-file">
                    </div>

                    <button type="submit" class="btn btn-success">Submit</button>
                
                </form>

            </div>

        </div>

    </div>

</section>

@endsection