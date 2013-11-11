<section id="panel-heading" >
                      <h5>100 Doors</h5>
                      <p>
                        You have 100 doors in a row that are all initially closed. You make 100 passes by the doors. The first time through, you
                        visit every door and toggle the door (if the door is closed, you open it; if it is open, you close it). The second time you only
                        visit every second door (door #2, #4, #6 ...). The third time, every third door (door #3, #6, #9, ...), ect., until you only visit
                        the one hundredth.
                      </p>
                      <p>
                        Question: What state are the doors in after the last pass? Which are open, which are closed?
                      </p>
                    </section> <!-- panel_heading -->           
            
                    <section class="panel-body panel_syntax_default">
                      <span class="syntax_coloring_dark">
                        <h5>SOLUTION:</h5>
                      </span>
                      <br>
                      <?php include '_/components/php/tech/projects_rosetta_code_syntax.php'; ?>
                      <br>
                      <span class="syntax_coloring_dark"><h5>ANSWER:</h5></span>
                      <p>
                        Door numbers 1, 4, 9, 16, 25, 36, 49, 64, 81, and 100 are open.
                      </p>
                    </section> <!-- panel_body -->
            
                    <section class="panel-footer">
                      <h5>NOTES:</h5>
                        <p>
                          At first I wrote a Door class and created 100 instances of it. The above code runs way faster, but with the class, the
                          program could be more easily modified should the specifications ever change (which they won't, but still...)
                        </p>
                        <p>
                          Thoughts and suggestions are welcome. Go to the contact page and hit me up.
                        </p>
                    </section> <!-- panel_footer -->