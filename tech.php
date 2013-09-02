<!DOCTYPE html>
<html lang="en">
  <head>
    <title>A. Mitchell Bullard - Tech</title>
    <?php include '_/components/php/head_tag_contents.php'; ?>
  </head>
  <body id="body_tech">
    <div class="main_container container">


<!-- header --> 
      <?php include '_/components/php/header.php'; ?>


<!-- navigation -->
      <?php include '_/components/php/navigation.php'; ?> 


<!-- content --> 
      <div class="content_container  container  col  col-xxs-12">
        <div class="row">  

          
          <div class="tab_pane_code col col-xxs-12 col-sm-6">           

            <h1>Code</h1>           
            <section class="tabbable tabs">              
              <ul class="nav nav-tabs">  
                <li class="active"><a href="#html_css" data-toggle="tab">HTML/CSS</a></li>
                <li><a href="#javascript" data-toggle="tab">JAVASCRIPT</a></li>
                <li><a href="#ruby" data-toggle="tab">RUBY</a></li>                  
              </ul>
            </section> <!-- tabbable -->
            
            <div class="tab-content">
                                      
              <section class="tab-pane active" id="html_css">                     
                <div class="col col-xxs-12">           
                  <?php include '_/components/php/tech_code_html_css.php'; ?>
                </div> <!-- col -->           
              </section> <!-- tab_pane --> 

              <section class="tab-pane" id="javascript"> 
                <div class="col col-xxs-12">
                  <?php include '_/components/php/tech_code_javascript.php'; ?>
                </div> <!-- col -->         
              </section> <!-- tab_pane --> 

              <section class="tab-pane" id="ruby">                     
                <div class="col col-xxs-12">           
                  <?php include '_/components/php/tech_code_ruby.php'; ?>
                </div> <!-- col -->           
              </section> <!-- tab_pane -->                                                                       
                                      
            
            </div> <!-- tab_content -->   
          

            <div class="tech_img_left  col  col-xxs-6  col-sm-12">
              <img  src="images/tech_with_helen1.png" alt="Profile picture" width="100%" class="tech_img">
            </div>


          </div> <!-- tab_pane_one -->



          <div class="tab_pane_projects col col-xxs-12 col-sm-6">

            <div class="tech_img_right  col  col-xxs-6  col-sm-12">
              <img  src="images/tech.png" alt="Profile picture" width="100%" class="tech_img">
            </div>

            <h1>Projects</h1>

            <section class="tabbable tabs">              
              <ul class="nav nav-tabs">  
                <li class="active"><a href="#nerdwords" data-toggle="tab">NERDWORDS</a></li>
                <li><a href="#revisionist" data-toggle="tab">REVISIONIST</a></li>
                <li><a href="#c#" data-toggle="tab">C#</a></li>                 
              </ul>
            </section> <!-- tabbable -->

            <div class="tab-content">
                                          
              <section class="tab-pane active" id="nerdwords">                     
                <div class="col col-xxs-12"> 
                 <?php include '_/components/php/tech_projects_nerdwords.php'; ?>
                </div> <!-- col -->           
              </section> <!-- tab_pane --> 

              <section class="tab-pane" id="revisionist"> 
                <div class="col col-xxs-12">
                  <?php include '_/components/php/tech_projects_revisionist.php'; ?>
                </div> <!-- col -->         
              </section> <!-- tab_pane --> 

              <section class="tab-pane" id="c#">                     
                <div class="col col-xxs-12">
                  <?php include '_/components/php/tech_c#.php'; ?>
                </div> <!-- col -->           
              </section> <!-- tab_pane -->
                
            </div> <!-- tab-content -->
          </div> <!-- tab_pane_two --> 





        </div> <!-- row -->
      </div> <!-- content_container -->

     
<!-- footer -->
      <footer>
        <hr>
        <div class="row">
          <?php include '_/components/php/footer_content.php'; ?>
        </div> <!-- row -->
      </footer>
      
    </div> <!-- main_container -->

  <?php include '_/components/php/script_tags.php'; ?>

  </body>
</html>