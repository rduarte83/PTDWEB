

<!-- Login
<div class="header">
    <div class="card title text-lg-center">
        <h2>Login</h2>
    </div>
</div>-->
<div class="body">
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
            <div class="header-cart-wrapbtn m-auto">
                <!-- A função onclick serve apenas para o protótipo. -->
                <button type="submit" onclick="window.location.href={{URL("perfil")}}" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">Login</button>
            </div>
        </div>

        <!-- Other Option -->
        <!--
        <div class="form-group">
            <button type="submit" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">Login</button>
         </div>-->

        <!--<div class="checkbox">
               <label>
               <input type="checkbox"> Mantenha-me conectado
               </label>
            </div>-->
        <div class="help-block text-center p-t-5"><a href="{{URL("registar")}}">Não tem Conta? Registe-se já!</a></div>
        <div class="help-block text-center"><a href="#">Recuperar Conta</a></div>
    </form>
</div>






