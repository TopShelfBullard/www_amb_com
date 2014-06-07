<!DOCTYPE html>
<html lang="en">
    <head>
        <title>A. Mitchell Bullard - Tech</title>
        <?php include '_/components/php/common_content/head_tag_contents.php'; ?>
    </head>
    <body id="body_tech">
        <section  class="main_container  container">
            <!-- header -->
            <?php include '_/components/php/common_content/header.php'; ?>
            <!-- navigation -->
            <?php include '_/components/php/common_content/navigation.php'; ?>
            <!-- content -->
            <div class="row">
                <section id="tech_content_container" class="content_container  container  col  col-xxs-12">
                    <div class="row">

                        <!-- begin tab pane one -->
                        <section id="pane_one" class="col col-xxs-12 col-sm-6">
                            
                            <div class="tech_img_right  col  col-xxs-12  col-xs-12  hidden-sm  hidden-md  hidden-lg">
                                <img  src="images/tech_with_helen1.png" alt="A. Mitchell Bullard coding with his daugther" width="100%" class="tech_img">
                            </div>

                            <?php include '_/components/php/tech/pane_one/pane_one.php'; ?>

                            <div class="tech_img_left  col  col-xxs-12">
                                <img  src="images/tech.png" alt="A. Mitchell Bullard hacking in the grass" width="100%" class="tech_img">
                            </div>

                        </section> 
                        <!-- end tab pane one -->

                        <!-- begin tab pane two-->
                        <section id="pane_two" class="col col-xxs-12 col-sm-6">  

                            <div class="tech_img_right  col  hidden-xxs  hidden-xs  col-xs-12">
                                <img  src="images/tech_with_helen1.png" alt="A. Mitchell Bullard coding with his daugther" width="100%" class="tech_img">
                            </div>

                            <?php include '_/components/php/tech/pane_two/pane_two.php'; ?>     
                                        
                        </section>
                        <!-- end tab pane two -->

                    </div> <!-- row -->
                </section> <!-- content_container -->
            </div> <!-- row -->
            <!-- footer -->
            <footer>
                <div class="row">
                    <?php include '_/components/php/common_content/footer_content.php'; ?>
                </div> <!-- row -->
            </footer>

        </section> <!-- main_container -->
        <?php include '_/components/php/common_content/script_tags.php'; ?>
    </body>
</html>