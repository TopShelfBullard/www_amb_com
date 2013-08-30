<!DOCTYPE html>
<html lang="en">
  <head>
    <title>AMB - TECH</title>
    <?php include '_/components/php/head_tag_contents.php'; ?>
  </head>
  <body id="body_tech">
    <div class="main_container container">
 
<!-- header --> 
      <header class="header_row  row">
        <section class="left_header_container">
          <div class="left_header_column  col  col-xs-12  col-sm-6">
            <?php include '_/components/php/header.php'; ?>    
          </div><!-- left_header_column -->
        </section> <!-- left_header_container -->
        <section class="right_header_container">
          <div class="right_header_column  col  hidden-xs  col-sm-4  col-sm-offset-1">            
            <?php include '_/components/php/header_quotes.php'; ?>         
           </div> <!-- right_header_column -->
        </section> <!-- right_header_container -->
      </header> <!-- header -->

      <hr>

<!-- navigation -->
      <nav class="top_nav  navbar  hidden-xs  visible-sm">
        <ul class="nav nav-pills nav-justified">
            <?php include '_/components/php/header_top_nav.php'; ?>
        </ul>
      </nav> <!-- top_nav -->
      <nav class="top_nav  navbar  visible-xs  hidden-sm  hidden-md  hidden-lg  hidden-xl">
        <ul class="nav nav-pills nav-justified">
          <?php include '_/components/php/header_top_nav.php'; ?>
        </ul>
      </nav> <!-- top_nav -->  

<!-- content -->     
      <section class="content_container  container  col  col-xs-12">              
        <div class="row">  
          <section class="content_column_one  col-xxs-12  col-xl-6">
            <div class="left_content_one  col  col-xs-12  col-sm-6">     
              <h2>HTML/CSS</h2>
              <p>
                Like most aspiring developers, A. Mitchell Bullard began his journey with a simple HTML/CSS course. To him, web design did not feel like
                drudgery&mdash;it felt like art, like creation, like expression. Instantly he became enamoured with web design. Less than a week after he
                first learned how to make a browser display "Hello world," he was adding styles and media to his first web project. Within a month, he
                was neck deep in CSS 3D transforms and animations. While pushing the limits of the current markup and style specifications, as well as
                the limits of his own skill, he experienced the soaring highs and the epic disasters that we all love about web design.
              </p>
              <p>
                Currently, A. Mitchell Bullard is a more seasoned, battle-hardened HTML/CSS-slinger, and combining all that he learned from his many failures
                and successes, he developed the website that you currently view. He used Bootstrap 3 for this site, mainly as an excuse research an industry
                standard, front-end framework along with concepts such as mobile first and responsive design. He even went as far as digging deeply into the
                Bootstrap 3 source code to make key alterations that he felt would better tailor this tool for his project, such as extending the fluid grid and
                modifying the way that navigation bars behave.
              </p>
              <p>
                Today, due to self-motivation, drive, and creativity, A. Mitchell Bullard is very comfortable with HTML5 and CSS3 (as well as LESS and SASS),
                and he is ready to mold this passion of his into a career.
              </p>
            </div> <!-- left_content_one -->
            <div class="right_content_one  col  col-xs-12  col-sm-6">
              <h2>JavaScript</h2>
              <p>
                Ahh, JavaScript, the language that insists an array of one, two, three, and four is not equal to an array of one, two, three and four...
                although ten quadrillion is, in fact, equal to ten quadrillion and one. Isn't it amazing that in merely ten days, Brendan Eich of Netscape
                found a way to make a computer not understand equality?
              </p>
              <p>
                A. Mitchell Bullard's first exposure to programming was simple, JavaScript web development under the guidance of the passionate and
                opinionated rails developer, author, and editor, Pr. Brian P. Hogan. It was a spectacular experience, and coding soon replaced the activities
                that once filled his leisure time. By the end of this introductory programming course, A. Mitchell Bullard was working comfortably with the
                DOM, experimenting with OOP, and just beginning to branch out into jQuery and Ruby.
              </p>
              <p>
                A few of the most beneficial concepts that A. Mitchell Bullard learned alongside his first programming language are TDD; abstraction and
                encapsulation; and the importance of taking the time, before coding, to analyze the problem at hand, separate the problem into easily
                manageable pieces, and document a detailed plan for each pieces as well as how those pieces will fit together into a cohesive, sane flow
                with as little interaction as possible. In short, A. Mitchell Bullard has found that serious diligence in planning (with tools such as flow charts,
                psuedocode, and user stories) will save time, improve performance, and free a developer from the headache of refactoring a mess&mdash;or
                worse, causing the team to work with the sum of many such messes for years.  
              </p>
            </div> <!-- right_content-one -->
          </section> <!-- content_column_one -->
          <section class="content_column_two  col  col-xs-12  col-xl-6">
            <div class="left_content_two  col  col-xs-12  col-sm-6  ">
              <h2>Ruby/Rails</h2>
            </div> <!-- left_content_two -->
            <div class="right_content_two  col  col-xs-12  col-sm-6">
              <h2>Works in Progress</h2>
            </div> <!-- right_content_two -->
          </section> <!-- content_column_two -->
        </div> <!-- row -->
      </section> <!-- content_container -->
 
      <hr>

<!-- footer -->
      <footer class="footer_row">
        <h3>www.amb.com</h3>
        <p>Cultivated by A. Mitchell Bullard.</p>   
        <div id="share_icons col col-xs-5 col-xs-offset-2">
          <span class='st_twitter_large' displayText='Tweet'></span>
          <span class='st_googleplus_large' displayText='Google +'></span>
          <span class='st_facebook_large' displayText='Facebook'></span>
          <span class='st_linkedin_large' displayText='LinkedIn'></span>
          <span class='st_pinterest_large' displayText='Pinterest'></span>
          <span class='st_email_large' displayText='Email'></span>
        </div> <!-- share_icons -->
      </footer>
    
    </div> <!-- main_container -->

  <?php include '_/components/php/script_tags.php'; ?>

  </body>
</html>