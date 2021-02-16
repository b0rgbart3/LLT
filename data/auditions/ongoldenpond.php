<?php
      ##################################################
      # The column width, picture width, alt_text, and #
      # $showImage have already been set in the        #
      # pages/auditions.php file                       #
      ##################################################
      
echo<<<MARKER
      <div class='column' style="width:$width_percent"> 
        <h1>A LOVE STORY FOR ALL AGES</h1>
        <h2>ON GOLDEN POND</h2>
      
        <h5>Directed by<br />
            Frankie Bennett
        </h5>
        <h2>AUDITIONS </h2>
        <h5>Feburary 1 - 2 at 7pm<br />At The Arabian Theatre</h5>

        <img src='{$showImage}' 
             alt="{$alt_text}"
             title="{$alt_text}"
             class='auditionsImage' 
             $picture_width>
        <br />

        <p>
          Director Frankie Bennett will hold open auditions for
          <span style='font-weight:bold; font-style:italic;'>
            ON GOLDEN POND
          </span>
          on Monday and Tuesday, February 1st and 2nd at the theatre at 7pm each night.
          </p>
          <p>
            The roles of Norman & Ethel Thayer are cast with Steven & Catherine Nowicki, but all other 
            roles are open.  Frankie will need one actress (aged 40 and up), and three actors (one young 
            teen, one in 40s/50s and one other adult male 30s and up).
          </p>
          <p>
           No preparation necessary - just come on down and read from the script with everyone else.
           The show is set in the state of Maine - so leave your Southern accents at home!!!
        </p>

        <p>
          Drop us a line at 
        <a  href="mailto:{$_SESSION['llt_email']}?subject=I%20have%20an%20audition%20question">{$_SESSION['llt_email']}</a>
        if you have any questions.
        </p>
      </div>                  
MARKER;
