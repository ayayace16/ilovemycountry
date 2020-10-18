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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
@endsection