/**
 * Declaração dos swipers
 * Exemplo:
 * let swiper = new Swiper(".swiper-teste", {opcoes})
 */

var swiper = new Swiper(".produtos-destaque-swiper", {
    slidesPerView: 4,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        992: {
            slidesPerView: 4,
        },
    }

});


var swiper = new Swiper(".swiper-diferenciais", {
    slidesPerView: 1,
    navigation: {
        nextEl: ".swiper-diferenciais .swiper-button-next",
        prevEl: ".swiper-diferenciais .swiper-button-prev",
    },

});

/*
var swiper = new Swiper(".mySwiper-teste", {
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});
*/

var swiper = new Swiper(".mySwiper-banner", {
    slidesPerView: 6,
    navigation: {
        nextEl: ".banner .swiper-button-next",
        prevEl: ".banner .swiper-button-prev",
    },
});