$().ready(() => {
        $("#plan img[data-level!=0]").hide();

        $('.level').click(function () {
            let levelAttr = $(this).attr('data-level');
            $(".level").removeClass('level-active');
            $(this).addClass("level-active");
            $("#plan img[data-level!=" + levelAttr + "]").hide();
            $("#plan img[data-level=" + levelAttr + "]").show();
        });
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 3,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev'
            },
        });
    }
);