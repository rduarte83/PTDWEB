@extends("profile")
@section("content-profile")
    <div class="container col-md-12 offset-md-2 shadow-lg p-3 mb-5 bg-white rounded">
        <div class="modal-body row">
            <form class="col-md-2">
            </form>
            <form class="col-md-6">
                <h2>Editar Perfil</h2>
                <br>
                Nome
                <div class="form-group bo4 of-hidden size15 m-b-20">
                    <label class="sr-only" for="nome">Nome</label>
                    <input type="text" name="nome" id="nome" class="form-control {{$errors->has('nome') ? 'is-invalid' : ''}}" placeholder="Nome">
                    @if($errors->has('nome'))
                        <div class="invalid-feedback">
                            {{$errors->first('nome')}}
                        </div>
                    @endif
                </div>

                Email
                <div class="form-group bo4 of-hidden size15 m-b-20">
                    <label class="sr-only" for="email">Email Cliente</label>
                    <input type="email" name="email" id="email" class="form-control {{$errors->has('email') ? 'is-invalid' : ''}}" placeholder="E-mail">
                    <small id="emailHelp" class="form-text text-muted"></small>
                    @if($errors->has('email'))
                        <div class="invalid-feedback">
                            {{$errors->first('email')}}
                        </div>
                    @endif
                </div>

                Palavra-passe
                <div class="form-group bo4 of-hidden size15 m-b-20">
                    <label class="sr-only" for="Password">Palavra-passe</label>
                    <input type="password1" class="form-control {{$errors->has('password1') ? 'is-invalid' : ''}}" id="password1" placeholder="Palavra-passe" required="">
                    @if($errors->has('password1'))
                        <div class="invalid-feedback">
                            {{$errors->first('password1')}}
                        </div>
                    @endif
                </div>

                Confirme Palavra-passe
                <div class="form-group bo4 of-hidden size15 m-b-20">
                    <label class="sr-only" for="password2">Confirme Palavra-passe</label>
                    <input type="password" class="form-control {{$errors->has('password2') ? 'is-invalid' : ''}}" id="password2" placeholder="Confirme Palavra-passe" aria-describedby="termos" required="">
                    @if($errors->has('password2'))
                        <div class="invalid-feedback">
                            {{$errors->first('password2')}}
                        </div>
                    @endif
                </div>

                Número de Contribuinte
                <div class="form-group bo4 of-hidden size15 m-b-20">
                    <label class="sr-only" for="nif">Número de Contribuinte</label>
                    <input type="number" name="nif" id="nif" class="form-control {{$errors->has('nif') ? 'is-invalid' : ''}}" placeholder="Número de Contribuinte">
                    @if($errors->has('nif'))
                        <div class="invalid-feedback">
                            {{$errors->first('nif')}}
                        </div>
                    @endif
                </div>

                Morada
                <div class="form-group bo4 of-hidden size15 m-b-20">
                    <label class="sr-only" for="morada">Morada</label>
                    <input type="text" name="morada" id="morada" class="form-control {{$errors->has('morada') ? 'is-invalid' : ''}}" placeholder="Morada">
                    @if($errors->has('morada'))
                        <div class="invalid-feedback">
                            {{$errors->first('morada')}}
                        </div>
                    @endif
                </div>

                Código Postal
                <div class="form-group bo4 of-hidden size15 m-b-20">
                    <label class="sr-only" for="cod_postal">Código Postal</label>
                    <input type="text" name="cod_postal" id="cod_postal" class="form-control {{$errors->has('cod_postal') ? 'is-invalid' : ''}}" placeholder="Código Postal">
                    @if($errors->has('cod_postal'))
                        <div class="invalid-feedback">
                            {{$errors->first('cod_postal')}}
                        </div>
                    @endif
                </div>

                Localidade
                <div class="form-group bo4 of-hidden size15 m-b-20">
                    <label class="sr-only" for="localidade">Localidade</label>
                    <input type="text" name="localidade" id="localidade" class="form-control {{$errors->has('localidade') ? 'is-invalid' : ''}}" placeholder="Localidade">
                    @if($errors->has('localidade'))
                        <div class="invalid-feedback">
                            {{$errors->first('localidade')}}
                        </div>
                    @endif
                </div>

                <div class="text-center  flex-w flex-sb-m p-t-25 p-b-25  p-l-35 p-r-60 p-lr-15-sm">
                    <div class="w-size25">
                        <a class="flex-c-m size2 bg1 bo-rad-23 hov1 s-text3 trans-0-4 p-2 text-white" href="{{URL("perfil")}}">Cancelar</a>
                    </div>
                    <div class="w-size25">
                        <button type="submit" class="flex-c-m size2 bg1 bo-rad-23 hov1 s-text3 trans-0-4 p-2 text-white">Guardar alterações</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
