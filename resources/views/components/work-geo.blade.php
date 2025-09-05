    <script src="//api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
    <script>
        var points = {!! $points->toJson() !!}
        ymaps.ready(init);

        console.log(points)

        function init () {
            let centerMap =[51.68004575628376,36.30003149999989]
            var myMap = new ymaps.Map("map_in_page", {
                // Координаты центра карты
                center: centerMap,
                // Масштаб карты
                zoom: 2,
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

                var pin_name = '{{ asset("img/pin.svg") }}'

                switch (points[property].type) {
                    case 'Теплицы':
                        pin_name = '{{ asset("img/pin_green.svg") }}'
                        break;
                    case 'АЭС':
                        pin_name = '{{ asset("img/pin_blue.svg") }}'
                        break;


                }

                myGeoObjects = new ymaps.Placemark(points[property].geo.split(','),
                    {
                        hintContent: '<div class="map-hint">'+points[property].name+'</div>',
                        balloonContent: '<div class="map-hint"><b>'+points[property].name+'</b></div>',
                    }, {
                        iconLayout: 'default#image', // Тип иконки
                        iconImageHref: pin_name, // Ссылка на иконку
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

            <div class="map-legend">
                <div class="map-legend__item">
                    <img src="{{ asset('img/pin.svg') }}" alt="Металлоконструкции" class="map-legend__icon">
                    <span class="map-legend__text">Металлоконструкции</span>
                </div>
                <div class="map-legend__item">
                    <img src="{{ asset('img/pin_blue.svg') }}" alt="АЭС" class="map-legend__icon">
                    <span class="map-legend__text">Конструкции и оборудование для нужд строительства АЭС</span>
                </div>
                <div class="map-legend__item">
                    <img src="{{ asset('img/pin_green.svg') }}" alt="Теплицы" class="map-legend__icon">
                    <span class="map-legend__text">Теплицы и тепличное оборудование</span>
                </div>
            </div>

        </div>
    </section>
