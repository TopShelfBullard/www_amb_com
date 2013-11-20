
$(document).ready(function() { 
  var quoteFive = $("#quote5"); 
    
  var facebook = $(".facebook");
  var facebookOff = $(".facebook_off");
  var facebookOn = $(".facebook_on"); 

  var github = $(".github");
  var githubOff = $(".github_off");
  var githubOn = $(".github_on");
  
  var googleplus = $(".googleplus");
  var googleplusOff = $(".googleplus_off");
  var googleplusOn = $(".googleplus_on"); 

  var linkedin = $(".linkedin");
  var linkedinOff = $(".linkedin_off");
  var linkedinOn = $(".linkedin_on");

  var mail = $(".mail");
  var mailOff = $(".mail_off");
  var mailOn = $(".mail_on");

  var twitter = $(".twitter");
  var twitterOff = $(".twitter_off");
  var twitterOn = $(".twitter_on");
  
  quoteFive.css("display", "none");

  getNewQuoteForHeader();  

  hoverEffect(facebook, facebookOff, facebookOn);
  hoverEffect(github, githubOff, githubOn);
  hoverEffect(googleplus, googleplusOff, googleplusOn);  
  hoverEffect(linkedin, linkedinOff, linkedinOn);
  hoverEffect(mail, mailOff, mailOn);
  hoverEffect(twitter, twitterOff, twitterOn);

  starAnimation();
});

  function getNewQuoteForHeader() {
    var number;
    var quote;

    number = Math.random();  
    
    switch (true) {
      case number <= .04:
        quote = $("#quote1");
        break;      
      case number <= .08:
        quote = $("#quote2");
        break;
      case number <= .012:
        quote = $("#quote3");
        break;
      case number <= .16:
        quote = $("#quote4");
        break;
      case number <= .2:
        quote = $("#quote5");
        break;
      case number <= .24:
        quote = $("#quote6");
        break;
      case number <= .28:
        quote = $("#quote7");
        break;
      case number <= .32:
        quote = $("#quote8");
        break;
      case number <= .36:
        quote = $("#quote9");
        break;
      case number <= .40:
        quote = $("#quote10");
        break;
      case number <= .44:
        quote = $("#quote11");
        break;     
      case number <= .48:
        quote = $("#quote12");
        break;
      case number <= .52:
        quote = $("#quote13");
        break;
      case number <= .56:
        quote = $("#quote14");
        break;
      case number <= .60:
        quote = $("#quote15");
        break;
      case number <= .64:
        quote = $("#quote16");
        break;
      case number <= .68:
        quote = $("#quote17");
        break;
      case number <= .72:
        quote = $("#quote18");
        break;
      case number <= .76:
        quote = $("#quote19");
        break;
      case number <= .80:
        quote = $("#quote20");
        break;
      case number <= .84:
        quote = $("#quote21");
        break;
      case number <= .88:
        quote = $("#quote22");
        break;
      case number <= .92:
        quote = $("#quote23");
        break;
      case number <= .96:
        quote = $("#quote24");
        break;
      case number <= 1:
        quote = $("#quote24");
        break;
      default:
        quote = $("#quote13");
        break;
      } 
    
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