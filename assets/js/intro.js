current = window.location.pathname;
console.log(current)

if (current == '/north-hill/' || current == '/') {
    console.log('Is the homepage.')
    loading();

} else {
    console.log('Not on the homepage.')
}

function loading() {
    if (document.referrer.indexOf(window.location.hostname) == -1 || performance.navigation.type == 1) {
        let wrapintro = $(`<div class="splash" id="splash"><div id="splash_logo"><img src="./assets/img/splash_logo.svg" alt="" class="splash_logo"></div></div>`)
        $('body').append(wrapintro);
        var splash = document.getElementById("splash");
        var splash_logo = document.getElementById("splash_logo");
        splash_logo.classList.add("step-2")
        $('body').toggleClass('noscroll');
        setTimeout(function () {
            $('#splash').fadeOut(2000);
            $('body').removeClass('noscroll');
        }, 6000);
    }
}

var mainImg = document.getElementById("mainImg");
setTimeout(function () {
    mainImg.classList.add("ease-in")
}, 4500);