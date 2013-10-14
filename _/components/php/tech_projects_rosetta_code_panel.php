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
                      <?php include '_/components/php/tech_projects_rosetta_code_syntax.php'; ?>
                      <br>
                      <span class="syntax_coloring_dark"><h5>ANSWER:</h5></span>
                      <p>
                        Door numbers 1, 4, 9, 16, 25, 36, 49, 64, 81, and 100 are open.
                      </p>
                    </section> <!-- panel_body -->
            
                    <section class="panel-footer">
                      <h5>NOTES:</h5>
                        <p>This is the most efficient way that I have found to solve this problem, thus far. What I like about it is that variables are created
                          momentarily when they are needed, but they are instantly overwritten so that all one hundred doors, states, and outputs are not a
                          burden on the RAM. Because of this I am able to up this problem to 1,000, 10,000, and even 100,000 doors and still retain an acceptable
                          amount of speed.
                        </p>
                        <p>
                          What I do not like is that it would have to be rewritten if the specifications changed. Nothing further can be done
                          with the output, because it is gone a split second after it appears. The doors cannot be worked with again, because their final state
                          is forgotten. For my purposes with this task, these problems don't bother me, but in another situation, where I may add further
                          functionality, I would most likely alter this code.
                        </p>
                    </section> <!-- panel_footer -->