@extends("profile")
@section("content-profile")
    <div class="container col-md-12 offset-md-2 shadow-lg p-3 mb-5 bg-white rounded">
        <div class="modal-body row">
            <form class="col-md-2">
            </form>
            <form class="col-md-6" action="/perfil/edit" method="POST">
                <!-- Token -->
                @csrf
                <h2>Editar Perfil</h2>
                <br>
                Nome
                <div class="form-group bo4">
                    <label class="sr-only" for="nome">Nome</label>
                    <input type="text" name="nome" id="nome" class="form-control {{$errors->has('nome') ? 'is-invalid' : ''}}" placeholder="Nome" value="{{$user->nome}}">
                    @if($errors->has('nome'))
                        <div class="invalid-feedback">
                            {{$errors->first('nome')}}
                        </div>
                    @endif
                </div>

                Email
                <div class="form-group bo4">
                    <label class="sr-only" for="email">Email Cliente</label>
                    <input type="email" name="email" id="email" class="form-control {{$errors->has('email') ? 'is-invalid' : ''}}" placeholder="E-mail" value="{{$user->email}}">
                    <small id="emailHelp" class="form-text text-muted"></small>
                    @if($errors->has('email'))
                        <div class="invalid-feedback">
                            {{$errors->first('email')}}
                        </div>
                    @endif
                </div>

                <!--Palavra-passe
                <div class="form-group bo4">
                    <label class="sr-only" for="Password1">Palavra-passe</label>
                    <input type="password" name="password1" class="form-control {{$errors->has('password1') ? 'is-invalid' : ''}}" id="password1" placeholder="Palavra-passe">
                    @if($errors->has('password1'))
                        <div class="invalid-feedback">
                            {{$errors->first('password1')}}
                        </div>
                    @endif
                </div>-->

                <!--Confirme Palavra-passe
                <div class="form-group bo4">
                    <label class="sr-only" for="password2">Confirme Palavra-passe</label>
                    <input type="password" name="password2" class="form-control {{$errors->has('password2') ? 'is-invalid' : ''}}" id="password2" placeholder="Confirme Palavra-passe">
                    @if($errors->has('password2'))
                        <div class="invalid-feedback">
                            {{$errors->first('password2')}}
                        </div>
                    @endif
                </div>-->

                Número de Contribuinte
                <div class="form-group bo4">
                    <label class="sr-only" for="nif">Número de Contribuinte</label>
                    <input type="number" name="nif" id="nif" class="form-control {{$errors->has('nif') ? 'is-invalid' : ''}}"
                           placeholder="Número de Contribuinte" value="{{$user->nif}}">
                    @if($errors->has('nif'))
                        <div class="invalid-feedback">
                            {{$errors->first('nif')}}
                        </div>
                    @endif
                </div>

                Morada
                <div class="form-group bo4">
                    <label class="sr-only" for="morada">Morada</label>
                    <input type="text" name="morada" id="passar_mouse_morada" class="form-control {{$errors->has('morada') ? 'is-invalid' : ''}}" placeholder="Morada" value="{{$user->morada}}">
                    @if($errors->has('morada'))
                        <div class="invalid-feedback">
                            {{$errors->first('morada')}}
                        </div>
                    @endif
                </div>
                <samll class="m-b-5 text-muted" id="mostrar1">Este campo não é obrigatório, porém o seu preenchimento permite uma pesquisa/máquina mais refinada.</samll>

                Código Postal
                <div class="form-group bo4">
                    <label class="sr-only" for="codigo_postal">Código Postal</label>
                    <input type="text" name="codigo_postal" id="passar_mouse_cod_postal" class="form-control {{$errors->has('codigo_postal') ? 'is-invalid' : ''}}" placeholder="Código Postal" value="{{$user->codigo_postal}}">
                    @if($errors->has('codigo_postal'))
                        <div class="invalid-feedback">
                            {{$errors->first('codigo_postal')}}
                        </div>
                    @endif
                </div>
                <samll class="m-b-5 text-muted" id="mostrar2">Este campo não é obrigatório, porém o seu preenchimento permite uma pesquisa/máquina mais refinada.</samll>


                Localidade
                <div class="form-group bo4">
                    <label class="sr-only" for="localidade">Localidade</label>
                    <input type="text" name="localidade" id="passar_mouse_localidade" class="form-control {{$errors->has('localidade') ? 'is-invalid' : ''}}" placeholder="Localidade" value="{{$user->localidade}}">
                    @if($errors->has('localidade'))
                        <div class="invalid-feedback">
                            {{$errors->first('localidade')}}
                        </div>
                    @endif
                </div>
                <samll class="m-b-5 text-muted" id="mostrar3">Este campo não é obrigatório, porém o seu preenchimento permite uma pesquisa/máquina mais refinada.</samll>

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

@section('javascript')
    <script type="text/javascript">
       // alert("olá");

        //$('#example').popover(options)
       /*$('#element').popover('show')

        $(function () {
            $('.nif').popover({
                container: 'body'
            });
        });*/

       $('#passar_mouse_morada').mouseover(function(){
           $('#mostrar1').css('display', 'block');
       });

       $('#passar_mouse_morada').mouseout(function(){
           $('#mostrar1').css('display', 'none');
       });
       $('#passar_mouse_cod_postal').mouseover(function(){
           $('#mostrar2').css('display', 'block');
       });

       $('#passar_mouse_cod_postal').mouseout(function(){
           $('#mostrar2').css('display', 'none');
       });
       $('#passar_mouse_localidade').mouseover(function(){
           $('#mostrar3').css('display', 'block');
       });

       $('#passar_mouse_localidade').mouseout(function(){
           $('#mostrar3').css('display', 'none');
       });

    </script>
@endsection
