$(document).ready(function () {
    var productSkip = 6;
    var productShow = 6;
    var productionSwiper = undefined;
    productionSlider();
    $(window).resize(function () {
        productionSlider();
    });

    function productionSlider() {
        var products = $("#production-group .product");
        browserWidth = $(window).width();
        if (browserWidth < 1100) {
            if (productionSwiper != undefined) {
                productionSwiper.destroy(true, true)
                productionSwiper = undefined;
            }
        } else {
            if (productionSwiper == undefined) {

                if (products.length < 13) return
                productionSwiper = new Swiper('#production-swiper', {
                    slidesPerView: 3,
                    slidesPerColumn: 4,
                    spaceBetween: 80,
                    slidesPerGroup: 3,
                    slidesPerColumnFill: 'row',
                    direction: 'horizontal',
                    pagination: {
                        el: '.swiper-pagination',
                        clickable: true,
                    },
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev',
                    },
                });
            }
        }
    }

    if ($("#production-group").length > 0) {
        var products = $("#production-group .product");
        if (products.length > productSkip) {
            $("#more-product").addClass('show');
        }
        $("#more-product").click(function () {
            const showFrom = productSkip;
            let showTo = (productShow + productSkip);
            if (showTo >= products.length) {
                showTo = products.length;
                $("#more-product").fadeOut();
            }
            productShow = showTo;
            for (let i = showFrom; i < showTo; i++) {
                $(products[i]).fadeIn();
            }
        })
    }

    function urlify(text) {
        var urlRegex = /(https?:\/\/[^\s|<]+)/g;
        return text.replace(urlRegex, function (url) {
            return '<a target="blank_" href="' + url + '">' + url + '</a>';
        })
        // or alternatively
        // return text.replace(urlRegex, '<a href="$1">$1</a>')
    }

    $('[data-fancybox="product"]').fancybox({
        loop: true,
        toolbar: true,
        smallBtn: true,
        arrows: true,
        buttons: [
            // "zoom",
            //"share",
            // "slideShow",
            // "close"
        ],
        caption: function (instance, item) {
            var caption = $(this).data('caption') || '';
            console.log(caption);
            caption = urlify(caption);
            console.log(caption);
            return caption;
        },
        afterShow: function (instance, current) {
            const contentWidth = instance.current.width;
            const contentHeight = instance.current.height;
            const arrowRight = $(".fancybox-navigation .fancybox-button--arrow_right");
            const arrowLeft = $(".fancybox-navigation .fancybox-button--arrow_left");
            const browserWidth = $(window).width();
            const right = (browserWidth - contentWidth) / 2 - arrowRight.width() - 20;
            const left = (browserWidth - contentWidth) / 2 - arrowLeft.width() - 20;
            // console.log(browserWidth + "," + contentWidth + "," + arrowRight.width());
            if (browserWidth > 1000) {
                if (browserWidth > 1000) {
                    arrowRight.css("right", right);
                    arrowLeft.css("left", left);
                }
            }
            const fancyboxCaption = $(".fancybox-inner .fancybox-caption");
            const fancycaptionHeight = fancyboxCaption.height();
            const browserHeight = $(window).height();
            const bottom = (browserHeight - contentHeight) / 2 - fancycaptionHeight;
            fancyboxCaption.css("bottom", bottom);

        },
        baseTpl: '<div class="fancybox-container fancybox-product" role="dialog" tabindex="-1">' +
            '<div class="fancybox-bg"></div>' +
            '<div class="fancybox-inner">' +
            '<div class="fancybox-toolbar">{{buttons}}</div>' +
            '<div class="fancybox-navigation">{{arrows}}</div>' +
            '<div class="fancybox-stage"></div>' +
            '<div class="fancybox-caption">' +
            '<div class="fancybox-caption__body"></div>' +
            '</div>' +
            '<div class="fancybox-infobar">' +
            '<span data-fancybox-index></span>&nbsp;/&nbsp;<span data-fancybox-count></span>' +
            '</div>' +
            '</div>' +
            '</div>',
        btnTpl: {
            // Arrows
            arrowLeft: '<button data-fancybox-prev class="fancybox-button fancybox-button--arrow_left" title="{{PREV}}">' +
                '<div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19.45 46.92"><g id="Layer_2" data-name="Layer 2"><g id="design"><polyline points="19.06 0.31 0.64 23.46 19.06 46.61" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="3"/></g></g></svg></div>' +
                "</button>",

            arrowRight: '<button data-fancybox-next class="fancybox-button fancybox-button--arrow_right" title="{{NEXT}}">' +
                '<div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19.45 46.92"><g id="Layer_2" data-name="Layer 2"><g id="design"><polyline points="0.39 46.61 18.82 23.46 0.39 0.31" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="3"/></g></g></svg></div>' +
                "</button>",
            smallBtn: '<button type="button" data-fancybox-close class="fancybox-button fancybox-close-small" title="{{CLOSE}}">' +
                '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31.59 31.59"><g id="Layer_2" data-name="Layer 2"><g id="design"><line x1="0.35" y1="0.35" x2="31.24" y2="31.24" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="3"/><line x1="31.24" y1="0.35" x2="0.35" y2="31.24" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="3"/></g></g></svg>' +
                "</button>"
        },
    });
})