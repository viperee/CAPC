$().ready(() => {
    $("#plan img[data-level!=0]").hide();
    $('.level').click( function(){
        let levelAttr = $(this).attr('data-level');
        console.log($(this));
        console.log(levelAttr);
        $(".level").removeClass('level-active');
        $(this).addClass("level-active");
        $("#plan img[data-level!="+ levelAttr +"]").hide();
        $("#plan img[data-level="+ levelAttr +"]").show();
    });
        console.log("READY");
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 3,
            spaceBetween: 86,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev'
            },
        });
    }
);