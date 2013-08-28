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
          <div class="right_header_column col hidden-xxs  hidden-xs  col-sm-4 col-sm-offset-1 "> 
            
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
</section>


<!-- content -->
      <section class="content_container container col col-sm-12">
        <div class="row">      
          <div class=".content_navbar navbar">
            <ul class="nav">  

        <section class="content_column_one col col-xxs-12 col-xl-6">
          <div class="row">
            <div class="left_content_one col col-xxs-12 col-sm-6">                    
              
              <?php include '_/components/php/content_li_tech.php'; ?>
            
            </div>
            <div class="right_content_one col col-xxs-12 col-sm-6">
              
              <?php include '_/components/php/content_li_writings.php'; ?>
              
            </div>
          </div><!-- end row -->
        </section> <!-- end left_content_container -->

        <section class="content_colomn_two col col-xxs-12 col-xl-6">
          <div class="row">
            <div class="left_content_two col col-xxs-12 col-sm-6">            
              
              <?php include '_/components/php/content_li_family.php'; ?>

            </div>
            <div class="right_content_two col col-xxs-12 col-sm-6">

              <?php include '_/components/php/content_li_blog.php'; ?>

            </div>
          </div> <!-- end row -->      
        </section> <!-- end content_container_two -->
            </ul>
          </div> <!-- end navbar -->
        </div> <!-- end row -->
      </section> <!-- end content_container -->
    </div> <!-- end container -->

    <?php include '_/components/php/script_tags.php'; ?>

  </body>
</html>