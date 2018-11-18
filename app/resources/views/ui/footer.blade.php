@section("footer")
<!-- Footer  -->
<footer class="bg6 p-t-45 p-b-43 p-l-45 p-r-45">
    <div class="flex-w">
      <div class="w-size6 p-t-30 p-l-15 p-r-15 respon3">
        <h4 class="s-text12 p-b-30">
          Entre em contacto!
        </h4>

        <div>
          <p class="s-text7 w-size27">
            Alguma questão? Entre em contacto connosco a partir de redes sociais ou ligue para o 234 123 456. A nossa
            loja encontra-se em
            Rua do Augusto, Edificio Avenida, piso 8, 3810-123 Aveiro.
          </p>

          <div class="flex-m p-t-30">
            <a href="#" class="fs-18 color1 p-r-20 fa fa-facebook"></a>
            <a href="#" class="fs-18 color1 p-r-20 fa fa-instagram"></a>
            <a href="#" class="fs-18 color1 p-r-20 fa fa-youtube-play"></a>
          </div>
		</div>


    </div>



      <div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
        <h4 class="s-text12 p-b-30">
          Categories
        </h4>

        <ul>
          <li class="p-b-9">
            <a href="#" class="s-text7">
              Men
            </a>
          </li>

          <li class="p-b-9">
            <a href="#" class="s-text7">
              JOAO
            </a>
          </li>

          <li class="p-b-9">
            <a href="#" class="s-text7">
              Dresses
            </a>
          </li>

          <li class="p-b-9">
            <a href="#" class="s-text7">
              Sunglasses
            </a>
          </li>
        </ul>
      </div>

      <div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
        <h4 class="s-text12 p-b-30">
          Ajuda e Links
        </h4>

        <ul>
          <li class="p-b-9">
            <a href="#" class="s-text7">
              Procurar
            </a>
          </li>

          <li class="p-b-9">
            <a href="#" class="s-text7">
              Sobre nós
            </a>
          </li>

          <li class="p-b-9">
            <a href="#" class="s-text7">
              FAQs
            </a>
          </li>
        </ul>
      </div>
      <div class="w-size7 p-t-30 p-l-15 p-r-15 respon4" style="">
          <h4 class="s-text12 p-b-30">
              Localização
          </h4>
         <div id='map' style='text-align: center; margin: auto; width: 370px; height: 230px;'></div>
      </div>

    </div>




    <div class="t-center p-l-15 p-r-15">
      <div class="t-center s-text8 p-t-20">
        Copyright © 2018 OniGas - Grp2
      </div>
    </div>




    <script>

        // ----- Linha em baixo tem de ser descomentada para poder usar os mapas
        // ----- apenas para poupar requests à API
        //mapboxgl.accessToken = 'pk.eyJ1IjoicGluaG8yNyIsImEiOiJjamdvM3Z0dzgyeDc0MnFxbzV6Ym1pNjBsIn0.h2movOiQKha_yHE5R49Uig';
        var map = new mapboxgl.Map({
            container: "map",
            style: "mapbox://styles/mapbox/light-v9",
            zoom:5,
            center: [-8.4441281,40.5744432]
        });
        map.addControl(new mapboxgl.NavigationControl());
        map.accessToken='pk.eyJ1IjoicGluaG8yNyIsImEiOiJjamdvM3Z0dzgyeDc0MnFxbzV6Ym1pNjBsIn0.h2movOiQKha_yHE5R49Uig';

        map.on("load", function () {
            /* Image: An image is loaded and added to the map. */
            map.loadImage("https://i.imgur.com/MK4NUzI.png", function(error, image) {
                if (error) throw error;
                map.addImage("custom-marker", image);
                /* Style layer: A style layer ties together the source and image and specifies how they are displayed on the map. */
                map.addLayer({
                    id: "markers",
                    type: "symbol",
                    /* Source: A data source specifies the geographic coordinate where the image marker gets placed. */
                    source: {
                        type: "geojson",
                        data: {
                            type: "FeatureCollection",
                            features:[{
                                "type":"Feature",
                                "properties": {
                                    "description": "<strong>Make it Mount Pleasant</strong><p><a href=\"http://www.mtpleasantdc.com/makeitmtpleasant\" target=\"_blank\" title=\"Opens in a new window\">Make it Mount Pleasant</a> is a handmade and vintage market and afternoon of live entertainment and kids activities. 12:00-6:00 p.m.</p>",
                                    "icon": "theatre"
                                },
                                "geometry":{
                                    "type":"Point",
                                    "coordinates":[-8.4441281,40.5744432]
                                }
                            }]
                        }
                    },
                    layout: {
                        "icon-image": "custom-marker",
                    }
                });
            });
            map.on('click', 'markers', function (e) {
                var coordinates = e.features[0].geometry.coordinates.slice();
                var description = e.features[0].properties.description;

                // Ensure that if the map is zoomed out such that multiple
                // copies of the feature are visible, the popup appears
                // over the copy being pointed to.
                while (Math.abs(e.lngLat.lng - coordinates[0]) > 180) {
                    coordinates[0] += e.lngLat.lng > coordinates[0] ? 360 : -360;
                }

                new mapboxgl.Popup()
                    .setLngLat(coordinates)
                    .setHTML(description)
                    .addTo(map);
            });

            // Change the cursor to a pointer when the mouse is over the places layer.
            map.on('mouseenter', 'markers', function () {
                map.getCanvas().style.cursor = 'pointer';
            });

            // Change it back to a pointer when it leaves.
            map.on('mouseleave', 'markers', function () {
                map.getCanvas().style.cursor = '';
            });
        });
    </script>
  </footer>

<!-- Back to top -->
<div class="btn-back-to-top bg0-hov" id="myBtn">
    <span class="symbol-btn-back-to-top">
        <i class="fa fa-angle-double-up" aria-hidden="true"></i>
    </span>
</div>


<!-- Container Selection1 -->
<div id="dropDownSelect1"></div>


@endsection
