<div class="container col-md-12 offset-md-2 shadow-lg p-3 mb-5 bg-white rounded">
    <h2>Perfil do utilizador</h2>
    <br>
    
    <div class="modal-body row">
        <div class="col-md">
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAeFBMVEX///8AAACWlpaampqdnZ3f39/i4uL6+vqlpaWtra3t7e1RUVGOjo7y8vL8/PwdHR28vLzHx8cjIyN1dXUuLi5KSkp+fn5jY2OoqKjAwMBXV1eKiooRERFvb28hISHW1tY1NTU/Pz8WFhYzMzO2trZGRkY8PDyBgYFw9cRnAAAEHUlEQVR4nO3ciXaqMBAGYKOIYHFBcG291F6t7/+GV27bU60QEjIwg/2/J8h/WLJN0usBAAAAAAAAAAAAAAAAAAAAPKJhNg+8vreZZ0PuptDzwyRV19Lk6HM3ik4WLVSRRfQYz/L4Xhjvw2HO3TxnmzdNvtws5G6ik3lFvP/ettzNrG28NAl4sZtwN7We0DBfrpOfY2IRUKkzd3OtjQ5WAZV64m6xpfHMMuBlDNCpj3Fsne/irUMRJ3UCXsY4I+6Gm5qm1WkKvXO33JRpN3hvzd10M8+1AyrlcTfeROwQUKkuzDacAqoFd/Ornd0Syn9PfceASknvFXfOCRPuCHqZc0ClxtwhtNYECUVPM2qNR+9IHrz1SRJKXrl5IUl44I5RjuI/k5P7r4mIEsp9TV+JEoqdYoyIAirFnaSM26zimtRNG48sodRVcLsVUp0+d5QSB7KEUkff9mukZZbcUYpNyQKqlDtLMbrOQs24sxQjTCi0QyR8S9WUO0wxuoAv3FFK0P1LhX6HvbrbFfeE/ksJ1tm+SJ1cuGxY3HrmjlLCpjRBT+oUmGoRQ6mMO0oZsoTcQUrV3xq9JbcuY0CUUO7+E9WHKHib9A9JQKn9fY5mpSbgjqFBszMjeo90TxBQ6iLNhyFBQqmLpZ/ct0hlP0KKSgW5G0+fXCcYUheDr7jtknagYshxYCN4OPPNZTNfcmd/5al2QKmrF3eKjzlV60wFbd3B24vo4dqth69krxXxT6cC9noT2+Xhk9CtCg27aYbocr0yR4uAUksTKoxNO8a15GpEPbMTljF3M50ElfmkruCb0550Xnb0A/whi4q7jteB8AULG36wvp03zvabB4r3aeRvwyAXbv3u/jwBAAAAAAAA4IFNJ1m8Db3ofF4l+/U+WZ3PkRdu42zSvb2KH6bDubc/6Q4pzE57bz7sZNBRtknMt4IXySbr0uLUNI5OxuG+LaNuLO/7Qf1CBaV2gfBVVH/gfm7mryc25CikOo//Hkr8KId055xzK2nFUVuqgwjfniT9d451S4T0Uim3mh5pKvSLLCRkjJt5fl9S7nfVuBihvh1r0TDdiUMdvrLhmO7gr96C6bQebQeot2LIl7X1AD+krQ/lKutkyLVcd0Nxt56tfYv5xs32gWVeW6tApTvRbKul4bhROV5DWhnhUB32raeF/w3N5Y+CI3IHbDxi+93gvWOTAW1Kt5vT4O+G7tpAN411Gu7nQ6k01PVT3uXlqKE7CZqfzptrZIzaznze1IY+oJS/zBfy+SLldXMkyD9FiusgaEW0AaW9ozna95RnyqtHeskp3T1llChHb7xzwjKUK8UyEw6QEAmRkB0SIiES8kNCJERCfkiIhL8rIf+eWhHKGXAc9eXpSOE7AAAAAAAAAAAAAAAAAAAA/Cb/AG0FRgprI4CqAAAAAElFTkSuQmCC" alt="Profile photo.">
        </div>
        <div class="col-md">
            <h5>Nome de utilizador</h5>
            <span>{{'$user_name'}}</span>
            <br><br>
            <h5>Email</h5>
            <span>{{'$email'}}</span>
            <br><br>
            <h5>NIF</h5>
            <span>{{'$n_contribuinte'}}</span>
            <br><br>
            <h5>Morada</h5>
            <span>{{'$morada'}}</span>
            <br><br>
            
            <!-- A função onclick serve apenas para o protótipo. -->
            <button type="submit" onclick="window.location.href='/perfil/editar'" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">Editar perfil</button>
        </div>
        <div class="col-md"></div>
        <div class="col-md"></div>
    </div>
</div>