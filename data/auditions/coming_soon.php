<?php
      ##################################################
      # The column width, picture width, alt_text, and #
      # $showImage have already been set in the        #
      # pages/auditions.php file                       #
      ##################################################

      echo<<<CMS
       <div class='column' style="width:$width_percent;">
          <h4>
            Stay Tuned<br />
            More Audition Information
          </h4>        
          <h2>
            Will Be Announced<br/ >
            SOON!!!
          </h2>
          <br />
          <img src='{$showImage}'
               alt="{$alt_text}"
               title="{$alt_text}"
               class='auditionsImage'
               $picture_width>
          <br /><br />
          <div style="text-align: center;"> 
            Drop us a line at 
            <a  href="mailto:{$_SESSION['llt_email']}?subject=I%20have%20an%20audition%20question">
                {$_SESSION['llt_email']}
            </a> if you have any questions.
          </div>
        </div>
CMS;
?>
