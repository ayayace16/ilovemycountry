<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-grid.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-grid.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-reboot.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-reboot.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/main-style.css')}}">
    <link rel="stylesheet" href="{{asset('css/w3.css')}}">

    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('js/bootstrap.bundle.js')}}">
    <link rel="stylesheet" href="{{asset('js/bootstrap.bundle.min.js')}}">
    <link rel="stylesheet" href="{{asset('js/bootstrap.js')}}">
    <link rel="stylesheet" href="{{asset('js/bootstrap.min.js')}}">
    <link rel="stylesheet" href="{{asset('js/jquery.slim.min.js')}}">
    <link rel="stylesheet" href="{{asset('js/popper.min.js')}}">



    <title>ILOVEMYCOUNTRY.PH</title>
</head>

<body>
    @include('layout/navbar')
    @yield('navbar')

    @include('layout/socialbar')
    @yield('socialbar')

    @yield('style')

    @yield('layout')

    @yield('script')
</body>

<footer>
    <div id="footer">
    <div class="container-fluid">
    <div class="container">
        <div class="row mx-auto justify-content-center">
            <div class="col-xl-4">
        <li>NAVIGATION</li>
        <li><a href="#">Home</a></li>
        <li><a href="#">Blogs</a></li>
        <li><a href="#">News</a></li>
        <li><a href="#">Volunteer Member</a></li>
        <li><a href="#">Contact Us</a></li>
    </div>
    <div class="col-xl-4">
        <h2>CONTACT INFORMATION</h2>
        <li>6876649 loc. 109</li>
        <li>09435054641</li>
        <li>jopahoyo@sjcgroup.ph</li>
        <li>amestoce@ilovemycountry.ph</li>
        <li>Contact Person: Jennifer Pahoyo</li>
    </div>
    </div>
    </div>
</footer>

</html>
