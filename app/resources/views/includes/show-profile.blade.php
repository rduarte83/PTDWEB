<div class="container col-md-12 offset-md-2 shadow-lg p-3 mb-5 bg-white rounded">
    <h2>Perfil do utilizador</h2>
    <br>
    
    <div class="modal-body row">
        <div class="col-md">
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAeFBMVEX///8AAACWlpaampqdnZ3f39/i4uL6+vqlpaWtra3t7e1RUVGOjo7y8vL8/PwdHR28vLzHx8cjIyN1dXUuLi5KSkp+fn5jY2OoqKjAwMBXV1eKiooRERFvb28hISHW1tY1NTU/Pz8WFhYzMzO2trZGRkY8PDyBgYFw9cRnAAAEHUlEQVR4nO3ciXaqMBAGYKOIYHFBcG291F6t7/+GV27bU60QEjIwg/2/J8h/WLJN0usBAAAAAAAAAAAAAAAAAAAAPKJhNg+8vreZZ0PuptDzwyRV19Lk6HM3ik4WLVSRRfQYz/L4Xhjvw2HO3TxnmzdNvtws5G6ik3lFvP/ettzNrG28NAl4sZtwN7We0DBfrpOfY2IRUKkzd3OtjQ5WAZV64m6xpfHMMuBlDNCpj3Fsne/irUMRJ3UCXsY4I+6Gm5qm1WkKvXO33JRpN3hvzd10M8+1AyrlcTfeROwQUKkuzDacAqoFd/Ornd0Syn9PfceASknvFXfOCRPuCHqZc0ClxtwhtNYECUVPM2qNR+9IHrz1SRJKXrl5IUl44I5RjuI/k5P7r4mIEsp9TV+JEoqdYoyIAirFnaSM26zimtRNG48sodRVcLsVUp0+d5QSB7KEUkff9mukZZbcUYpNyQKqlDtLMbrOQs24sxQjTCi0QyR8S9WUO0wxuoAv3FFK0P1LhX6HvbrbFfeE/ksJ1tm+SJ1cuGxY3HrmjlLCpjRBT+oUmGoRQ6mMO0oZsoTcQUrV3xq9JbcuY0CUUO7+E9WHKHib9A9JQKn9fY5mpSbgjqFBszMjeo90TxBQ6iLNhyFBQqmLpZ/ct0hlP0KKSgW5G0+fXCcYUheDr7jtknagYshxYCN4OPPNZTNfcmd/5al2QKmrF3eKjzlV60wFbd3B24vo4dqth69krxXxT6cC9noT2+Xhk9CtCg27aYbocr0yR4uAUksTKoxNO8a15GpEPbMTljF3M50ElfmkruCb0550Xnb0A/whi4q7jteB8AULG36wvp03zvabB4r3aeRvwyAXbv3u/jwBAAAAAAAA4IFNJ1m8Db3ofF4l+/U+WZ3PkRdu42zSvb2KH6bDubc/6Q4pzE57bz7sZNBRtknMt4IXySbr0uLUNI5OxuG+LaNuLO/7Qf1CBaV2gfBVVH/gfm7mryc25CikOo//Hkr8KId055xzK2nFUVuqgwjfniT9d451S4T0Uim3mh5pKvSLLCRkjJt5fl9S7nfVuBihvh1r0TDdiUMdvrLhmO7gr96C6bQebQeot2LIl7X1AD+krQ/lKutkyLVcd0Nxt56tfYv5xs32gWVeW6tApTvRbKul4bhROV5DWhnhUB32raeF/w3N5Y+CI3IHbDxi+93gvWOTAW1Kt5vT4O+G7tpAN411Gu7nQ6k01PVT3uXlqKE7CZqfzptrZIzaznze1IY+oJS/zBfy+SLldXMkyD9FiusgaEW0AaW9ozna95RnyqtHeskp3T1llChHb7xzwjKUK8UyEw6QEAmRkB0SIiES8kNCJERCfkiIhL8rIf+eWhHKGXAc9eXpSOE7AAAAAAAAAAAAAAAAAAAA/Cb/AG0FRgprI4CqAAAAAElFTkSuQmCC" alt="Profile photo.">
        </div>
        <form class="col-md-8">
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