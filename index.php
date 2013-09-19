<!DOCTYPE html>
<html lang="en">
  <head>
    <title>A. Mitchell Bullard - Home</title>
    <?php include '_/components/php/head_tag_contents.php'; ?>
  </head>
  <body id="body_home">
    <section  class="main_container  container">


<!-- header --> 
      <?php include '_/components/php/header.php'; ?>


<!-- navigation -->
      <?php include '_/components/php/navigation.php'; ?> 


<!-- content -->
      <section class="content_container  container  col  col-xxs-12">              
        <div class="row">                     
            <section class="content_column_one  col  col-xxs-12  col-sm-6">
              <div class="row">
                <section id="left_content_one" class="col  col-xxs-12 col-xs-8 col-xs-offset-2">
                  <?php include '_/components/php/content_li_tech.php'; ?> 
                </section> <!-- left_content_one -->
                <section class="right_content_one  col  col-xxs-12 col-xs-8 col-xs-offset-2">
                   <?php include '_/components/php/content_li_family.php'; ?>
                </section><!-- right_content_one-->
              </div><!-- row -->
            </section> <!-- content_column_one -->
            <section id="content_column_two" class="col  col-xxs-12  col-sm-6">
              <div class="row">
                <section class="left_content_two  col  col-xxs-12 col-xs-8 col-xs-offset-2">
                  <?php include '_/components/php/content_li_novel.php'; ?>
                </section> <!-- left_content_two -->
                <section class="right_content_two  col  col-xxs-12 col-xs-8 col-xs-offset-2">
                  <?php include '_/components/php/content_li_contact.php'; ?>
                </section> <!-- right_content_two -->
              </div> <!-- row -->      
            </section> <!-- content_column_two -->
        </div> <!-- row -->     
      </section> <!-- content_container -->
      

<!-- footer -->
      <footer>
        <hr>
        <div class="row">
          <?php include '_/components/php/footer_content.php'; ?>
        </div> <!-- row -->
      </footer>   
    

    </section> <!-- main_container -->
    <?php include '_/components/php/script_tags.php'; ?>
  </body>
</html>