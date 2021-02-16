<?php 
#$showImage = $_SESSION['website_home']/data/shows/nn/images/xxxxxxx.xxx
$showImage = dirname($_SESSION['website_home'] . substr(__FILE__,strlen($_SESSION['root'])));
$showImage = $showImage . "/images/christmas_story.jpg";
?>

<div id="christmas_story" class='show group'>
  <h1>Jean Shepherd, Joseph Robinette, Benj Pasek &amp; Justin Paul’s</h1>
  <p class='spectacular'>
    <span style='font-weight:900; font-style:italic; font-size:18px; color:#00dd55;'>AMAZING</span> 
    NEW MUSICAL!!!
  </p>

  <h2>A Christmas Story</h2>

  <h4>
    November 9 &amp; 10 at 730PM<br />
    November 11 at 2pm<br />
    November 16 &amp; 17 at 730PM<br />
    November 18 at 2pm
  </h4>

  <p class='reservation_line'>       
    <?php
      $temp=explode(".",basename(__FILE__));
      $the_show=$temp[0];  
  
      reservation_print_yes_no($the_show,$years_numbers,$date_array);
    ?>
  </p>    

  <h5>Directed by Wess Hughes</h5>

  <?php echo "<img src=" . $showImage . " title=\"A Christmas Story\" alt=\"A Chistmas Story\"/>"; ?>
  

<!--
  AUDITIONS SEPTEMBER 10-11 at 7PM.<br />
  <a class='call_to_action' href="<?php echo "$relative_path" ?>pages/auditions.php">CLICK HERE FOR AUDITION INFO..</a>
  <br /><br />
-->
  <p>
    It’s a <em>brand new</em> stage musical based on the hit holiday movie that gets a 24 hour “round-the-clock” 
    television marathon on TBS every December.  That beloved original movie starred Melinda Dillon, 
    Darren McGavin and Peter Billingsley.
  </p>
  <p>
    Nine-year-old Ralphie wants nothing more for Christmas than an official Red Ryder BB Gun – but it 
    seems like everyone in his corner of the world just tells him “you’ll shoot your eye out!”
  </p>
  <p>
    Before Christmas morning arrives, he has to navigate a grumpy department store Santa, an infamous leg lamp, 
    the ugliest pink bunny pajamas, and a “triple-dog-dare-ya” to lick a frozen flagpole.
  </p>
  <p>
    Written by Joseph Robinette, and based on Jean Shepherd’s original radio-story, the score is by Benj Pasek 
    and Justin Paul - the hot new song-writing team that won both the Oscar and Golden Globe for Best Song 
    last year for <em>LA LA LAND</em>, and then just months later, won the Tony Award for Best Musical 
    for <em>DEAR EVAN HANSEN</em>.
  </p>
  <p>
    <em>A CHRISTMAS STORY-THE MUSICAL</em> was also a critical success for them, receiving 11 Tony Award, Critics 
    Circle Award and Drama Desk Award nominations.  Critics called it “A true Christmas gift,” “A charming triumph 
    infused with utter joy,” and “The best dang musical I’ve seen in years!”
  </p>
  <p>
    The score features some truly beautiful and sweet ballads along with huge production numbers and tons of laughs.  
    <span style="font-style:italic;">Who could resist a big chorus of dancing leg lamps???!!!</span>
  </p>
  <p>
    LLT has secured the right to be one of the <em>very first</em> community theatres in the South to present 
    what’s sure to be a sell-out family favorite for all ages!
  </p>
  <p>
    <a class='call_to_action' href="<?php echo $relative_path ?>pages/casts.php?years=<?php echo $years_numbers;?>#christmas_story">Click here for <em>CHRISTMAS STORY</em> cast list.
    </a>
  </p>
  <p> 
    <?php 
      echo "<!-- Bunny 1 -->\n";
      echo '<a href="' . dirname($showImage) . '/bunny1.jpg">'. "\n";
      echo '           <img style="float:left;width:140px;margin-left:20px;margin-right:10px;"' . "\n"; 
      echo '                src="' . dirname($showImage) . '/bunny1_small.jpg"' . "\n";
      echo '                title="Bunny1" alt="Bunny1">' . "\n";
      echo "         </a>\n\n";
      echo "<!-- Bunny 2 -->\n";
      echo '<a href="' . dirname($showImage) . '/bunny2.jpg">'. "\n";
      echo '           <img style="float:left;width:130px;margin-left:20px;margin-right:10px;"' . "\n"; 
      echo '                src="' . dirname($showImage) . '/bunny2_small.jpg"' . "\n";
      echo '                title="Bunny2" alt="Bunny2">' . "\n";
      echo "         </a>\n";
    ?>   
    LLT cast members Jay Baggett and Sammie Mitchell tested our our audience photo-shoot bunny.  
    They "double-dog dare ya to come see the show!".<br /><br />
    You can take your own bunny-pic at the Arabian - wouldn't that make for a great 
    Christmas card this year!!!!!<br />
  </p>
  <p style="clear: both;">   
    <span class="caption">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;
      Click on Images to enlarge
    </span>
  </p>
  <p> 
    <?php 
      echo "<!-- Cast Pic 1 -->\n";
      echo '<a href="' . dirname($showImage) . '/christmas_story_cast.jpg">'. "\n";
      echo '           <img style="float:left;width:280px;margin-left:20px;margin-right:10px;"' . "\n"; 
      echo '                src="' . dirname($showImage) . '/christmas_story_cast.jpg"' . "\n";
      echo '                title="A Christmas Story Cast" alt="A Christmas Story Cast">' . "\n";
      echo "         </a>\n\n";
    ?>
    <!-- Text would appear along side - to the right -->
    <br /><br /><br />   
    The <em>CHRISTMAS STORY</em> cast sends Season's Greetings<br />
  </p>
  <p style="clear: both;">   
    <span class="caption">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;
      Click on Image to enlarge
    </span>
  </p>
  <p> 
    <?php 
      echo "<!-- Cast Pic 2 -->\n";
      echo '<a href="' . dirname($showImage) . '/xmas_story_leg_lamps.jpeg">'. "\n";
      echo '           <img style="float:left;width:280px;margin-left:20px;margin-right:10px;"' . "\n"; 
      echo '                src="' . dirname($showImage) . '/xmas_story_leg_lamps.jpeg"' . "\n";
      echo '                title="Cast with Leg Lamp" alt="Cast with Leg Lamp">' . "\n";
      echo "         </a>\n\n";
    ?>
    <!-- Text would appear along side - to the right -->
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
