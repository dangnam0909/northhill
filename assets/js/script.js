const hamburger = document.getElementById("hamburger");
const menu_mask = document.getElementById("menu_mask");

const header = $('header:first');
reMarginTopOfMainImage = function() {
    const headerHeight = header.innerHeight();
    document.getElementsByTagName("body")[0].style.paddingTop = headerHeight + "px";
}
if (window.matchMedia('(max-width:768px)').matches) {
    reMarginTopOfMainImage();
    window.onresize = function () {
        reMarginTopOfMainImage();
    }
}

$(hamburger).on({
    click: function (e) {
        e.preventDefault();
        $('body').toggleClass('nav-open noscroll');
        if ($('body').hasClass('noscroll')) {
            $(window).on('touchmove.noScroll', function (e) { e.preventDefault(); });
        }
        else {
            $(window).off('.noScroll');
        }

        return false;
    },
    keypress: function (e) {
        if (e.keyCode === 13 || e.which === 13) {
            $(this).trigger('click');
        }
    }
});
$("header nav ul li a[href^='#']").on({
    click: function () {
        $('body').removeClass('nav-open noscroll');
        $(window).off('.noScroll');
    }
})

menu_mask.addEventListener('click', function (e) {
    e.preventDefault();
    $('body').removeClass('nav-open noscroll');
    $(window).off('.noScroll');

    return false;
});

$(".menu-item-has-children").click(function () {
    $(this).toggleClass('active');
    $(this).children('.sub-menu').slideToggle();
});

var dignitySwiper = undefined;
dignitySlider();
$(window).resize(function () {
    dignitySlider();
});

