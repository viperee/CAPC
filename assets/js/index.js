$().ready(() => {
    var swiperMain = new Swiper('#main-swiper-container', {
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev'
        },
    });

    var swiper = new Swiper('#programmation-swiper-container', {
        slidesPerView: 2,
        navigation: {
            nextEl: '#programmation-swiper-button-next',
            prevEl: '#programmation-swiper-button-prev'
        },
    });
});
