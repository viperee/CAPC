$().ready(() => {
    $("#timeline-descriptions-wrapper").children("div[data-description!=1973]").hide();
    $(".pastille-date").first().siblings('svg').children().addClass('grossi');
    $(".pastille-date").click(function(){
        // AFFICHER / CACHER TEXTE
        let dateAttr = $(this).attr('data-description');
        $("#timeline-descriptions-wrapper").children("div[data-description!="+dateAttr+"]").fadeOut(1000);
        setTimeout(function(){
            $("#timeline-descriptions-wrapper").children("div[data-description="+dateAttr+"]").fadeIn(1000);
          }, 1000);
        

        // EFFET SOLEIL
        $(".grossi").addClass('degrossi');
        $(".grossi").removeClass('grossi');
        $(this).siblings('svg').children().toggleClass('grossi');
        setTimeout(function(){
            $(".degrossi").removeClass('degrossi');
          }, 5000);
    });
}
);