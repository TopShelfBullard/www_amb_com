
$(document).ready(function() {

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

  $("#quote5").css("display", "none");

    $(".glyphicon-star").hover(
    function() {
      $(this).addClass("star_hover");
      $(this).prevUntil(".stars").addClass("star_hover");
      },
    function() {
      $(this).removeClass("star_hover");
      $(this).prevUntil(".stars").removeClass("star_hover");
    });

github = $(".github");
githubOff = $(".github_off");
githubOn = $(".github_on");

github.hover(
  function() {
    githubOff.css("display", "none");
    githubOn.css("display", "inline");
  },
  function() {
    githubOn.css("display", "none");
    githubOff.css("display", "inline");
  });

twitter = $(".twitter");
twitterOff = $(".twitter_off");
twitterOn = $(".twitter_on");

twitter.hover(
  function() {
    twitterOff.css("display", "none");
    twitterOn.css("display", "inline");
  },
  function() {
    twitterOn.css("display", "none");
    twitterOff.css("display", "inline");
  });

mail = $(".mail");
mailOff = $(".mail_off");
mailOn = $(".mail_on");

mail.hover(
  function() {
    mailOff.css("display", "none");
    mailOn.css("display", "inline");
  },
  function() {
        mailOn.css("display", "none");
        mailOff.css("display", "inline");
  });

facebook = $(".facebook");
facebookOff = $(".facebook_off");
facebookOn = $(".facebook_on");

facebook.hover(
  function() {
    facebookOff.css("display", "none");
    facebookOn.css("display", "inline");
  },
  function() {
        facebookOn.css("display", "none");
        facebookOff.css("display", "inline");
  });

googleplus= $(".googleplus");
googleplusOff = $(".googleplus_off");
googleplusOn = $(".googleplus_on");

googleplus.hover(
  function() {
    googleplusOff.css("display", "none");
    googleplusOn.css("display", "inline");
  },
  function() {
        googleplusOn.css("display", "none");
        googleplusOff.css("display", "inline");
  });

linkedin = $(".linkedin");
linkedinOff = $(".linkedin_off");
linkedinOn = $(".linkedin_on");

linkedin.hover(
  function() {
    linkedinOff.css("display", "none");
    linkedinOn.css("display", "inline");
  },
  function() {
        linkedinOn.css("display", "none");
        linkedinOff.css("display", "inline");
  });

  getNewQuoteForHeader();


});