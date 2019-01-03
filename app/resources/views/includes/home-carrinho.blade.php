<style>
    .testesAP{ padding: 150px;}
</style>
<!-- Home carrinho -->
<main role="main" class="m-t-20" class="testesAP">
    <div class="row">
        <div class="container shadow-lg p-3 mb-5 bg-white rounded">
            <div class="row">
                <div class="col-sm">
                    <h4 class="font-weight-bold">Carrinho</h4>
                </div>
                <div class="col-sm">
                    <h4>Detalhes de compra</h4>
                </div>
                <div class="col-sm">
                    <h4>Resumo</h4>
                </div>
                <div class="col-sm">
                    <h4>Final</h4>
                </div>
            </div>

        </div>


        @include('profile.favourites')


  </div>

</main>


<script src="{{asset('js/app.js')}}" type="javascript"></script>