function dignitySlider() {
    browserWidth = $(window).width();
    if (browserWidth > 1000) {
        if (dignitySwiper != undefined) {
            dignitySwiper.destroy(true, true)
            dignitySwiper = undefined;
        }
    } else {
        if (dignitySwiper == undefined) {
            dignitySwiper = new Swiper('#dignity .swiper-container', {
                slidesPerView: 1,
                spaceBetween: 30,
                slidesPerGroup: 1,
                loop: true,
                lazy: true,
                grabCursor: true,
                loopFillGroupWithBlank: true,
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

$(document).ready(function () {
    if ($('#commit-product').length) {
       
        $('[data-fancybox="cp-gallery"]').fancybox({
            loop: true,
            arrows: true,
            // openEffect: 'none',
            // closeEffect: 'none',
            toolbar: "true",
            afterShow: function (instance, current) {
                const contentWidth = instance.current.width;
                const arrowRight = $(".fancybox-navigation .fancybox-button--arrow_right");
                const arrowLeft = $(".fancybox-navigation .fancybox-button--arrow_left");
                const browserWidth = $(window).width();
                const right = (browserWidth - contentWidth) / 2 - arrowRight.width() - 20;
                const left = (browserWidth - contentWidth) / 2 - arrowLeft.width() - 20;
                if(browserWidth > 1000){
                    arrowRight.css("right", right);
                    arrowLeft.css("left", left);
                }
            },
            btnTpl: {
                download:
                    '<a download data-fancybox-download class="fancybox-button fancybox-button--download" title="{{DOWNLOAD}}" href="javascript:;">' +
                    '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.62 17.09V19H5.38v-1.91zm-2.97-6.96L17 11.45l-5 4.87-5-4.87 1.36-1.32 2.68 2.64V5h1.92v7.77z"/></svg>' +
                    "</a>",

                zoom:
                    '<button data-fancybox-zoom class="fancybox-button fancybox-button--zoom" title="{{ZOOM}}">' +
                    '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.7 17.3l-3-3a5.9 5.9 0 0 0-.6-7.6 5.9 5.9 0 0 0-8.4 0 5.9 5.9 0 0 0 0 8.4 5.9 5.9 0 0 0 7.7.7l3 3a1 1 0 0 0 1.3 0c.4-.5.4-1 0-1.5zM8.1 13.8a4 4 0 0 1 0-5.7 4 4 0 0 1 5.7 0 4 4 0 0 1 0 5.7 4 4 0 0 1-5.7 0z"/></svg>' +
                    "</button>",

                close:
                    '<button data-fancybox-close class="fancybox-button fancybox-button--close" title="{{CLOSE}}">' +
                    '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 10.6L6.6 5.2 5.2 6.6l5.4 5.4-5.4 5.4 1.4 1.4 5.4-5.4 5.4 5.4 1.4-1.4-5.4-5.4 5.4-5.4-1.4-1.4-5.4 5.4z"/></svg>' +
                    "</button>",

                // Arrows
                arrowLeft:
                    '<button data-fancybox-prev class="fancybox-button fancybox-button--arrow_left" title="{{PREV}}">' +
                    '<div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19.45 46.92"><g id="button-prev" data-name="button-prev"><g id="design"><polyline points="19.06 0.31 0.64 23.46 19.06 46.61" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2"/></g></g></svg></div>' +
                    "</button>",

                arrowRight:
                    '<button data-fancybox-next class="fancybox-button fancybox-button--arrow_right" title="{{NEXT}}">' +
                    '<div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19.45 46.92"><g id="button-next" data-name="button-next"><g id="design"><polyline points="0.39 46.61 18.82 23.46 0.39 0.31" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2"/></g></g></svg></div>' +
                    "</button>",

                // This small close button will be appended to your html/inline/ajax content by default,
                // if "smallBtn" option is not set to false
                smallBtn:
                    '<button type="button" data-fancybox-close class="fancybox-button fancybox-close-small" title="{{CLOSE}}">' +
                    '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31.59 31.59"><g id="Layer_2" data-name="Layer 2"><g id="design"><line x1="0.35" y1="0.35" x2="31.24" y2="31.24" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width="2"/><line x1="31.24" y1="0.35" x2="0.35" y2="31.24" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width="2"/></g></g></svg>' +
                    "</button>"
            },
            smallBtn: true,
            toolbar: false,
            arrows: true,
        });
    }
});
const toTop = $('<a id="toTop" href="#"><span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 13.81 14.7"><g id="Layer_2" data-name="Layer 2"><g id="design"><polyline points="0.63 6.32 6.91 1.28 13.19 6.32" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2"/><line x1="6.88" y1="1.29" x2="6.88" y2="14.7" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2"/></g></g></svg></span></a>');
$('body').append(toTop)
$(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
        toTop.fadeIn();
    } else {
        toTop.fadeOut();
    }
});
const move = true;
toTop.click(function (event) {
    event.preventDefault();
    $("html, body").animate({ scrollTop: 0 }, 500);
});

function scrollToTarget(target) {
    const targetTo = document.getElementById(target);
    if (targetTo) {
        let offsetTop = targetTo.offsetTop;
        offsetTop -= 60;
        window.scrollTo({ top: offsetTop, behavior: 'smooth' });
    }
}
window.onload = function() {
    var current_url = window.location.href;
    var targetElement = current_url.split('#')[1] || null;
    if (targetElement) {
        window.history.pushState(null, null, current_url.split('#')[0]);
        scrollToTarget(targetElement)
    }
}

$(document).on('click', 'a[href*="#"]:not([href="#"])', function (e) {
    let offsetTop;
    let posX = $('header:first').innerHeight();

    if (location.pathname.replace(/^\//, "") == this.pathname.replace(/^\//, "") && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $("[name=" + this.hash.slice(1) + "]");
        if (target.length) {
            $("html, body").animate({ scrollTop: target.offset().top - 100, }, 500);
            return false;
        }
    }
});
window.onscroll = function () { myFunction() };

var headera = document.getElementById("header");
var follow_contact = document.getElementById("follow-contact");

var sticky = headera.offsetTop;

function myFunction() {
    if (window.pageYOffset > sticky) {
        headera.classList.add("sticky");
        follow_contact.classList.add("sticky");
    } else {
        headera.classList.remove("sticky");
        follow_contact.classList.remove("sticky");
    }
}
$(".btn-play").click(function () {

    const src = $(this).data('embed');
    const parent = $(this).parent();
    const height = parent.height();
    const width = parent.width();

    let youtubeEmbed = `<iframe width="${width}" height="${height}" src="${src}?rel=0&autoplay=1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>`;
    parent.html(youtubeEmbed);

  })