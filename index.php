<!DOCTYPE html>
<html lang="en">
  <head>
    <title>AMB - HOME</title>
    <?php include '_/components/php/head_tag_contents.php'; ?>
  </head>
  <body id="body_music">
    <div class="container">

      <?php include '_/components/php/header.php'; ?>
      <?php include '_/components/php/top_nav.php'; ?>

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