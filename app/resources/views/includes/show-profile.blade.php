<div class="container col-md-12 offset-md-2 shadow-lg p-3 mb-5 bg-white rounded">
    <div class="modal-body row">
        <form class="col-md-2">
        </form>
        <form class="col-md-6">
            <h2>Perfil do utilizador</h2>
            <br>
            Nome
            <div class="form-group bo4 of-hidden size15 m-b-20">
                <label class="sr-only" for="nome">Nome</label>
                <input type="text" name="nome" id="nome"  readonly class="form-control {{$errors->has('nome') ? 'is-invalid' : ''}}" value="Zé Utilizador">
                @if($errors->has('nome'))
                    <div class="invalid-feedback">
                        {{$errors->first('nome')}}
                    </div>
                @endif
            </div>

            Email
            <div class="form-group bo4 of-hidden size15 m-b-20">
                <label class="sr-only" for="email">Email</label>
                <input type="email" name="email" id="email" readonly class="form-control {{$errors->has('email') ? 'is-invalid' : ''}}" value="utilizador@mail.com">
                <small id="emailHelp" class="form-text text-muted"></small>
                @if($errors->has('email'))
                    <div class="invalid-feedback">
                        {{$errors->first('email')}}
                    </div>
                @endif
            </div>

            Morada
            <div class="form-group bo4 of-hidden size15 m-b-20">
                <label class="sr-only" for="morada">Morada</label>
                <input type="text" name="morada" id="morada" readonly class="form-control {{$errors->has('morada') ? 'is-invalid' : ''}}" value="Avenida de algures, nº82 1º Dir">
                @if($errors->has('morada'))
                    <div class="invalid-feedback">
                        {{$errors->first('morada')}}
                    </div>
                @endif
            </div>

            Código Postal
            <div class="form-group bo4 of-hidden size15 m-b-20">
                <label class="sr-only" for="cod_postal">Código Postal</label>
                <input type="text" name="cod_postal" id="cod_postal" readonly class="form-control {{$errors->has('cod_postal') ? 'is-invalid' : ''}}" value="3800-000">
                @if($errors->has('cod_postal'))
                    <div class="invalid-feedback">
                        {{$errors->first('cod_postal')}}
                    </div>
                @endif
            </div>

            Localidade
            <div class="form-group bo4 of-hidden size15 m-b-20">
                <label class="sr-only" for="localidade">Localidade</label>
                <input type="text" name="localidade" id="localidade" readonly class="form-control {{$errors->has('localidade') ? 'is-invalid' : ''}}" value="Aveiro">
                @if($errors->has('localidade'))
                    <div class="invalid-feedback">
                        {{$errors->first('localidade')}}
                    </div>
                @endif
            </div>

            Número de Contribuinte
            <div class="form-group bo4 of-hidden size15 m-b-20">
                <label class="sr-only" for="nif">Número de Contribuinte</label>
                <input type="number" name="nif" id="nif" readonly class="form-control {{$errors->has('nif') ? 'is-invalid' : ''}}" value="1234567890">
                @if($errors->has('nif'))
                    <div class="invalid-feedback">
                        {{$errors->first('nif')}}
                    </div>
                @endif
            </div>

            Cartão de Cidadão
            <div class="form-group bo4 of-hidden size15 m-b-20">
                <label class="sr-only" for="cc">Cartão de Cidadão</label>
                <input type="text" name="cc" id="cc" readonly class="form-control {{$errors->has('cc') ? 'is-invalid' : ''}}" value="12345678-Z1E">
                @if($errors->has('cc'))
                    <div class="invalid-feedback">
                        {{$errors->first('cc')}}
                    </div>
                @endif
            </div>

            Data de Nascimento
            <div class="form-group bo4 of-hidden size15 m-b-20">
                <label class="sr-only" for="nascimento">Data de Nascimento</label>
                <input type="text" name="nascimento" id="nascimento" readonly class="form-control {{$errors->has('nascimento') ? 'is-invalid' : ''}}" value="01/01/2000">
                @if($errors->has('nascimento'))
                    <div class="invalid-feedback">
                        {{$errors->first('nascimento')}}
                    </div>
                @endif
            </div>

            Contacto
            <div class="form-group bo4 of-hidden size15 m-b-20">
                <label class="sr-only" for="contacto">Contacto</label>
                <input type="number" name="contacto" id="contacto" readonly class="form-control {{$errors->has('contacto') ? 'is-invalid' : ''}}" value="912345678">
                @if($errors->has('contacto'))
                    <div class="invalid-feedback">
                        {{$errors->first('contacto')}}
                    </div>
                @endif
            </div>
            
            <!-- A função onclick serve apenas para o protótipo. -->
            {{--<button type="submit" onclick="window.location.href='/perfil/editar'" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">Editar perfil</button>--}}
            <div class="w-size25">
                <a class="flex-c-m size2 bg1 bo-rad-23 hov1 s-text3 trans-0-4 p-2 text-white" href="/perfil/editar">Editar perfil</a>
            </div>

        </div>
        <div class="col-md"></div>
        <div class="col-md"></div>
    </div>
</div>