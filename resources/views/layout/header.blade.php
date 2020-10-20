<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/main-style.css')}}">
    
    
    
    <title>ILOVEMYCOUNTRY.PH</title>
</head>

<body>
    @include('layout/navbar')
   
    @yield('styles')
    @yield('content')
    @yield('script')

    @include('layout/footer')
</body>

</html>