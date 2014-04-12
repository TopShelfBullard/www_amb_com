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
            <section class="content_container  container  col col-xxs-12">
                <section id="resume_background" class="content_container  container  col  col-xxs-12">
                    <div class="row">
                <section id="resume_body"  class="col col-xxs-12 col-md-10 col-md-offset-1  col-lg-8 col-lg-offset-2">
                <?php include '_/components/php/resume/body.php'; ?>
                </section>
                    </div> <!-- row -->
                </section>
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