<?php
/*------------------------

function:  report_summary
purpose:   display to the use the report sumamry page, including:
          --  textarea for survey_summary
          --  buttons to go the following places
              --  Submit report & Exit
              --  Cancel  & return to Main menu




    Created by:  Rebecca Williams
    Created on:  11/27/16

    Modified By:   On:
    ----------------*/
function report_summary()
{
        ?>
        <div class="entry-block">
          <form method="post"
                action="<?= htmlentities($_SERVER['PHP_SELF'],
                                         ENT_QUOTES) ?>">
         <fieldset>
           <legend>Report Summary</legend>

              <h2> Would you like to add a survey summary? Include conditions and other general observations.  </h2>
                    <textarea rows="4" cols="50" name = "summary">
                    </textarea>
              <div class="chooseAction">
                  <input type="submit" name="submit_report" value="Submit Report"/>
                  <input type="submit" name="main_menu" value="Cancel"/>
              </div>
            </fieldset>
          </form>
        </div>
        <?php
        }
?>