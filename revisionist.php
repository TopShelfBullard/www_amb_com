 <!DOCTYPE html>
<html lang="en">
  <head>
    <title>AMB - HOME</title>
    <?php include '_/components/php/head_tag_contents.php'; ?>
  </head>
  <body id="body_home">
    <div class="main_container  container">
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
      <nav class="top_nav  navbar  hidden-xs  visible-sm">
        <ul class="nav nav-pills  nav-justified">

            <?php include '_/components/php/header_top_nav.php'; ?>

        </ul>
      </nav> <!-- top_nav -->
      <nav class="top_nav  navbar  visible-xs  hidden-sm  hidden-md  hidden-lg  hidden-xl">
        <ul class="nav  nav-pills nav-justified">

          <?php include '_/components/php/header_top_nav.php'; ?>

        </ul>
      </nav> <!-- top_nav -->        
       <h1>Song Revision Form</h1>
        <form>
            <h2>Please enter song personalization information:</h2>
            <fieldset>
                <ul>
                    <li>
                        <label>name:</label>   
                        <input id="name"type="text">
                    </li>
                    <li>
                        <label>favorite place:</label>
                        <input id="place">
                    </li>
                    <li>
                        <label>favorite holiday:</label>
                        <input id="holiday">
                    </li>            
                </ul>
            </fieldset>
            <h2>Please enter five nouns and one plural noun:</h2>
            
            <fieldset id="nounInputs">
                <input id="noun1" type="text" placeholder="noun">
                <input id="noun2" type="text" placeholder="noun">
                <input id="noun3" type="text" placeholder="noun">
                <input id="noun4" type="text" placeholder="noun">
                <input id="noun5" type="text" placeholder="noun">
                <input id="pluralNoun" type="text" placeholder="plural noun">
            </fieldset>
            
            <h2>Please enter five verbs:</h2>
            
            <fieldset id="verbInputs">
                <input id="verb1" type="text" placeholder="verb">
                <input id="verb2" type="text" placeholder="verb">
                <input id="verb3" type="text" placeholder="verb">
                <input id="verb4" type="text" placeholder="verb">
                <input id="verb5" type="text" placeholder="verb">
            </fieldset>
            
            <h2>Please enter two adjectives:</h2>
            
            <fieldset id="adjectiveInputs">
                <input id="adjective1" type="text" placeholder="adjective">
                <input id="adjective2" type="text" placeholder="adjective">
            </fieldset>
            
            <h2>Please enter four terms of endearment:</h2>
            
            <fieldset id="termOfEndearmentInputs">
            <input id="termOfEndearment1" type="text" placeholder="term of endearment">
            <input id="termOfEndearment2" type="text" placeholder="term of endearment">
            <input id="termOfEndearment3" type="text" placeholder="term of endearment">
            <input id="termOfEndearment4" type="text" placeholder="term of endearment">
            </fieldset>
            
            <input id="enterButton" type="button" value="ENTER">
        </form>
        <div id="originalSongLyrics">
            <h3>"Mexico" by Cake</h3>
            <p>
                I had a match. You had a lighter.
                <br>
                I had a flame. You had a fire.
                <br>
                I was bright. You were much brighter.
                <br>
                I was High. You were the sky.
                <br>
                Oh, baby, I was bound for Mexico.
                <br>
                Oh, baby, I was bound to let you go.
            </p>
            <p>
                I don't know much about Cinco de Mayo.
                <br>
                I'm never sure what it's all about.
                <br>
                But I say I want you. You don't believe me.
                <br>
                You say you want me, but I have my doubts.
                <br>
                Oh, baby, I was bound for Mexico.
                <br>
                Oh, baby, I was bound to let you go.
            </p>
        </div>
        <div id="rewrittenSongLyrics">
            <h3>"Mexico" rewritten by <span class="name"></span></h3>
            <p>
                I had a <span class="noun1"></span>. 
                You had a <span class="noun2"></span>.
                <br>
                I had a <span class="noun3"></span>.
                You had a <span class="noun4"></span>.
                <br>
                I was <span class="adjective1"></span>.
                You were much <span class="adjective1"></span>er.
                <br>
                I was <span class="adjective2"></span>.
                You were the <span class="noun5"></span>.
                <br>
                Oh, <span class="termOfEndearment1"></span>,
                I was bound for <span class="place"></span>.
                <br>
                Oh, <span class="termOfEndearment2"></span>,
                I was bound to let you <span class="verb1"></span>.
            </p>
            <p>
                I don't know much about <span class="holiday"></span>.
                <br>
                I'm never sure what it's all about.
                <br>
                But I say I <span class="verb2"></span> you.
                You don't <span class="verb3"></span> me.
                <br>
                You say you <span class="verb4"></span> me,
                but I have my <span class="pluralNoun"></span>.
                <br>
                Oh, <span class="termOfEndearment3"></span>,
                I was bound for <span class="place"></span>.
                <br>
                Oh, <span class="termOfEndearment4"></span>,
                I was bound to let you <span class="verb5"></span>.
            </p>
        </div>        
<!-- footer -->
      <footer class="footer_row row">
        <?php include '_/components/php/footer_content.php'; ?>
      </footer>

    </div> <!-- main_container -->

  <?php include '_/components/php/script_tags.php'; ?>

  </body>
</html>