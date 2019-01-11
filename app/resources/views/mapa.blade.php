@extends("layouts.default")
@section("title")
Mapa de Máquinas
@endsection
@section("content")

  <div class="pos-relative bo11 of-hidden w-size300 m-map">
      <input id="input" class="s-text7 size16 p-l-23 p-r-50" type="text" name="search-machine" placeholder="Procurar máquinas...">

      <button class="flex-c-m size5 ab-r-m color1 color0-hov trans-0-4" onclick="location.href='{{URL("mapa")}}' + '/' + document.getElementById('input').value;">
        <i class="fs-13 fa fa-search" aria-hidden="true"></i>
      </button>
	</div>

    @if(isset($result) && isset($maquinas))
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
                        features:[
                            @php($i = 0)
                            @foreach($maquinas as $maquina)
                            {
                                "type":"Feature",
                                "properties": {
                                    "description": 
                                    '<h6>{{$maquina->nome}}</h6><ul>' +
                                    @foreach($result[$i] as $r)
                                    '<li><a href="{{URL('produto')}}/{{$r->botijasid}}">{{$r->nome}}</a>' +
                                    @if ($r->stock > 0)
                                    '<span class="s-text-map-pop-green"> - {{$r->stock}}</span></li>' +
                                    @else
                                    '<span class="s-text-map-pop-red"> - {{$r->stock}}</span></li>' +
                                    @endif
                                    @endforeach
                                    '</ul>',
                                    "icon": "theatre"
                                },
                                "geometry":{
                                    "type":"Point",
                                    "coordinates":[{{$maquina->lat}}, {{$maquina->long}}]
                                }
                            },
                            @php($i++)
                            @endforeach
                        ]
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
    @else
        <div class="t-center">Não foram encontradas máquinas.</div>
        <div style="margin-bottom: 50px;" class="t-center"><a href="{{URL('mapa')}}">Recarregar</a></div>
    @endif

@endsection