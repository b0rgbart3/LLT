<?php 
#$showImage = $_SESSION['website_home']/data/shows/nn/images/xxxxxxx.xxx
$showImage = dirname($_SESSION['website_home'] . substr(__FILE__,strlen($_SESSION['root'])));
$showImage = $showImage . "/images/rexsexs.jpg";
?>
 <div id="rexs_exes" class='show group'>
    <h1>Jessie Jones, Nick Hope &amp; Jamie Wooten’s</h1>
    <p class='spectacular'>
      <span style='font-weight:900; font-style:italic; font-size:18px; color:#ff9900'>AWESOME</span> 
      SOUTHERN COMEDY!!!
    </p>

    <h2>REX’S EXES</h2>
     
    <h4> 
        August 3 &amp; 4 at 730PM<br />
        August 5 at 2PM<br />
        August 10 &amp; 11 at 730PM<br />
        August 12 at 2PM<br />
    </h4>
    
    <p class='reservation_line'>  
      <?php 
      $temp=explode(".",basename(__FILE__));
      $the_show=$temp[0];  
 
      reservation_print_yes_no($the_show,$years_numbers,$date_array);
      ?>
    </p>    

    <h5>Directed by Will Hodges</h5>
     
    <?php echo "<img src=" . $showImage . " title=\"Rex's Exes\" alt=\"Rex's Exes\"/>"; ?>

<!--
    AUDITIONS JUNE 12-13 at 7PM.  
    <br />
    <a class='call_to_action' href="<?php echo "$relative_path" ?>pages/auditions.php">CLICK HERE FOR AUDITION INFO..</a>
    <br /><br />
-->
    <p>
      For our season opener, we’ve got a dooooozy for you this year with our annual ‘Southern’ comedy!  
    </p>
    <p>
      The Verdeen cousins in Sweetgum, Texas are a madcap trio that just can’t get their act together.  
    </p>
    <p>
      Cousin Gaynelle is turning 50 and not handling that fact well <em>AT ALL</em>.  Peaches, a mortuary 
      cosmetologist, wants to plan her a big surprise birthday party, but cousin Jimmie is too busy with her new 
      wedding gown boutique for “big-boned” gals (called The Wide Bride) - so she can’t hardly be bothered!
    </p>
    <p>
      Throw in the shenanigans of a supposedly ‘dead’ husband that pops up unexpectedly, 
      a Cajun bounty hunter that comes to town looking for another family member, a jilted bride 
      that holds the cousins hostage with a paintball gun, and finally, their bitter ol’ Aunt LaMerle - 
      whose entire life is centered on being accepted as a member of the Daughters of the Nation of Texas – 
      and you have a hysterical, side-splitting, Southern-fried farce that just might remind you of some 
      of your <em>own</em> family!
    </p>
    <p>
      Authors Jessie Jones, Nick Hope and Jamie Wooten also wrote the fun comedies <em>THE DIXIE SWIM CLUB</em>
      and <em>DEARLY DEPARTED</em> – both of which we presented at LLT in past years.  And, over the years, 
      they’ve also written for many movies and TV shows, including <em>THE GOLDEN GIRLS</em>.  
      All three of them are Southerners that write about the crazy people in our own lives. 
      <span style="font-weight:bold;"> Not for the young kids, but it’s a ferociously funny comedy for teens and up.</span>
    </p>
    <p>
      <a class='call_to_action' href="../pages/casts.php?years=20182019#rexs"> 
        Click here for <em>Rex's Exes</em> cast list.
      </a>  
    </p>
    <p>
      <?php 
        echo '<a href="' . dirname($showImage) . '/rexs_exes_full_cast.jpeg">'. "\n";
        echo '           <img style="float:left;width:230px;margin-left:20px;margin-right:10px;"' . "\n"; 
        echo '                src="' . dirname($showImage) . '/rexs_exes_full_cast.jpeg"' . "\n";
        echo '                title="Rex\'s Exes Cast" alt="Rex\'s Exes Cast">' . "\n";
        echo "         </a>\n";
      ?>   
         Here's REX...and his EXES...and the rest of 'em...in final rehearsals!<br /><br />
    </p>
    <p style="clear: both;">   
      <span class="caption">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;
        Click on Image to enlarge
      </span>
    </p>
    <div style="clear:both;"></div>
 </div><!-- close of 'show' div -->
 