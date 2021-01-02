@extends('layouts.app')

@section('content')

<section id="post">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-lg-6 justify-content-center">

                <h2>What would you like to barter?</h2>

                <form action="{{ route('posts') }}" method="post" enctype="multipart/form-data">
                    
                    @csrf

                    {{-- <div class="form-group">
                        <p>{{ auth()->user()->barangay }}</p>
                    </div> --}}

                    {{-- Barangay
                    <div class="form-group">
                        
                        <select name="location" id="location" class="form-control @error('location') form-error-inline @enderror" value="{{ old('location') }}">
                            <option value="" selected disabled>Barangay</option>
                            <option value="Brgy. Almanza Uno" id="brgy1">Brgy. Almanza Uno</option>
                            <option value="Brgy. Almanza Dos" id="brgy2">Brgy. Almanza Dos</option>
                            <option value="Brgy. BF International" id="brgy3">Brgy. BF International</option>
                            <option value="Brgy. CAA" id="brgy4">Brgy. CAA</option>
                            <option value="Brgy. Daniel Fajardo" id="brgy5">Brgy. Daniel Fajardo</option>
                            <option value="Brgy. Elias Aldana" id="brgy6">Brgy. Elias Aldana</option>
                            <option value="Brgy. Ilaya" id="brgy7">Brgy. Ilaya</option>
                            <option value="Brgy. Manuyo Uno" id="brgy8">Brgy. Manuyo Uno</option>
                            <option value="Brgy. Manuyo Dos" id="brgy9">Brgy. Manuyo Dos</option>
                            <option value="Brgy. Pamplona Uno" id="brgy10">Brgy. Pamplona Uno</option>
                            <option value="Brgy. Pamplona Dos" id="brgy11">Brgy. Pamplona Dos</option>
                            <option value="Brgy. Pamplona Tres" id="brgy12">Brgy. Pamplona Tres</option>
                            <option value="Brgy. Pilar" id="brgy13">Brgy. Pilar</option>
                            <option value="Brgy. Pulang Lupa Uno" id="brgy14">Brgy. Pulang Lupa Uno</option>
                            <option value="Brgy. Pulang Lupa Dos" id="brgy15">Brgy. Pulang Lupa Dos</option>
                            <option value="Brgy. Talon Uno" id="brgy16">Brgy. Talon Uno</option>
                            <option value="Brgy. Talon Dos" id="brgy17">Brgy. Talon Dos</option>
                            <option value="Brgy. Talon Tres" id="brgy18">Brgy. Talon Tres</option>
                            <option value="Brgy. Talon Kuatro" id="brgy19">Brgy. Talon Kuatro</option>
                            <option value="Brgy. Zapote" id="brgy20">Brgy. Zapote</option>
                        </select>

                        @error('location')
                            <div class="form-error">
                                {{ $message }}
                            </div>
                        @enderror

                    </div> --}}

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
                    <div class="form-group">
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