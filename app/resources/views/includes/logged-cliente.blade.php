

<div class="body">
    <div class="form-group  text-center">
        <div class="m-auto p-t-10">
            <h5>{{Auth::user()->nome}}</h5>
        </div>
    </div>
    <hr>
    <div class="form-group text-center">
        <div class="m-auto">
            <a class="align-content-center" href="{{URL("perfil")}}">Perfil</a>
        </div>
        <div class="m-auto">
            <a class="align-content-center" href="{{URL("perfil/favoritos")}}">Favoritos</a>
        </div>
        <div class="m-auto">
            <a class="align-content-center" href="{{URL("perfil/historico")}}">Histórico</a>
        </div>
    </div>
    <hr>
    <div class="form-group header-cart-buttons">
        <div class="header-cart-wrapbtn m-auto">
            <a href="{{URL("logout")}}" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                Logout
            </a>
        </div>
    </div>
</div>






