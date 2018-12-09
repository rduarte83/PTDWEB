@extends("layouts.default")
@section("title")
    Registo
@endsection
@section("content")
<!-- Registo de Cliente -->

<main role="main" class="largura_1">
    <div class="container-fluid">
    <div class="row">
        <div class="col-md-12 offset-md-2 shadow-lg">
            <div class="title text-lg-center">
                <h2 class="m-text26 p-b-36 p-t-15">Registo de Cliente</h2>
            </div>
            <form action="/clienteregisto" method="post">
                @csrf
                <div class="form-group bo4 of-hidden size15 m-b-20">
                    <label class="sr-only" for="nome">Nome</label>
                    <input type="text" name="nome" id="nome" class="form-control {{$errors->has('nome') ? 'is-invalid' : ''}}" placeholder="Nome">
                    @if($errors->has('nome'))
                        <div class="invalid-feedback">
                            {{$errors->first('nome')}}
                        </div>
                    @endif
                </div>
                <div class="form-group bo4 of-hidden size15 m-b-20">
                    <label class="sr-only" for="email">Email Cliente</label>
                    <input type="email" name="email" id="email" class="form-control {{$errors->has('email') ? 'is-invalid' : ''}}" placeholder="E-mail do cliente">
                    <small id="emailHelp" class="form-text text-muted"></small>
                    @if($errors->has('email'))
                        <div class="invalid-feedback">
                            {{$errors->first('email')}}
                        </div>
                    @endif
                </div>
                <div class="form-group bo4 of-hidden size15 m-b-20">
                    <label class="sr-only" for="Password">Palavra-passe</label>
                    <input type="password1" class="form-control {{$errors->has('password1') ? 'is-invalid' : ''}}" id="password1" placeholder="Palavra-passe" required="">
                    @if($errors->has('password1'))
                        <div class="invalid-feedback">
                            {{$errors->first('password1')}}
                        </div>
                    @endif
                </div>
                <div class="form-group bo4 of-hidden size15 m-b-10">
                    <label class="sr-only" for="password2">Confirme Palavra-passe</label>
                    <input type="password" class="form-control {{$errors->has('password2') ? 'is-invalid' : ''}}" id="password2" placeholder="Confirme Palavra-passe" aria-describedby="termos" required="">
                    @if($errors->has('password2'))
                        <div class="invalid-feedback">
                            {{$errors->first('password2')}}
                        </div>
                    @endif
                </div>
                <small id="termos" class="form-text text-muted m-t-2">
                    <a class="text-sm" data-toggle="collapse" href="#pprivacidade" role="button" aria-expanded="false" aria-controls="pprivacidade">
                        <strong><u>Política de privacidade</u></strong>
                    </a>
                </small>
                <div class="form-group w-size25 ">
                    <br>
                    <button type="submit" class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4">Registar</button>
                </div>
            </form>
            <div class="col-md-12 offset-md-2 shadow-lg m-b-15">
                <div class="col">
                    <div class="collapse multi-collapse" id="pprivacidade">
                        <div class="card card-body">
                            <div class="title text-lg-center">
                                <h3>POLÍTICA DE PRIVACIDADE</h3>
                            </div>
                            <section class="content text-justify">
                                <h4 class="p-t-14">Para que fins podemos utilizar os seus dados pessoais?</h4>

                                <p class="p-t-8">Serviço de apoio a clientes: utilizamos os seus Dados Pessoais para fins de serviço de apoio ao cliente, incluindo responder às suas questões. Esse processo envolve, normalmente, o uso de determinada informação de contacto pessoal e informação relacionada com o motivo da sua questão (por ex, questão técnica, questão/reclamação sobre o produto, questão de natureza geral, etc.).</p>

                                <h4 class="p-t-29">Contacte-nos</h4>

                                <p class="p-t-5" >Se tiver alguma questão relacionada com a utilização dos seus dados pessoais poderá contactar o nosso Encarregado de Proteção de Dados através do seguinte endereço de e-mail: <span><a
                                                href="mailto:privacidade@mail.pt">privacidade@mail.pt</a></span></p>

                                <p class="p-t-29"><b>Página actualizada em:</b> 16 de Novembro de 2018</p>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</main>
@endsection
