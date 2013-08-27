<!DOCTYPE html>
<html lang="en">
  <head>
    <title>AMB - HOME</title>
    <?php include '_/components/php/head_tag_contents.php'; ?>
  </head>
  <body id="body_music">
    <div class="main_container container">
      <header class="header_row row">
        <section class="left_header_container">
          <div class="left_header_column col col-lg-6 col-md-6 col-sm-6 col-xs-12">

            <?php include '_/components/php/header.php'; ?>
    
          </div><!-- left_header_column -->
        </section> <!-- end left_header_container -->

        <section class="right_header_container">
          <div class="right_header_column col col-lg-4 col-lg-offset-1 col-md-4 col-md-offset-1 col-sm-4 col-sm-offset-1 hidden-xs"> 
            
            <?php include '_/components/php/header_quotes.php'; ?>
          
          </div> <!-- right_header_column -->
        </section> <!-- end right_header_container --> 
      </header> <!-- end header_row -->

      <hr>

      <section class="top_nav_container col col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="top_nav navbar">
          <ul class="nav nav-pills nav-justified">

            <?php include '_/components/php/header_top_nav.php'; ?>
    
          </ul>
        </div> <!-- end top_nav -->       
      </section> <!-- end top_nav_container -->


<!-- content -->      
      <div class=".content_navbar navbar">
        <ul class="nav">  

<!-- content column one -->
          <section class="left_content_container">
            <div class="left_content_column col col-lg-6 col-md-6 col-sm-6 col-xs-6">                    

              <?php include '_/components/php/content_li_tech.php'; ?>

              <?php include '_/components/php/content_li_music.php'; ?>

            </div> <!-- end content_column_one -->  
          </section> <!-- end left_content_container -->

<!-- content column two -->
          <section class="right_content_container">
            <div class="right_content_column col col-lg-6 col-md-6 col-sm-6 col-xs-6"> 
             
              <?php include '_/components/php/content_li_prose.php'; ?>

              <?php include '_/components/php/content_li_blog.php'; ?>

            </div> <!-- end right_content_column -->      
          </section> <!-- end right_content_container -->
        </ul>
      </div> <!-- end navbar -->
    </div> <!-- end container -->

    <?php include '_/components/php/script_tags.php'; ?>

  </body>
</html>