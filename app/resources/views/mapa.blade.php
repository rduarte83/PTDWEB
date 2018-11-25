@extends("layouts.default")
@section("title")
    Map
@endsection
@section("content")

  <div class="pos-relative bo11 of-hidden w-size300 m-map">
      <input class="s-text7 size16 p-l-23 p-r-50" type="text" name="search-machine" placeholder="Procurar máquinas...">

      <button class="flex-c-m size5 ab-r-m color1 color0-hov trans-0-4">
        <i class="fs-13 fa fa-search" aria-hidden="true"></i>
      </button>
	</div>
	
	<div class="map-container">
		<div id='mapa' class='map-main'></div>
	</div>


	
	<script>
                // ----- Linha em baixo tem de ser descomentada para poder usar os mapas
                // ----- apenas para poupar requests à API
                mapboxgl.accessToken = 'pk.eyJ1IjoicGluaG8yNyIsImEiOiJjamdvM3Z0dzgyeDc0MnFxbzV6Ym1pNjBsIn0.h2movOiQKha_yHE5R49Uig';
                var mapa = new mapboxgl.Map({
                    container: "mapa",
                    style: "mapbox://styles/mapbox/light-v9",
                    zoom:5,
                    center: [-8.4441281,40.5744432]
                });
                mapa.addControl(new mapboxgl.NavigationControl());

                mapa.on("load", function () {
                    /* Image: An image is loaded and added to the map. */
                    mapa.loadImage("https://i.imgur.com/MK4NUzI.png", function(error, image) {
                        if (error) throw error;
                        mapa.addImage("custom-marker2", image);
                        /* Style layer: A style layer ties together the source and image and specifies how they are displayed on the map. */
                        mapa.addLayer({
                            id: "markers2",
                            type: "symbol",
                            /* Source: A data source specifies the geographic coordinate where the image marker gets placed. */
                            source: {
                                type: "geojson",
                                data: {
                                    type: "FeatureCollection",
                                    features:[{
								"type":"Feature",
								"properties": {
									"description": 
									'<h6>Máquina ESTGA</h6><ul>' + 
									'<li><a href=\"http://localhost:8000/product" target=\"_blank\" title=\"Comprar esta botija\">Galp propano</a><span class="s-text-map-pop-green"> - 3</span></li>' +
									'<li><a href=\"http://localhost:8000/product" target=\"_blank\" title=\"Comprar esta botija\">BP botano</a><span class="s-text-map-pop-red"> - Sem stock</span></li>' +
									'<li><a href=\"http://localhost:8000/product" target=\"_blank\" title=\"Comprar esta botija\">Cepsa propano</a><span class="s-text-map-pop-green"> - 1</span></li>' +
									'</ul>',
									"icon": "theatre"
								},
								"geometry":{
									"type":"Point",
									"coordinates":[-8.4441281,40.5744432]
								}
							},
							{
								"type":"Feature",
								"properties": {
									"description": 
									'<h6>Máquina da Campa do Preto</h6><ul>' + 
									'<li><a href=\"http://localhost:8000/product" target=\"_blank\" title=\"Comprar esta botija\">Galp propano</a><span class="s-text-map-pop-green"> - 3</span></li>' +
									'<li><a href=\"http://localhost:8000/product" target=\"_blank\" title=\"Comprar esta botija\">BP botano</a><span class="s-text-map-pop-red"> - Sem stock</span></li>' +
									'<li><a href=\"http://localhost:8000/product" target=\"_blank\" title=\"Comprar esta botija\">Cepsa propano</a><span class="s-text-map-pop-green"> - 1</span></li>' +
									'</ul>',
									"icon": "theatre"
								},
								"geometry":{
									"type":"Point",
									"coordinates":[-8.6380102, 41.2804088]
								}
							},
							{
								"type":"Feature",
								"properties": {
									"description": 
									'<h6>Máquina da Venda das Raparigas</h6><ul>' + 
									'<li><a href=\"http://localhost:8000/product" target=\"_blank\" title=\"Comprar esta botija\">Galp propano</a><span class="s-text-map-pop-green"> - 3</span></li>' +
									'<li><a href=\"http://localhost:8000/product" target=\"_blank\" title=\"Comprar esta botija\">BP botano</a><span class="s-text-map-pop-red"> - Sem stock</span></li>' +
									'<li><a href=\"http://localhost:8000/product" target=\"_blank\" title=\"Comprar esta botija\">Cepsa propano</a><span class="s-text-map-pop-green"> - 1</span></li>' +
									'</ul>',
									"icon": "theatre"
								},
								"geometry":{
									"type":"Point",
									"coordinates":[-8.9607305, 39.411254]
								}
							}]
                                }
                            },
                            layout: {
                                "icon-image": "custom-marker2",
                            }
                        });
                    });
                    mapa.on('click', 'markers2', function (e) {
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
                            .addTo(mapa);
                    });

                    // Change the cursor to a pointer when the mouse is over the places layer.
                    mapa.on('mouseenter', 'markers2', function () {
                        mapa.getCanvas().style.cursor = 'pointer';
                    });

                    // Change it back to a pointer when it leaves.
                    mapa.on('mouseleave', 'markers2', function () {
                        mapa.getCanvas().style.cursor = '';
                    });
                });
            </script>

@endsection