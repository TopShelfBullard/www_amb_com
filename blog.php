<!DOCTYPE html>
<html lang="en">
  <head>
    <title>A. Mitchell Bullard - Blog</title>
    <?php include '_/components/php/common_content/head_tag_contents.php'; ?>
  </head>
  <body id="body_family">
    <section  class="main_container  container">


<!-- header --> 
      <?php include '_/components/php/common_content/header.php'; ?>


<!-- navigation -->
      <?php include '_/components/php/common_content/navigation.php'; ?> 


<!-- content -->
      <section class="content_container  container  col  col-xxs-12">
        <div class="row">

          <section class="tech_blog col  col-xxs-12  col-sm-4">   
            <?php include '_/components/php/blog/tech_blog.php'; ?>
          </section>

          <section class="servant_of_truth_blog col  col-xxs-12  col-sm-4">   
            <?php include '_/components/php/blog/apologetics_blog.php'; ?>        
          </section>

          <section class="profile_picture  col hidden-xxs  hidden-xs  col-sm-4">
            <img  src="images/profile.png" alt="Profile picture" width="100%" class="profile_img">
          </section>

        </div> <!-- row -->
      </section> <!-- content_container -->

<!-- footer -->
      <footer>
        <hr>
        <div class="row">
          <?php include '_/components/php/common_content/footer_content.php'; ?>
        </div> <!-- row -->
      </footer>   
    

    </section> <!-- main_container -->
    <?php include '_/components/php/common_content/script_tags.php'; ?>
  </body>
</html>