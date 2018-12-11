<!doctype html>
<html lang="pt">
<head>
    @include('ui.head')
</head>
<body>
    @include('ui.header')
    @yield("header")
<!-- Registo de Cliente -->
<section class="cart bgwhite p-t-50 p-b-300">
    <div class="row">
        <div class="container col-md-4 offset-md-2 shadow-lg p-3 mb-5 bg-white rounded">
            <div class="card border">
                <div class="card-header">
                    <div class="card title text-lg-center">
                        <h2>Registo de Cliente</h2>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{URL("clienteregisto")}}" method="post">
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
                            <small id="emailHelp" class="form-text text-muted"></small>
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
                        <div class="header-cart-buttons col-md-8 offset-md-2 m-auto">
                            <div class="header-cart-wrapbtn">
                                 <button type="submit" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">Gravar</button>
                            </div>
                            <div class="header-cart-wrapbtn">
                                 <button type="calcel" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">Cancelar</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
        <div class="container col-md-6 offset-md-2 shadow-lg p-3 mb-5 bg-white rounded">
            <div class="card border">
                <div class="card-header">
                    <div class="card title text-lg-center">
                        <h2>POLÍTICA DE PRIVACIDADE</h2>
                    </div>
                </div>
                <div class="card-body">

                    <section class="content">

                        <h4>Para que fins podemos utilizar os seus dados pessoais?</h4>

                        <p>Serviço de apoio a clientes: utilizamos os seus Dados Pessoais para fins de serviço de apoio ao cliente, incluindo responder às suas questões. Esse processo envolve, normalmente, o uso de determinada informação de contacto pessoal e informação relacionada com o motivo da sua questão (por ex, questão técnica, questão/reclamação sobre o produto, questão de natureza geral, etc.).</p>



                        <h4>Contacte-nos</h4>

                        <p>Se tiver alguma questão relacionada com a utilização dos seus dados pessoais poderá contactar o nosso Encarregado de Proteção de Dados através do seguinte endereço de e-mail: privacidade@mail.pt</p>

                        <p>Página actualizada em: 16 de Novembro de 2018</p>
                    </section>


                </div>
            </div>
        </div>
    </div>
</section>

@include('ui.footer')
@yield("footer")

@include("ui.script-includes")
</body>
</html>





