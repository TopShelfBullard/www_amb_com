<!DOCTYPE html>
<html lang="en">
  <head>
    <title>A. Mitchell Bullard - Home</title>
    <?php include '_/components/php/head_tag_contents.php'; ?>
  </head>
  <body id="body_home">
    <div class="main_container  container">


<!-- header --> 
      <?php include '_/components/php/header.php'; ?>



<!-- navigation -->
      <?php include '_/components/php/navigation.php'; ?> 

      

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