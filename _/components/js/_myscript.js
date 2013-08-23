
$(document).ready(function() {

  function getNewQuoteForHeader() {
    var number;
    var quote;

    number = Math.random();  
    
    switch (true) {
      case number <= 0.04:
        quote = $("#quote1");
        break;
      
      case number <= 0.08:
        quote = $("#quote2");
        break;

      case number <= 0.012:
        quote = $("#quote3");
        break;

      case number <= 0.16:
        quote = $("#quote4");
        break;

      case number <= 0.2:
        quote = $("#quote5");
        break;

      case number <= 0.24:
        quote = $("#quote6");
        break;

      case number <= 0.28:
        quote = $("#quote7");
        break;

      case number <= 0.32:
        quote = $("#quote8");
        break;

      case number <= 0.36:
        quote = $("#quote9");
        break;

      case number <= 0.40:
        quote = $("#quote10");
        break;

      case number <= 0.44:
        quote = $("#quote11");
        break;
      
      case number <= 0.48:
        quote = $("#quote12");
        break;

      case number <= 0.52:
        quote = $("#quote13");
        break;

      case number <= 0.56:
        quote = $("#quote14");
        break;

      case number <= 0.60:
        quote = $("#quote15");
        break;

      case number <= 0.64:
        quote = $("#quote16");
        break;

      case number <= 0.68:
        quote = $("#quote17");
        break;

      case number <= 0.72:
        quote = $("#quote18");
        break;

      case number <= 0.76:
        quote = $("#quote19");
        break;

      case number <= 0.80:
        quote = $("#quote20");
        break;

      case number <= 0.84:
        quote = $("#quote21");
        break;

      case number <= 0.88:
        quote = $("#quote22");
        break;

      case number <= 0.92:
        quote = $("#quote23");
        break;

      case number <= 0.96:
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

  $("#quote1").css("display", "none");

  getNewQuoteForHeader();

});