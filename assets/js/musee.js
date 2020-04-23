$().ready(() => {
    $("#timeline-descriptions-wrapper").children("div[data-description!=1973]").hide();
    $(".pastille-date").first().siblings('svg').children().addClass('grossi');
    $(".pastille-date").click(function(){
        console.log("CLICK");
        // AFFICHER / CACHER TEXTE
        let dateAttr = $(this).attr('data-description');
        $("#timeline-descriptions-wrapper").children("div[data-description!="+dateAttr+"]").fadeOut(1000);
        setTimeout(function(){
            $("#timeline-descriptions-wrapper").children("div[data-description="+dateAttr+"]").fadeIn(1000);
          }, 1000);
        

        // EFFET SOLEIL
        $(".grossi").addClass('degrossi');
        $(".grossi").attr('rx', 8.5);
        $(".grossi").attr('ry', 8.5);
        $(".grossi").attr('cx', 8.5);
        $(".grossi").attr('cy', 8.5);
        $(".grossi").removeClass('grossi');

        $(this).siblings('svg').children().attr('rx', 97);
        $(this).siblings('svg').children().attr('ry', 97);
        $(this).siblings('svg').children().attr('cx', 9);
        $(this).siblings('svg').children().attr('cy', -28);

        $(this).siblings('svg').children().toggleClass('grossi');
        setTimeout(function(){
            $(".degrossi").removeClass('degrossi');
          }, 5000);
    });
}
);