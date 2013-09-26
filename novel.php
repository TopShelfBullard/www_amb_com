<!DOCTYPE html>
<html lang="en">
  <head>
    <title>A. Mitchell Bullard - Novel</title>
    <?php include '_/components/php/head_tag_contents.php'; ?>
  </head>
  <body id="body_novel">
    <section  class="main_container  container">


<!-- header --> 
      <?php include '_/components/php/header.php'; ?>


<!-- navigation -->
      <?php include '_/components/php/navigation.php'; ?> 


<!-- content -->
      <section class="content_container  container    col  col-xxs-12">
        <div id="novel_teaser" class="col-xss-12 col-sm-7 col-md-6 col-lg-6">
          <div class="row">

<!-- novel image for small screen and down -->
            <section id="novel_info_container" class="container">
              <div class="row">
                <div class=" col col-xxs-12  hidden-sm  hidden-md  hidden-lg">

                  <section class="col  col-xxs-12  hidden-sm  hidden-md  hidden-lg">
                    <h3>The Many Magical Journeys of Alexander Wright</h3>           
                  </section>

                  <section class="col  col-xxs-12  hidden-sm  hidden-md  hidden-lg">
                    <img  src="images/novel_dark.png" alt="Cover image for A. Mitchell Bullard's debut novel" width="100%" class="novel_img">
                  </section>
               
                  <section class="col  col-xxs-12  hidden-sm  hidden-md  hidden-lg">
                    <h4>Book One: Miles of Mystery and Mayhem</h4>              
                  </section>
             
                </div> <!-- column -->
              </div> <!-- row -->
            </section> <!-- novel_info_container -->


<!-- novel teaser -->
            <section id="novel_teaser_body" class="well">
              <div class="row">

                <section id="novel_teaser_intro" class="col col-xxs-12">
                  <h5>Your journey begins soon.</h5>
                </section><!-- column -->                 

                <section id="novel_teaser_column_one"  class="col col-xxs-12  col-xs-6">                 
                  <?php include '_/components/php/novel_teaser_column_one.php'; ?>
                </section> <!-- novel_teaser_column_one  -->

                <section id="novel_teaser_column_two" class="col col-xxs-12  col-xs-6">
                  <?php include '_/components/php/novel_teaser_column_two.php'; ?>                   
                </section> <!-- novel_teaser_column_two  -->
                
                <section id="novel_teaser_outro" class="col col-xxs-12 clearfix">
                  <h5>Your journey begins soon, exclusively on Amazon.</h5>                 
                </section> <!-- novel_teaser_outro -->

              </div> <!-- row -->
            </section> <!-- novel_teaser_body -->

          </div> <!-- row -->
        </div> <!-- novel_teaser -->
    

<!-- novel image for medium screen and up -->
        <section id="img_container" class="container">
          <div class="row">
            <div class="col col-sm-5 col-md-6 col-lg-6">

              <section class="col  hidden-xxs  hidden-xs  col-sm-12">
                <h3>The Many Magical Journeys of Alexander Wright</h3>           
              </section>
             
              <section class="col  hidden-xxs  hidden-xs  col-sm-12  hidden-md  hidden-lg">
                <img  src="images/novel_tall.png" alt="Cover image for A. Mitchell Bullard's debut novel" width="100%" class="novel_img">
              </section>

              <section class="col  hidden-xxs hidden-xs  hidden-sm  col-md-12 col-lg-12">
                <img  src="images/novel_dark.png" alt="Cover image for A. Mitchell Bullard's debut novel" width="100%" class="novel_img">
              </section>

              <section id="book_one_container" class="container">
                <div class="col  hidden-xxs  hidden-xs  col-md-9  col-md-offset-2 col-lg-12 col-lg-offset-0">
                  <h4>Book One: Miles of Mystery and Mayhem</h4>              
                </div>
              </section> <!-- book_one_container -->

            </div> <!-- column -->
          </div> <!-- row -->
        </section> <!-- img_container -->


<!-- novel reviews --> 
        <section id="novel_reviews_panel" class="col col-xxs-12 col-sm-10 col-sm-offset-1">         
          <div class="panel panel-default">

            <section id="panel-heading" class="col col-xxs-12">
              <h4>Praise for Miles of Mystery and Mayhem:</h4>
            </section> <!-- panel_heading -->           
            
            <section class="panel-body">            
              <section id="novel_reviews_column_one" class="col col-xxs-12  col-md-7">                                             
                <section class="left_novel_review  review_area_item  col col-xxs-12">
                  <?php include '_/components/php/novel_review_write_your_own.php'; ?>
                </section> <!-- left_novel_review -->

                <section class="left_novel_review  review_area_item  col col-xxs-12">
                  <?php include '_/components/php/novel_review_what_a_fun_read.php'; ?>
                </section> <!-- left_novel_review -->           
              </section> <!-- novel_reviews_column_one -->

              <section id="novel_reviews_column_two" class="col  col-xxs-12 col-md-5">
                <section class="right_novel_review  review_area_item  col  col-xxs-12">
                  <?php include '_/components/php/novel_review_super_fun.php'; ?>
                </section> <!-- right_novel_review -->

                <section class= "right_novel_review  review_area_item  col col-xxs-12">
                  <?php include '_/components/php/novel_review_excellent_and_entertaining.php'; ?>
                </section> <!-- right_novel_review -->
              </section> <!-- novel_reviews_column_two -->
            </section> <!-- panel_body -->
            
            <section class="panel-footer">
              <?php include '_/components/php/novel_reviews_panel_footer.php'; ?>
            </section> <!-- panel_footer -->

          </div> <!-- panel -->
        </section> <!-- novel_reviews_panel -->


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