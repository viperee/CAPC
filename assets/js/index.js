$().ready(() => {
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 2,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev'
        },
    });
});
