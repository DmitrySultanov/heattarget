$(function() {

	function init() {
        bindEvents()
        initSelect2()
        initTabs()
        quantityCounter()
        initBannersSlider()
        initAccordion()
        initOnlyNumber()
    }

    function bindEvents() {
        $(document).on('click', '.js-address-view', toggleAddressText);
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

    function initTabs() {

        $('.js-tabs-nav li:not(.no-click)').each(function(i){
            $(this).attr('data-tab', i);
        });

        $('.js-tab-content>li').each(function(i){
            $(this).attr('data-tab', i);
        });

        $('.js-tabs-nav li:not(.no-click)').on('click', function(){
            var dataTab = $(this).data('tab');
            var pageTitle = $(this).data('page-title');
            var getWrapper = $(this).closest('.js-tabs-wrapper');

            $(this).siblings().removeClass('active');
            $(this).addClass('active');

            getWrapper.find('.js-tab-content>li').hide();
            getWrapper.find('.js-tab-content>li[data-tab='+dataTab+']').fadeIn('slow');
            return false
        });
    }

    function quantityCounter() {
        $('.minus').on('click', function () {
            var $input = $(this).parent().find('input');
            var count = parseInt($input.val()) - 1;
            count = count < 1 ? 1 : count;
            $input.val(count);
            $input.change();
            return false;
        });
        $('.plus').on('click', function () {
            var $input = $(this).parent().find('input');
            $input.val(parseInt($input.val()) + 1);
            $input.change();
            return false;
        });
    }

    function initAccordion() {
        $(".js-accordion").accordionjs({
          slideSpeed  : 300,
          activeIndex: false,
          closeOther  : false,
        });
    }

    function initOnlyNumber() {
        $('input.onlyNumber').keypress(function(e) {
            e = e || event;
            if (e.ctrlKey || e.altKey || e.metaKey) return;
            var chr = getChar(e);
            if (chr == null) return;
            if (chr < '0' || chr > '9') {
              return false;
            }
        });
        function getChar(event) {
            if (event.which == null) {
              if (event.keyCode < 32) return null;
              return String.fromCharCode(event.keyCode) // IE
            }

            if (event.which != 0 && event.charCode != 0) {
              if (event.which < 32) return null;
              return String.fromCharCode(event.which) // остальные
            }
            return null; // специальная клавиша
        }
    }

    function toggleAddressText() {
        if($(this).is('[aria-expanded="true"]')) {
            $(this).text('Скрыть адрес объекта');
        } else {
            $(this).text('Показать адрес объекта');
        }

    }

    init()
});