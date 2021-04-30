$(function() {

	function init() {
        bindEvents()
        initSelect2()
        initBannersSlider()
    }

    function bindEvents() {
    }

    function initBannersSlider() {

        const bannersSlider = new Swiper('.js-swiper-banners .swiper-container', {
        	speed: 600,
            loop: true,
            pagination: {
                el: '.js-swiper-banners .swiper-pagination',
                clickable: true,
            },
            effect: 'fade',
            fadeEffect: {
                crossFade: true
            },
        });
    }

    function initSelect2() {
        $.fn.select2.amd.define('select2/i18n/ru',[],function () {
            // Russian
            return {
                errorLoading: function () {
                    return 'Результат не может быть загружен.';
                },
                inputTooLong: function (args) {
                    var overChars = args.input.length - args.maximum;
                    var message = 'Пожалуйста, удалите ' + overChars + ' символ';
                    if (overChars >= 2 && overChars <= 4) {
                        message += 'а';
                    } else if (overChars >= 5) {
                        message += 'ов';
                    }
                    return message;
                },
                inputTooShort: function (args) {
                    var remainingChars = args.minimum - args.input.length;

                    var message = 'Пожалуйста, введите ' + remainingChars + ' или более символов';

                    return message;
                },
                loadingMore: function () {
                    return 'Загружаем ещё ресурсы…';
                },
                maximumSelected: function (args) {
                    var message = 'Вы можете выбрать ' + args.maximum + ' элемент';

                    if (args.maximum  >= 2 && args.maximum <= 4) {
                        message += 'а';
                    } else if (args.maximum >= 5) {
                        message += 'ов';
                    }

                    return message;
                },
                noResults: function () {
                  return 'Ничего не найдено';
                },
                searching: function () {
                  return 'Поиск…';
                }
            };
        });

        $('.select-single').select2({
            minimumResultsForSearch: -1,
            language: 'ru',
            dropdownCssClass: 'select-single-dropdown',

        }).on('select2:select', function (e) {
            console.log(e.target.selectedIndex) //индекс выбранного
            $(this).select2("close");
        });
    }

    init()
});