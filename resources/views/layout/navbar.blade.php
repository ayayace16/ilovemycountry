@section('style')
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-grid.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-grid.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-reboot.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-reboot.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/main-style.css')}}">
    <link rel="stylesheet" href="{{asset('css/w3.css')}}">

    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
    rel="stylesheet">
@endsection

@section('navbar')
<nav class="navbar navbar-expand-xl navbar-light bg-white">
    <div class="nav-container">
        <div class="navbar-brand" href="#">
            <img src="../image/cropped-logo.jpg" width="100" height="50" class="d-inline-block align-center"
                alt="ilovemycountry.ph">
        </div>
            <button class="navbar-toggler first-button collapsed" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <div class="navbar-toggler-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav d-inline-flex justify-content-end">
                <li class="nav-item">
                    <a href="#home">HOME</a>
                </li>
                <li class="nav-item">
                    <a href="#about">ABOUT US</a>
                <li class="nav-item">
                    <a href="#programs">PROGRAMS</a>
                </li>
                <li class="nav-item">
                    <a href="#gallery">GALLERY</a>
                </li>
                <li class="nav-item">
                    <div class="drowpdown">
                        <a href="#ilmcrun2019" id="dropdownMenuLink" data-hover="dropdown" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">ILMC RUN 2019</a>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="#">VIDEO MAKING CONTEST - VISION 2019</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="#souvenir">SOUVENIR</a>
                </li>
                <li class="nav-item">
                    <a href="#volunteer">VOLUNTEER MEMBER</a>
                </li>
                <li class="nav-item">
                    <div class="drowpdown">
                        <a href="#sponsors" id="dropdownMenuLink" data-hover="dropdown" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">SPONSORS</a>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="#">BECOME OUR PARTNER/SPONSOR</a>
                            <a class="dropdown-item" href="#">FOREIGN SPONSORSHIP</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="#news">NEWS/EVENTS</a>
                </li>
                <li class="nav-item">
                    <a class="contact" href="#contact">CONTACT US</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
@endsection

@section('script')
    <link rel="stylesheet" href="{{asset('js/bootstrap.bundle.js')}}">
    <link rel="stylesheet" href="{{asset('js/bootstrap.bundle.min.js')}}">
    <link rel="stylesheet" href="{{asset('js/bootstrap.js')}}">
   
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

@endsection
