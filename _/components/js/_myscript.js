$(document).ready(function() {

  var quoteFive = $("#quote5"); 

  quoteFive.css("display", "none");
  getNewQuoteForHeader();    

    

  var facebook = $(".facebook");
  var facebookBWIcon = $(".facebook_bw_icon");
  var facebookColorIcon = $(".facebook_color_icon"); 

  var github = $(".github");
  var githubBWIcon = $(".github_bw_icon");
  var githubColorIcon = $(".github_color_icon");
  
  var googleplus = $(".googleplus");
  var googleplusBWIcon = $(".googleplus_bw_icon");
  var googleplusColorIcon = $(".googleplus_color_icon"); 

  var linkedin = $(".linkedin");
  var linkedinBWIcon = $(".linkedin_bw_icon");
  var linkedinColorIcon = $(".linkedin_color_icon");

  var mail = $(".mail");
  var mailBWIcon = $(".mail_bw_icon");
  var mailColorIcon = $(".mail_color_icon");

  var twitter = $(".twitter");
  var twitterBWIcon = $(".twitter_bw_icon");
  var twitterColorIcon = $(".twitter_color_icon");
  
  hoverEffect(facebook, facebookBWIcon, facebookColorIcon);
  hoverEffect(github, githubBWIcon, githubColorIcon);
  hoverEffect(googleplus, googleplusBWIcon, googleplusColorIcon);  
  hoverEffect(linkedin, linkedinBWIcon, linkedinColorIcon);
  hoverEffect(mail, mailBWIcon, mailColorIcon);
  hoverEffect(twitter, twitterBWIcon, twitterColorIcon);



  starAnimation();

});



  function getNewQuoteForHeader() {
    var number;
    var quote;

    number = Math.floor(Math.random() * 24 + 1);     
    quote = $("#quote" + number);
    
    quote.fadeIn(1000).delay(20000).fadeOut(1000, function() {
      getNewQuoteForHeader();
    });
  } 



function hoverEffect(id, iconBW, iconColor) {
  id.hover(
    function() {
      iconBW.css("display", "none");
      iconColor.css("display", "inline");
    },
    function() {
      iconColor.css("display", "none");
      iconBW.css("display", "inline");
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