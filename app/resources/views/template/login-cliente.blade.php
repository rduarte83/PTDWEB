<!doctype html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.png"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/themify/themify-icons.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/elegant-font/html-css/style.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/lightbox2/css/lightbox.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
    <style>
        body{ padding: 20px;}
    </style>
    <title>Login</title>
</head>
<body>

<!-- Login -->

<main role="main">
    <div class="row">
        <div class="container col-md-8 offset-md-2">
            <div class="card border">
                <div class="card-header">
                    <div class="card title text-lg-center">
                        <h2>Login</h2>
                    </div>
                </div>
                <div class="card-body">
                    <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
                        @csrf
                        <div class="form-group">
                            <label class="sr-only" for="email">Email</label>
                            <input type="email" class="form-control {{$errors->has('email') ? 'is-invalid' : ''}}" id="email" placeholder="Email" required="">
                            @if($errors->has('email'))
                                <div class="invalid-feedback">
                                    {{$errors->first('email')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="Password">Password</label>
                            <input type="password" class="form-control {{$errors->has('password') ? 'is-invalid' : ''}}" id="Password" placeholder="Password" required="">
                            @if($errors->has('password'))
                                <div class="invalid-feedback">
                                    {{$errors->first('password')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <button type="submit" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">Login</button>
                        </div>
                        <!--<div class="checkbox">
                            <label>
                                <input type="checkbox"> Mantenha-me conectado
                            </label>
                        </div>-->
                        <div class="help-block text-center"><a href="registo-cliente">Não tem Conta? Registe-se já!</a></div>
                        <div class="help-block text-center"><a href="">Recuperar Conta</a></div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</main>

<script src="{{asset('js/app.js')}}" type="javascript"></script>
</body>
</html>





