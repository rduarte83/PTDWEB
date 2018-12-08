<div class="container col-md-12 offset-md-2 shadow-lg p-3 mb-5 bg-white rounded">
    <h2>Editar perfil</h2>
    <br>
    <div class="modal-body row">
        <div class="col-md-4">
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAeFBMVEX///8AAACWlpaampqdnZ3f39/i4uL6+vqlpaWtra3t7e1RUVGOjo7y8vL8/PwdHR28vLzHx8cjIyN1dXUuLi5KSkp+fn5jY2OoqKjAwMBXV1eKiooRERFvb28hISHW1tY1NTU/Pz8WFhYzMzO2trZGRkY8PDyBgYFw9cRnAAAEHUlEQVR4nO3ciXaqMBAGYKOIYHFBcG291F6t7/+GV27bU60QEjIwg/2/J8h/WLJN0usBAAAAAAAAAAAAAAAAAAAAPKJhNg+8vreZZ0PuptDzwyRV19Lk6HM3ik4WLVSRRfQYz/L4Xhjvw2HO3TxnmzdNvtws5G6ik3lFvP/ettzNrG28NAl4sZtwN7We0DBfrpOfY2IRUKkzd3OtjQ5WAZV64m6xpfHMMuBlDNCpj3Fsne/irUMRJ3UCXsY4I+6Gm5qm1WkKvXO33JRpN3hvzd10M8+1AyrlcTfeROwQUKkuzDacAqoFd/Ornd0Syn9PfceASknvFXfOCRPuCHqZc0ClxtwhtNYECUVPM2qNR+9IHrz1SRJKXrl5IUl44I5RjuI/k5P7r4mIEsp9TV+JEoqdYoyIAirFnaSM26zimtRNG48sodRVcLsVUp0+d5QSB7KEUkff9mukZZbcUYpNyQKqlDtLMbrOQs24sxQjTCi0QyR8S9WUO0wxuoAv3FFK0P1LhX6HvbrbFfeE/ksJ1tm+SJ1cuGxY3HrmjlLCpjRBT+oUmGoRQ6mMO0oZsoTcQUrV3xq9JbcuY0CUUO7+E9WHKHib9A9JQKn9fY5mpSbgjqFBszMjeo90TxBQ6iLNhyFBQqmLpZ/ct0hlP0KKSgW5G0+fXCcYUheDr7jtknagYshxYCN4OPPNZTNfcmd/5al2QKmrF3eKjzlV60wFbd3B24vo4dqth69krxXxT6cC9noT2+Xhk9CtCg27aYbocr0yR4uAUksTKoxNO8a15GpEPbMTljF3M50ElfmkruCb0550Xnb0A/whi4q7jteB8AULG36wvp03zvabB4r3aeRvwyAXbv3u/jwBAAAAAAAA4IFNJ1m8Db3ofF4l+/U+WZ3PkRdu42zSvb2KH6bDubc/6Q4pzE57bz7sZNBRtknMt4IXySbr0uLUNI5OxuG+LaNuLO/7Qf1CBaV2gfBVVH/gfm7mryc25CikOo//Hkr8KId055xzK2nFUVuqgwjfniT9d451S4T0Uim3mh5pKvSLLCRkjJt5fl9S7nfVuBihvh1r0TDdiUMdvrLhmO7gr96C6bQebQeot2LIl7X1AD+krQ/lKutkyLVcd0Nxt56tfYv5xs32gWVeW6tApTvRbKul4bhROV5DWhnhUB32raeF/w3N5Y+CI3IHbDxi+93gvWOTAW1Kt5vT4O+G7tpAN411Gu7nQ6k01PVT3uXlqKE7CZqfzptrZIzaznze1IY+oJS/zBfy+SLldXMkyD9FiusgaEW0AaW9ozna95RnyqtHeskp3T1llChHb7xzwjKUK8UyEw6QEAmRkB0SIiES8kNCJERCfkiIhL8rIf+eWhHKGXAc9eXpSOE7AAAAAAAAAAAAAAAAAAAA/Cb/AG0FRgprI4CqAAAAAElFTkSuQmCC" alt="Profile photo.">
            <br>
            <a href="#">Carregar nova imagem</a>
        </div>
        <form class="col-md-8">
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

            Cartão de Cidadão
            <div class="form-group bo4 of-hidden size15 m-b-20">
                <label class="sr-only" for="cc">Cartão de Cidadão</label>
                <input type="text" name="cc" id="cc" class="form-control {{$errors->has('cc') ? 'is-invalid' : ''}}" placeholder="Cartão de Cidadão">
                @if($errors->has('cc'))
                    <div class="invalid-feedback">
                        {{$errors->first('cc')}}
                    </div>
                @endif
            </div>

            Data de Nascimento
            <div class="form-group bo4 of-hidden size15 m-b-20">
                <label class="sr-only" for="nascimento">Data de Nascimento</label>
                <input type="date" name="nascimento" id="nascimento" class="form-control {{$errors->has('nascimento') ? 'is-invalid' : ''}}" placeholder="Data de Nascimento">
                @if($errors->has('nascimento'))
                    <div class="invalid-feedback">
                        {{$errors->first('nascimento')}}
                    </div>
                @endif
            </div>

            Contacto
            <div class="form-group bo4 of-hidden size15 m-b-20">
                <label class="sr-only" for="contacto">Contacto</label>
                <input type="number" name="contacto" id="contacto" class="form-control {{$errors->has('contacto') ? 'is-invalid' : ''}}" placeholder="Contacto">
                @if($errors->has('contacto'))
                    <div class="invalid-feedback">
                        {{$errors->first('contacto')}}
                    </div>
                @endif
            </div>


            <div class="text-center  flex-w flex-sb-m p-t-25 p-b-25  p-l-35 p-r-60 p-lr-15-sm">
                <div class="w-size25">
                    <a class="flex-c-m size2 bg1 bo-rad-23 hov1 s-text3 trans-0-4 p-2 text-white" href="/perfil">Cancelar</a>
                </div>
                <div class="w-size25">
                    <button type="submit" class="flex-c-m size2 bg1 bo-rad-23 hov1 s-text3 trans-0-4 p-2 text-white">Guardar alterações</button>
                </div>
            </div>
        </form>
    </div>
</div>