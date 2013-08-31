<!DOCTYPE html>
<html lang="en">
  <head>
    <title>AMB - TECH</title>
    <?php include '_/components/php/head_tag_contents.php'; ?>
  </head>
  <body id="body_tech">
    <div class="main_container container">


<!-- header --> 
      <header class="header_row  row">
        <section class="left_header_container">
          <div class="left_header_column  col  col-xs-6">

            <?php include '_/components/php/header_title.php'; ?>

          </div><!-- left_header_column -->
        </section> <!-- left_header_container -->

        <div class="hidden-xs hidden-sm hidden-md hidden-lg  hidden-xl">
          <hr>
        </div>

        <section class="right_header_container">
          <div class="right_header_column  col  hidden-xxs col-xs-6 col-sm-4  col-sm-offset-1">

            <?php include '_/components/php/header_quotes.php'; ?>

           </div> <!-- right_header_column -->
        </section> <!-- right_header_container -->
      </header> <!-- header -->
 
<!-- navigation -->
      <nav class="top_nav  hidden-xs  visible-sm">
        <ul class="nav nav-pills  nav-justified">

            <?php include '_/components/php/header_top_nav.php'; ?>

        </ul>
      </nav> <!-- top_nav -->
      <nav class="top_nav  visible-xs  hidden-sm  hidden-md  hidden-lg  hidden-xl">
        <ul class="nav  nav-pills nav-justified">

          <?php include '_/components/php/header_top_nav.php'; ?>

        </ul>
      </nav> <!-- top_nav -->  
<!-- content --> 

    <div class="tab_pane_container container col col-xs-12">
    <div class="row">  

      <div class="tab_pane_one col col-xxs-12 col-md-6">
        <h1>Code</h1>
        <div class="tabbable tabs">              
          <ul class="nav nav-tabs">  
            <li class="active"><a href="#html_css" data-toggle="tab">HTML/CSS</a></li>
            <li><a href="#javascript" data-toggle="tab">JAVASCRIPT</a></li>
            <li><a href="#ruby" data-toggle="tab">RUBY</a></li>                  
          </ul>
        </div> <!-- tabbable -->

        <section class="tab-content">
                                      
          <div class="tab-pane active" id="html_css">                     
            <div class="col col-xxs-12">           
              <?php include '_/components/php/tech_code_html_css.php'; ?>
            </div> <!-- col -->           
          </div> <!-- tab_pane --> 

          <div class="tab-pane" id="javascript"> 
            <div class="col col-xxs-12">
              <?php include '_/components/php/tech_code_javascript.php'; ?>
            </div> <!-- col -->         
          </div> <!-- tab_pane --> 

          <div class="tab-pane" id="ruby">                     
            <div class="col col-xxs-12">           
              <?php include '_/components/php/tech_code_ruby.php'; ?>
            </div> <!-- col -->           
          </div> <!-- tab_pane -->                                                                       
                                      
          </section> <!-- tab_content -->
            
        </div> <!-- tab_pane_one -->



      <div class="tab_pane_two col col-xxs-12 col-md-6">
        <h1>Projects</h1>
        <div class="tabbable tabs">              
          <ul class="nav nav-tabs">  
            <li class="active"><a href="#nerdwords" data-toggle="tab">NERDWORDS</a></li>
            <li><a href="#revisionist" data-toggle="tab">REVISIONIST</a></li>
            <li><a href="#c#" data-toggle="tab">C#</a></li>                 
          </ul>
        </div> <!-- tabbable -->

        <section class="tab-content">
                                      
          <div class="tab-pane active" id="nerdwords">                     
            <div class="col col-xxs-12"> 
             <?php include '_/components/php/tech_projects_nerdwords.php'; ?>
            </div> <!-- col -->           
          </div> <!-- tab_pane --> 

          <div class="tab-pane" id="revisionist"> 
            <div class="col col-xxs-12">
              <?php include '_/components/php/tech_projects_revisionist.php'; ?>
            </div> <!-- col -->         
          </div> <!-- tab_pane --> 

          <div class="tab-pane" id="c#">                     
            <div class="col col-xxs-12">
              <?php include '_/components/php/tech_c#.php'; ?>
            </div> <!-- col -->           
          </div> <!-- tab_pane -->
            
        </div> <!-- tab_pane_two -->
        </div> <!-- row -->
        </div> <!-- tab_pane_container -->

     
<!-- footer -->
      <footer class="footer_row row">
        <?php include '_/components/php/footer_content.php'; ?>
      </footer>
      
    </div> <!-- main_container -->

  <?php include '_/components/php/script_tags.php'; ?>

  </body>
</html>