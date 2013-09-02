<!DOCTYPE html>
<html lang="en">
  <head>
    <title>A. Mitchell Bullard - Home</title>
    <?php include '_/components/php/head_tag_contents.php'; ?>
  </head>
  <body id="body_home">
    <div class="main_container  container">


<!-- header --> 
      <header>
        <div class="row">
          <section class="left_header_container">
            <div class="left_header_column  col  col-xxs-12 col-xs-6">
              <?php include '_/components/php/header_title.php'; ?>
            </div><!-- left_header_column -->
          </section> <!-- left_header_container -->

          <section class="right_header_container">
            <div class="right_header_column  col  col-xxs-12 col-sm-4  col-sm-offset-1">
              <?php include '_/components/php/header_quotes.php'; ?>
            </div> <!-- right_header_column -->


          </section> <!-- right_header_container -->
        
        </div> <!-- row -->       
        <hr>     
      </header> <!-- header -->
 


<!-- navigation -->
      <nav class="top_nav  hidden-xs  visible-sm">
        <ul class="nav nav-pills  nav-justified">

            <?php include '_/components/php/nav.php'; ?>

        </ul>
      </nav> <!-- top_nav -->



<!-- content -->
      <div class="content_container  container  col  col-xxs-12">              
        <div class="row">         
             
              <section class="content_column_one  col  col-xxs-12  col-sm-6">
                <div class="row">
                  <div class="left_content_one  col  col-xxs-12 col-xs-8 col-xs-offset-2">
                    <?php include '_/components/php/content_li_tech.php'; ?> 
                  </div> <!-- left_content_one -->
                  <div class="right_content_one  col  col-xxs-12 col-xs-8 col-xs-offset-2">
                     <?php include '_/components/php/content_li_family.php'; ?>
                  </div>
                </div><!-- row -->
              </section> <!-- content_column_one -->

              <section class="content_column_two  col  col-xxs-12  col-sm-6">
                <div class="row">
                  <div class="left_content_two  col  col-xxs-12 col-xs-8 col-xs-offset-2">
                    <?php include '_/components/php/content_li_novel.php'; ?>
                  </div> <!-- left_content_two -->
                  <div class="right_content_two  col  col-xxs-12 col-xs-8 col-xs-offset-2">
                    <?php include '_/components/php/content_li_blog.php'; ?>
                  </div> <!-- right_content_two -->
                </div> <!-- row -->      
              </section> <!-- content_column_two -->

        </div> <!-- row -->     
      </div> <!-- content_container -->


<!-- footer -->
      <footer>
        <hr>
        <div class="row">
          <?php include '_/components/php/footer_content.php'; ?>
        </div> <!-- row -->
      </footer>
      
    </div> <!-- main_container -->

  <?php include '_/components/php/script_tags.php'; ?>

  </body>
</html>