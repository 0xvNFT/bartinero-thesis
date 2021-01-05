@extends('layouts.app')

@section('content')

<section id="post">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-lg-6 justify-content-center">

                <h2>What would you like to barter?</h2>
                
                <p class="location"><i class="fas fa-location-arrow"></i>You are posting from {{ auth()->user()->barangay }}</p>

                <form action="{{ route('posts') }}" method="post" enctype="multipart/form-data">
                    
                    @csrf

                    {{-- Listing title --}}
                    <div class="form-group">

                        <input type="text" class="form-control @error('title') form-error-inline @enderror" name="title" id="title" placeholder="What are you listing today?" value="{{ old('title') }}">

                        @error('title')
                            <div class="form-error">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>

                    {{-- Category --}}
                    <div class="form-group">

                        <select name="category" id="category" class="form-control @error('category') form-error-inline @enderror" value="{{ old('category') }}">
                            <option value="" selected disabled>Product Category</option>
                            <option value="Food" id="prodcat1">Food</option>
                            <option value="Electronics" id="prodcat2">Electronics</option>
                            <option value="Gardening" id="prodcat3">Gardening</option>
                            <option value="Clothing" id="prodcat4">Clothing</option>
                            <option value="Services" id="prodcat5">Services</option>
                            <option value="Automotives" id="prodcat6">Automotives</option>
                            <option value="Health & Wellness" id="prodcat7">Wellness</option>
                            <option value="Furniture" id="prodcat8">Furniture</option>
                        </select>

                        @error('category')
                            <div class="form-error">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>

                    {{-- Upload Image --}}
                    <div class="form-group upload-image">
                        <input type="file" name="file" id="file" class="form-control-file">
                    </div>

                    {{-- Body --}}
                    <div class="form-group">

                        <textarea class="form-control @error('body') form-error-inline @enderror" id="body" name="body" rows="3"></textarea>

                        @error('body')
                            <div class="form-error">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>

                    {{-- Barter --}}
                    <div class="form-group">

                        <input type="text" class="form-control @error('barter') form-error-inline @enderror" name="barter" id="barter" placeholder="What would you like to trade for?" value="{{ old('barter') }}">

                        @error('barter')
                            <div class="form-error">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>

                    <div class="disclaimer justify-content-center">
                        <p>Please note that trading of medicines, firearms, or offering of malicious services are strictly prohibited. Termination of account will be the result if a user does not comply.</p>
                    </div>

                    <button type="submit" class="btn btn-success">Submit</button>
                
                </form>

              
            </div>

        </div>

    </div>

</section>

@endsection