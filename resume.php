<!DOCTYPE html>
<html lang="en">
    <head>
        <title>A. Mitchell Bullard - Resume</title>
        <?php include '_/components/php/common_content/head_tag_contents.php'; ?>
    </head>
    <body id="body_resume">
        <section  class="main_container  container">
            <!-- header -->
            <?php include '_/components/php/common_content/header.php'; ?>
            <!-- navigation -->
            <?php include '_/components/php/common_content/navigation.php'; ?>
            <!-- content -->
            <div class="row">

                <section id="tech_content_container" class="content_container  container  col  col-xxs-12">
                    <div class="row">

                        <section id="resume_body"  class="col col-xxs-12 col-xs-12 col-md-10 col-md-offset-1  col-lg-8 col-lg-offset-2">
                            <?php include '_/components/php/resume/body.php'; ?>
                        </section>

                    </div>
                </section> <!-- content_container -->

            </div>
            
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