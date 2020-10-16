@extends('layout.header') 
@section('styles')
     {{--custom style here --}}

@endsection
@section('content')  
    {{-- blade content --}}
    <!--Home-->
    <div id="home"> 
        <div class="container">
            <div class="row">
                <div class="divider"></div>
            </div>
            <div class="row mx-auto justify-content-center">
                <img src="/image/heart1.png" class="img-home img img-fluid">
            </div>
            <div class="row mx-auto justify-content-center">
                <h2 class="home-title1 head-title">iLoveMyCountry.Ph</h2>
            </div>
            <div class="row  text-center">
                <h2 class="home-title2 mx-auto">Extraordinary and Heroic Filipinos for <br> Fraud-Free
                    Philippines</h2> 
            </div>  
        </div> 
        <div class="row">
            <div class="divider"></div>
        </div>
    </div>
    <!--end-of-home-->
   @include('content/about')
   @include('content/core')
   @include('content/advocacy')
   @include('content/advocacy-core')
   @include('content/programs')
   @include('content/gallery')
   @include('content/news')
   @include('content/souvenir')
   @include('content/volunteer')
   @include('content/partners-sponsors')
   @include('content/form-ps')
   @include('content/form-fs')
   @include('content/contact')
   

@endsection
    
@section('script') 
    {{-- custom js  --}}
@endsection