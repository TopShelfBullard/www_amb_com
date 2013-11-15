<!DOCTYPE html>
<html lang="en">
  <head>
    <title>A. Mitchell Bullard - Home</title>
    <?php include '_/components/php/common_content/head_tag_contents.php'; ?>
  </head>
  <body id="body_home">
    <section  class="main_container  container">


<!-- header --> 
      <?php include '_/components/php/common_content/header.php'; ?>


<!-- navigation -->
      <?php include '_/components/php/common_content/navigation.php'; ?> 


<!-- content -->
      <section class="content_container  container  col  col-xxs-12">
        
        <div class="row  hidden-lg">         
          <section id="tech_content_li" class="content_li_structure  col  col-xxs-12  col-xs-6  col-md-5  col-md-offset-1  col-lg-4  col-lg-offset-0">
            <?php include '_/components/php/index/li_tech.php'; ?> 
          </section> <!-- left_content_one -->

          <section id="novel_content_li" class="content_li_structure  col  col-xxs-12 col-xs-6  col-md-5 col-lg-4">
            <?php include '_/components/php/index/li_novel.php'; ?>                  
          </section><!-- right_content_one-->
        </div>


        <div class="row  hidden-lg">
          <section id="family_content_li" class="content_li_structure  col  col-xxs-12  col-xs-6  col-md-5  col-md-offset-1  col-lg-4  col-lg-offset-0">
            <?php include '_/components/php/index/li_screencast.php'; ?>
          </section> <!-- left_content_two -->

          <section id="blog_content_li" class="content_li_structure  col  col-xxs-12 col-xs-6  col-md-5 col-lg-4">
            <?php include '_/components/php/index/li_blog.php'; ?>
          </section> <!-- left_content_two -->
        </div>


        <div class="row  hidden-lg">
          <section id="resume_content_li" class="content_li_structure  col  col-xxs-12  col-xs-6  col-md-5  col-md-offset-1  col-lg-4  col-lg-offset-0">
            <?php include '_/components/php/index/li_resume.php'; ?>
          </section> <!-- right_content_two -->

          <section id="contact_content_li" class="content_li_structure  col  col-xxs-12 col-xs-6  col-md-5  col-lg-4">
            <?php include '_/components/php/index/li_contact.php'; ?>
          </section> <!-- right_content_two -->
        </div>


        <div class="row  hidden-xxs  hidden-xs  hidden-sm  hidden-md">
          <section id="tech_content_li" class="content_li_structure  col  col-xxs-12  col-xs-6  col-md-5  col-md-offset-1  col-lg-4  col-lg-offset-0">
            <?php include '_/components/php/index/li_tech.php'; ?> 
          </section> <!-- left_content_one -->

          <section id="novel_content_li" class="content_li_structure  col  col-xxs-12 col-xs-6  col-md-5 col-lg-4">
            <?php include '_/components/php/index/li_novel.php'; ?>                  
          </section><!-- right_content_one-->

          <section id="family_content_li" class="content_li_structure  col  col-xxs-12  col-xs-6  col-md-5  col-md-offset-1  col-lg-4  col-lg-offset-0">
            <?php include '_/components/php/index/li_screencast.php'; ?>
          </section> <!-- left_content_two -->
        </div>


        <div class="row  hidden-xxs  hidden-xs  hidden-sm  hidden-md">
          <section id="blog_content_li" class="content_li_structure  col  col-xxs-12 col-xs-6  col-md-5 col-lg-4">
            <?php include '_/components/php/index/li_blog.php'; ?>
          </section> <!-- left_content_two -->

          <section id="resume_content_li" class="content_li_structure  col  col-xxs-12  col-xs-6  col-md-5  col-md-offset-1  col-lg-4  col-lg-offset-0">
            <?php include '_/components/php/index/li_resume.php'; ?>
          </section> <!-- right_content_two -->

          <section id="contact_content_li" class="content_li_structure  col  col-xxs-12 col-xs-6  col-md-5  col-lg-4">
            <?php include '_/components/php/index/li_contact.php'; ?>
          </section> <!-- right_content_two -->
        </div> <!-- row -->    

      </section> <!-- content_container -->
      

<!-- footer -->
      <footer class="col-xxs-12">       
        <div class="row">
          <hr> 
          <?php include '_/components/php/common_content/footer_content.php'; ?>
        </div> <!-- row -->
      </footer>   
    

    </section> <!-- main_container -->
      <?php include '_/components/php/common_content/script_tags.php'; ?>
  </body>
</html>