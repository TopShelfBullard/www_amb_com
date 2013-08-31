<!DOCTYPE html>
<html lang="en">
  <head>
    <title>AMB - HOME</title>
    <?php include '_/components/php/head_tag_contents.php'; ?>
  </head>
  <body id="body_home">
    <div class="main_container  container">
<!-- header --> 
      <header class="header_row  row">
        <section class="left_header_container">
          <div class="left_header_column  col  col-xs-12  col-sm-6">

            <?php include '_/components/php/header_title.php'; ?>

          </div><!-- left_header_column -->
        </section> <!-- left_header_container -->
        <section class="right_header_container">
          <div class="right_header_column  col  hidden-xs  col-sm-4  col-sm-offset-1">

            <?php include '_/components/php/header_quotes.php'; ?>

           </div> <!-- right_header_column -->
        </section> <!-- right_header_container -->
      </header> <!-- header -->
 
<!-- navigation -->
      <nav class="top_nav  navbar  hidden-xs  visible-sm">
        <ul class="nav nav-pills  nav-justified">

            <?php include '_/components/php/header_top_nav.php'; ?>

        </ul>
      </nav> <!-- top_nav -->
      <nav class="top_nav  navbar  visible-xs  hidden-sm  hidden-md  hidden-lg  hidden-xl">
        <ul class="nav  nav-pills nav-justified">

          <?php include '_/components/php/header_top_nav.php'; ?>

        </ul>
      </nav> <!-- top_nav -->  
<!-- content -->
      <section class="content_container  container  col  col-xs-12">              
        <div class="row">         
          <div class="content_navbar  navbar">
            <ul class="nav">                          
              <section class="content_column_one  col  col-xs-12  col-sm-6">
                <div class="row">                 
                  <div class="left_content_one  col  col-xs-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-3 col-xl-6 col-xl-offset-0">

                    <?php include '_/components/php/content_li_tech.php'; ?> 

                  </div> <!-- left_content_one -->
                  <div class="right_content_one  col  col-xs-12  col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-3 col-xl-6 col-xl-offset-0">

                     <?php include '_/components/php/content_li_family.php'; ?>

                  </div>
                </div><!-- row -->
              </section> <!-- content_column_one -->
              <section class="content_column_two  col  col-xs-12  col-sm-6">
                <div class="row">
                  <div class="left_content_two  col  col-xs-12  col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-1 col-xl-6 col-xl-offset-0">

                    <?php include '_/components/php/content_li_writings.php'; ?>

                  </div> <!-- left_content_two -->
                  <div class="right_content_two  col  col-xs-12  col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-1 col-xl-6 col-xl-offset-0">

                    <?php include '_/components/php/content_li_blog.php'; ?>

                  </div> <!-- right_content_two -->
                </div> <!-- row -->      
              </section> <!-- content_column_two -->
            </ul> <!-- nav -->
          </div> <!-- content_navbar -->
        </div> <!-- row -->     
      </section> <!-- content_container -->

<!-- footer -->
      <footer class="footer_row row">
        <?php include '_/components/php/footer_content.php'; ?>
      </footer>
      
    </div> <!-- main_container -->

  <?php include '_/components/php/script_tags.php'; ?>

  </body>
</html>