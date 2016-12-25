ymaps.ready(function () {
    var myMap = new ymaps.Map('map', {
            center: [44.573113, 33.509335],
            zoom: 17
        }, {
            searchControlProvider: 'yandex#search'
        }),
        myPlacemark = new ymaps.Placemark(myMap.getCenter(), {
            hintContent: 'Аренда опалубки в Севастополе',
            balloonContent: 'Аренда опалубки в Севастополе. ул.Курганная 6,'
        }, {
            // Опции.
            // Необходимо указать данный тип макета.
            iconLayout: 'default#image',
            // Своё изображение иконки метки.
            iconImageHref: '/images/myIcon.png',
            // Размеры метки.
            iconImageSize: [20, 32],
            // Смещение левого верхнего угла иконки относительно
            // её "ножки" (точки привязки).
            iconImageOffset: [-20, -20]
        });

    myMap.geoObjects.add(myPlacemark);
});
