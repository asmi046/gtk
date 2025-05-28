    <script src="//api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
    <script>

        ymaps.ready(init);

        function init () {
            let centerMap =[54.536516040970554,82.47927073437499]
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

            myGeoObjects = new ymaps.Placemark([54.536516040970554,82.47927073437499],
                {
                    hintContent: '<div class="map-hint"></div>',
                    balloonContent: '<div class="map-hint"><b></b></div>',
                }, {
                    preset: 'islands#icon',
                    iconColor: '#2E85B6'
                }

            );
            clusterer.add(myGeoObjects);

            myMap.geoObjects.add(clusterer);
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
