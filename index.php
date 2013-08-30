<!DOCTYPE html>
<html lang="en">
  <head>
    <title>AMB - HOME</title>
    <?php include '_/components/php/head_tag_contents.php'; ?>
  </head>
  <body id="body_home">
    <div class="main_container container">
      <header class="header_row row">
        <section class="left_header_container">
          <div class="left_header_column col col-xs-12  col-sm-6 ">

            <?php include '_/components/php/header.php'; ?>
    
          </div><!-- left_header_column -->
        </section> <!-- end left_header_container -->

        <section class="right_header_container">
          <div class="right_header_column col hidden-xs  col-sm-4 col-sm-offset-1 "> 
            
            <?php include '_/components/php/header_quotes.php'; ?>
          
           </div> <!-- right_header_column -->
        </section> <!-- end right_header_container --> 
      </header> <!-- end header_row -->


      <hr>


         <div class="top_nav navbar hidden-xs visible-sm">
          <ul class="nav nav-pills nav-justified">
            
            <?php include '_/components/php/header_top_nav.php'; ?>
    
                </ul>
        </div> <!-- end top_nav -->

        <div class="top_nav navbar visible-xs hidden-sm hidden-md hidden-lg hidden-xl">
          <ul class="nav nav-pills nav-justified">

            <?php include '_/components/php/header_top_nav.php'; ?>
    
          </ul>
        </div> <!-- end top_nav -->  



<!-- content -->
      <section class="content_container container col col-xs-12">
        <div class="row">      
          <div class=".content_navbar navbar">
            <ul class="nav">  

        <section class="content_column_one col col-xs-12 col-md-6">
          <div class="row">
            <div class="left_content_one col col-xs-12 col-sm-6">                    
              
              <?php include '_/components/php/content_li_tech.php'; ?>
            
            </div>
            <div class="right_content_one col col-xs-12 col-sm-6">
              
              <?php include '_/components/php/content_li_writings.php'; ?>
              
            </div>
          </div><!-- end row -->
        </section> <!-- end left_content_container -->

        <section class="content_colomn_two col col-xs-12 col-md-6">
          <div class="row">
            <div class="left_content_two col col-xs-12 col-sm-6">            
              
              <?php include '_/components/php/content_li_family.php'; ?>

            </div>
            <div class="right_content_two col col-xs-12 col-sm-6">

              <?php include '_/components/php/content_li_blog.php'; ?>

            </div>
          </div> <!-- end row -->      
        </section> <!-- end content_container_two -->
            </ul>
          </div> <!-- end navbar -->
        </div> <!-- end row -->
      </section> <!-- end content_container -->
      <hr>
          <footer class="footer_row">

<h3>www.amb.com</h3>
<p>Powered by Rails, nurtured by Bootstrap, cultivated by A. Mitchell Bullard.</p>   



<div id="banner_share_icons col col-xs-5 col-xs-offset-2">
            <span class='st_twitter_large' displayText='Tweet'></span>
            <span class='st_googleplus_large' displayText='Google +'></span>
            <span class='st_facebook_large' displayText='Facebook'></span>
            <span class='st_linkedin_large' displayText='LinkedIn'></span>
            <span class='st_pinterest_large' displayText='Pinterest'></span>
            <span class='st_email_large' displayText='Email'></span>
</div>
    </div> <!-- end container -->

    <?php include '_/components/php/script_tags.php'; ?>

  </body>
</html>