<?php
      ##################################################
      # The column width, picture width, alt_text, and #
      # $showImage have already been set in the        #
      # pages/auditions.php file                       #
      ##################################################
      
echo<<<MARKER
      <div class='column' style="width:$width_percent"> 
        <h1>SCRUMDIDDLYUMPTIOUS FAMILY FAVORITE!</h1>
        <h2>WILLY WONKA</h2>
      
        <h5>Directed by<br />
            Katelyn Bryant
        </h5>
        <h2>AUDITIONS </h2>
        <h5>August 19 - 20 at 7pm<br />At The Arabian Theatre</h5>

        <img src='{$showImage}' 
             alt="{$alt_text}"
             title="{$alt_text}"
             class='auditionsImage' 
             $picture_width>
        <br />

        <p>
          Blurb goes. When referencing WILLY WONKA, use 
          <span style='font-weight:bold; font-style:italic;'>WILLY WONKA</span> in the HTML.
        </p>

        <p>
        Drop us a line at 
        <a  href="mailto:{$_SESSION['llt_email']}?subject=I%20have%20an%20audition%20question">{$_SESSION['llt_email']}</a>
        if you have any questions.
        </p>
      </div>
                       
MARKER;
