$(document).ready(function() {
    getNewQuoteForHeader();
    
    var facebook = $("#facebook");
    var facebookBW = $(".facebook_bw");
    var facebookColor = $(".facebook_color");

    var github = $("#github");
    var githubBW = $(".github_bw");
    var githubColor = $(".github_color");

    var googleplus = $("#googleplus");
    var googleplusBW = $(".googleplus_bw");
    var googleplusColor = $(".googleplus_color");

    var linkedin = $("#linkedin");
    var linkedinBW = $(".linkedin_bw");
    var linkedinColor = $(".linkedin_color");

    var mail = $("#mail");
    var mailBW = $(".mail_bw");
    var mailColor = $(".mail_color");

    var twitter = $("#twitter");
    var twitterBW = $(".twitter_bw");
    var twitterColor = $(".twitter_color");

    var casper = $("#casper");
    var casperBW = $(".casper_bw");
    var casperColor = $(".casper_color");

    var apple = $("#apple");
    var appleBW = $(".apple_bw");
    var appleColor = $(".apple_color");

    var bootstrap = $("#bootstrap");
    var bootstrapBW = $(".bootstrap_bw");
    var bootstrapColor = $(".bootstrap_color");

    var java = $("#java");
    var javaBW = $(".java_bw");
    var javaColor = $(".java_color");

    var objc = $("#obj-c");
    var objcBW = $(".obj-c_bw");
    var objcColor = $(".obj-c_color");

    var swift = $("#swift");
    var swiftBW = $(".swift_bw");
    var swiftColor = $(".swift_color");

    var ruby = $("#ruby");
    var rubyBW = $(".ruby_bw");
    var rubyColor = $(".ruby_color");

    hoverEffect(facebook, facebookBW, facebookColor);
    hoverEffect(github, githubBW, githubColor);
    hoverEffect(googleplus, googleplusBW, googleplusColor);
    hoverEffect(linkedin, linkedinBW, linkedinColor);
    hoverEffect(mail, mailBW, mailColor);
    hoverEffect(twitter, twitterBW, twitterColor);

    starAnimation();
});

function getNewQuoteForHeader() {
    var number;
    var quote;
    var quoteFive = $("#quote5");
    var quoteString;

    quoteFive.css("display", "none");

    number = Math.floor(Math.random() * 24 + 1);
    quoteString = "#quote" + number;
    quote = $(quoteString);

    quote.fadeIn(1000).delay(15000).fadeOut(1000, function() {
        getNewQuoteForHeader();
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
    $(".glyphicon-star").hover(
        function() {
            $(this).addClass("star_hover");
            $(this).prevUntil(".stars").addClass("star_hover");
        },
        function() {
            $(this).removeClass("star_hover");
            $(this).prevUntil(".stars").removeClass("star_hover");
        });
}