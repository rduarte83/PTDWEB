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
        body{ padding: 40px;}
    </style>
    <title>Login</title>
</head>
<body>

<!-- Registo de Cliente -->

<main role="main">
    <div class="row">
        <div class="container col-md-4 offset-md-2 shadow-lg p-3 mb-5 bg-white rounded">
            <div class="card border">
                <div class="card-header">
                    <div class="card title text-lg-center">
                        <h2>Registo de Cliente</h2>
                    </div>
                </div>
                <div class="card-body">
                    <form action="/clienteregisto" method="post">
                        @csrf
                        <div class="form-group">
                            <label class="sr-only" for="nome">Nome</label>
                            <input type="text" name="nome" id="nome" class="form-control {{$errors->has('nome') ? 'is-invalid' : ''}}" placeholder="Nome">
                            @if($errors->has('nome'))
                                <div class="invalid-feedback">
                                    {{$errors->first('nome')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="contribuinte">Contribuinte</label>
                            <input type="number" name="contribuinte" id="contribuinte" class="form-control {{$errors->has('contribuinte') ? 'is-invalid' : ''}}" placeholder="Contribuinte">
                            @if($errors->has('contribuinte'))
                                <div class="invalid-feedback">
                                    {{$errors->first('contribuinte')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="morada">Morada</label>
                            <input type="text" name="endereco" id="morada" class="form-control {{$errors->has('morada') ? 'is-invalid' : ''}}" placeholder="Morada">
                            @if($errors->has('morada'))
                                <div class="invalid-feedback">
                                    {{$errors->first('morada')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="email">Email Cliente</label>
                            <input type="email" name="email" id="email" class="form-control {{$errors->has('email') ? 'is-invalid' : ''}}" placeholder="E-mail do cliente">
                            <small id="emailHelp" class="form-text text-muted">Nós nunca vamos compartilhar seu e-mail com mais ninguém.</small>
                            @if($errors->has('email'))
                                <div class="invalid-feedback">
                                    {{$errors->first('email')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="Password">Palavra-passe</label>
                            <input type="password1" class="form-control {{$errors->has('password1') ? 'is-invalid' : ''}}" id="password1" placeholder="Palavra-passe" required="">
                            @if($errors->has('password1'))
                                <div class="invalid-feedback">
                                    {{$errors->first('password1')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="password2">Confirme Palavra-passe</label>
                            <input type="password" class="form-control {{$errors->has('password2') ? 'is-invalid' : ''}}" id="password2" placeholder="Confirme Palavra-passe" required="">
                            @if($errors->has('password2'))
                                <div class="invalid-feedback">
                                    {{$errors->first('password2')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group col-md-8 offset-md-2">
                        <button type="submit" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4 m-b-5">Gravar</button>
                        <button type="calcel" class="flex-c-m size1 bg2 bo-rad-20 hov1 s-text1 trans-0-4">Cancelar</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
        <div class="container col-md-6 offset-md-2 shadow-lg p-3 mb-5 bg-white rounded">
            <div class="card border">
                <div class="card-header">
                    <div class="card title text-lg-center">
                        <h2>Crie a sua conta já hoje!</h2>
                    </div>
                </div>
                <div class="card-body">
                    <p>
                        Lorem ipsum dolor sit amet,consetetur sadipscing elitr,  consetetur sadipscing elitr,  sed diam voluptua.  Lorem ipsum dolor sit amet,  sed diam voluptua.  sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,  sed diam voluptua.  sed diam voluptua.  Lorem ipsum dolor sit amet,

                        Lorem ipsum dolor sit amet,Stet clita kasd gubergren,  sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,  sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,  Stet clita kasd gubergren,  no sea takimata sanctus est Lorem ipsum dolor sit amet.  Stet clita kasd gubergren,  sed diam voluptua.  At vero eos et accusam et justo duo dolores et ea rebum.  sed diam voluptua.

                        Lorem ipsum dolor sit amet,At vero eos et accusam et justo duo dolores et ea rebum.  Stet clita kasd gubergren,  Lorem ipsum dolor sit amet,  At vero eos et accusam et justo duo dolores et ea rebum.  At vero eos et accusam et justo duo dolores et ea rebum.  sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,  no sea takimata sanctus est Lorem ipsum dolor sit amet.  At vero eos et accusam et justo duo dolores et ea rebum.  no sea takimata sanctus est Lorem ipsum dolor sit amet.


                    </p>

                </div>
            </div>
        </div>
    </div>
</main>


<script src="{{asset('js/app.js')}}" type="javascript"></script>
</body>
</html>





