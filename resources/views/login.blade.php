<html>

<head>
    <title>ILoveMyCountry-Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/main-style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
</head>

<body>
    <div id="login">
        <!--navbar-login-->
        <nav class="navbar navbar-expand-xl navbar-light bg-white px-2 sticky-top">
            <a class="navbar-brand" href="#"><img src="../image/cropped-logo.jpg" width="100" height="75"
                    class="d-inline-block align-center" alt="ilovemycountry.ph"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05"
                aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExample05">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item nowrap dropdown">
                        <a class="dropdown-toggle" href="#ilmcrun2019" id="dropdown05" data-toggle="dropdown"
                            aria-expanded="false">MY ACCOUNT</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown05">
                            <a class="dropdown-item" href="#">Settings</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <!--login-->
        <div class="row">
            <div class="divider"></div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-8 col-md-6 col-xl-6">
                <div class="container-login">
                    <div class="row justify-content-center">
                        <div class="col-sm-12 col-md-12 col-xl-12">
                            <div class="row justify-content-center">
                                <img src="../image/cropped-logo.jpg" width="100" height="75" alt="ilovemycountry">
                            </div>
                            <div class="row justify-content-center">
                                <h2>Log-in</h2>
                            </div>
                            <form>
                                <div class="input-group form-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ri-user-fill"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Username">

                                </div>
                                <div class="input-group form-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ri-key-fill"></i></span>
                                    </div>
                                    <input type="password" class="form-control" placeholder="Password">
                                </div>
                                <div class="row align-items-center">
                                    <div class="col">
                                        <input type="checkbox" class="checkbox">
                                        <label for="checkbox">Remember Me</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Login" class="btn float-right login_btn">
                                </div>
                                <br>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</body>

</html>
