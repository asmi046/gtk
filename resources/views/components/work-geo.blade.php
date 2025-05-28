    <script src="//api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
    <script>
        var points = {!! $points->toJson() !!}
        ymaps.ready(init);

        console.log(points)

        function init () {
            let centerMap =[55.715251431239594,37.60836008984376]
            var myMap = new ymaps.Map("map_in_page", {
                // Координаты центра карты
                center: centerMap,
                // Масштаб карты
                zoom: 4,
                // Выключаем все управление картой
                controls: ['geolocationControl','zoomControl']
            });

            var myGeoObjects = [];


            var clusterer = new ymaps.Clusterer({
                clusterDisableClickZoom: false,
                clusterOpenBalloonOnClick: false,
                preset: 'islands#greenClusterIcons',
            });

            for (const property in points) {
                myGeoObjects = new ymaps.Placemark(points[property].geo.split(','),
                    {
                        hintContent: '<div class="map-hint">'+points[property].name+'</div>',
                        balloonContent: '<div class="map-hint"><b>'+points[property].name+'</b></div>',
                    }, {
                        iconLayout: 'default#image', // Тип иконки
                        iconImageHref: '{{ asset("img/pin.svg") }}', // Ссылка на иконку
                        iconImageSize: [40, 40], // Размер
                        iconImageOffset: [-20, -20] // Смещение'
                    }

                );

                myMap.geoObjects.add(myGeoObjects);
            }



            // Отключим zoom
            myMap.behaviors.disable('scrollZoom');

        }

    </script>

    <section class="map_section">
        <div class="container">
            <h2 class="section-title clients__title">География нашей работы</h2>

            <div id="map_in_page" class="map_in_page"></div>
        </div>
    </section>
