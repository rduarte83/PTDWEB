@extends("layouts.default")
@section("title")
    Contacts
@endsection
@section("content")
    <!-- Title Page -->
    <section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(images/wallpaper2_crop_dark.jpg);">
        <h2 class="l-text2 t-center">
            Contactos
        </h2>
    </section>

    <!-- content page -->
    <section class="bgwhite p-t-66 p-b-60">
        <div class="container">
            <div class="row">
                <div class="col-md-6 p-b-30">
                    <form class="leave-comment">
                        <h4 class="m-text26 p-b-36 p-t-15">
                            Contacte-nos!
                        </h4>

                        <div class="bo4 of-hidden size15 m-b-20">
                            <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="name" placeholder="Nome Completo">
                        </div>

                        <div class="bo4 of-hidden size15 m-b-20">
                            <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="phone-number" placeholder="Contacto Telefónico">
                        </div>

                        <div class="bo4 of-hidden size15 m-b-20">
                            <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="email" placeholder="Email">
                        </div>

                        <textarea class="dis-block s-text7 size20 bo4 p-l-22 p-r-22 p-t-13 m-b-20" name="message" placeholder="Mensagem"></textarea>

                        <div class="w-size25">
                            <!-- Button -->
                            <button class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4">
                                Enviar
                            </button>
                        </div>
                    </form>
                </div>

                <div class="col-md-6 p-b-30">
                    <div class="p-r-20 p-r-0-lg">
                        <div id='mapa' style='margin: auto; width: 100%; height: 500px;'></div>
                    </div>
                </div>
            </div>
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
    </section>
@endsection
