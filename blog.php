<!DOCTYPE html>
<html lang="en">
<head>
    <title>A. Mitchell Bullard - Blog</title>
    <?php include '_/components/php/common_content/head_tag_contents.php'; ?>
</head>
<body id="body_blog">
<section  class="main_container  container">
    <!-- header -->
    <?php include '_/components/php/common_content/header.php'; ?>
    <!-- navigation -->
    <?php include '_/components/php/common_content/navigation.php'; ?>
    <!-- content -->
    <div class="row">
        <section class="content_container  container  col  col-xxs-12">
     
            <section id="tech" >
                <?php include '_/components/php/blog/tech_blog.php'; ?>
            </section>

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