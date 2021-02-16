<?php 
#$showImage = $_SESSION['website_home']/data/shows/nn/images/xxxxxxx.xxx
$showImage = dirname($_SESSION['website_home'] . substr(__FILE__,strlen($_SESSION['root'])));
$showImage = $showImage . "/images/hyde.jpg";
?>
    <div id="jekyll" class='show'>
    <img style="width: 50%;"
    <?php echo 'src="' . $showImage . '"'; ?> 
         class="floater"
         alt="Jekyll &amp; Hide"
         title="Jekyll &amp; Hide"/>
      <br />
      <h2>JEKYLL &amp; HYDE</h2>
      <h3>The Musical Thriller!</h3>
      <br />
      <h4>Oct 29 - Nov 1, 2015</h4>
      <p class='reservation_line'>       
        <?php
          $temp=explode(".",basename(__FILE__));
          $the_show=$temp[0];  
   
          reservation_print_yes_no($the_show,$years_numbers,$date_array);
        ?>
      </p>  
      <br />
      <h5>Director - Sam Buchanan</h5>
        
      <p>
        The show was a 'monster' hit on Broadway in its original run back in 1997 receiving numerous Tony and 
        Drama Desk nominations and awards, and was revived in NYC just two years ago. 
      </p>
      <p> 
        A huge national tour of the show is scheduled for next year, and filming will soon begin on a major 
        motion picture release, but LLT has secured the rights to bring it to our audiences as a special 
        Halloween week presentation this fall to kick off our 
        <span style="font-weight:bold;font-style:italic;">"Fabulous Fifty-Fifth Season"</span>
      </p> 
      <p>
        Based on the classic old 1886 novel of "The Strange Case of Dr. Jekyll and Mr. Hyde", it tells 
        the story of a conflicted man with double personalities - one good, and one evil - who seeks 
        revenge for the evils that were inflicted on his father.  The musical has a beautifully haunting 
        score by Frank Wildhorn that featured the hit song "This Is The Moment" and the production made 
        Linda Eder (who was recently in concert in Hattiesburg) an international star.
      </p>
       <p>
         <a class='call_to_action' 
            href="<?php echo "$relative_path" ?>pages/casts.php?years=<?php echo "$years_numbers";?>#jekyll">
            Click here for our <em>JEKYLL &amp; HYDE</em> cast list.
          </a>
      </p>
    </div><!-- close of 'show' div -->
