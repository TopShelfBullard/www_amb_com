function getNewQuoteForHeader(priorNumber) {
    var currentNumber = Math.floor(Math.random() * 24 + 1);

    while(currentNumber === priorNumber) {
        currentNumber = Math.floor(Math.random() * 24 + 1);
    }

    $("#quote" + currentNumber).fadeIn(1000).delay(15000).fadeOut(1000, function() {
        getNewQuoteForHeader(currentNumber);
    });
}

function hoverEffect(id, bw, color) {
    id.hover(
        function() {
            bw.css("display", "none");
            color.css("display", "inherit");
        },
        function() {
            color.css("display", "none");
            bw.css("display", "inherit");
        });
}

function starAnimation() {
    $(".empty_star").hover(
        function() {
            $(this).addClass("star_hover");
            $(this).prevUntil(".stars").addClass("star_hover");
        },
        function() {
            $(this).removeClass("star_hover");
            $(this).prevUntil(".stars").removeClass("star_hover");
        });
}

$(document).ready(function() {
    $("#quote5").css("display", "none");

    getNewQuoteForHeader(0);

    hoverEffect($("#github"), $(".github_bw"), $(".github_color"));
    hoverEffect($("#linkedin"), $(".linkedin_bw"), $(".linkedin_color"));
    hoverEffect($("#mail"), $(".mail_bw"), $(".mail_color"));
    hoverEffect($("#twitter"), $(".twitter_bw"), $(".twitter_color"));

    if ($("#body_novel").length) {
        starAnimation();
    }
});
