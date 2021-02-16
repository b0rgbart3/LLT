<?php 
#$showImage = $_SESSION['website_home']/data/shows/nn/images/xxxxxxx.xxx
$showImage = dirname($_SESSION['website_home'] . substr(__FILE__,strlen($_SESSION['root'])));
$showImage = $showImage . '/images/annie.jpg';
?>

<div id="annie" class='show group'>
  <h1>Martin Charnin, Charles Strouse and Thomas Meehan’s</h1>

  <p class='spectacular'>
    <span style='font-weight:900; font-style:italic; font-size:18px; color:#ffb72b;'>ASTOUNDING</span>
    Family Favorite
  </p>

  <h2>ANNIE, JR</h2>

  <h4>
    May 30 &amp; 31 at 730PM<br />
    June 1 at both 2pm and 730pm<br />
    June 2 at 2pm
  </h4>

  <p class='reservation_line'>       
       <?php
         $temp=explode(".",basename(__FILE__));
         $the_show=$temp[0];  
    
         reservation_print_yes_no($the_show,$years_numbers,$date_array);
       ?>
  </p>    
  
  <h5>Directed by Rebecca Green</h5>

  <?php echo "<img src=" . $showImage . " title=\"Annie Jr.\" alt=\"Annie Jr.\"/>"; ?>

<!--
  AUDITIONS  APRIL 22-23, 2019<br />

  <a class='call_to_action' href="<?php echo "$relative_path" ?>pages/auditions.php">CLICK HERE FOR AUDITION INFO</a>
  <br /><br />
  <p>  
      <a class='call_to_action' href="https://form.jotform.com/90547055095157" target="_blank" rel="noopener noreferrer nofollow" > 
      <span style="color:#7efa0b;"> 
        Registration is now open and runs through April 15th 
        (unless all 100 spots are filled in early as usual)<br />
        <span style="color:#ffc832;font-weight:bold">Camp is now <?php echo $_SESSION['camp_percent'];?>% FULL</span><br />
        CLICK HERE FOR THE ONLINE<br /> 
        SIGN-UP FORM
      </span>
    </a>
    <br /><br />
    If you're not already on our mail list, send a request to
    <a  href="mailto:<?php echo $_SESSION['llt_email']?>?subject=Add%20me%20to%20LLT's%20mailing%20list&amp;body=Hi%0d%0a%0d%0aPlease%20add%20me%20to%20LLT's%20mailing%20list.%0d%0a%0d%0aThank%20you.%0d%0"><?php echo $_SESSION['llt_email']?>
    </a>
    to be included.
 </p> 
-->
  <p>
    We’ve presented the full stage musical <em>ANNIE</em> a few times, but this will be our very 
    <span style="font-style:italic">first</span> production of 
    <em>ANNIE, JR.</em>  It’s based on the hit comic strip, <em>Little Orphan Annie</em> – and tells 
    the story of a little redhead kid filled with pluck and positivity – along with the tough billionaire 
    Oliver Warbucks, mean ol’ orphan matron, Miss Hannigan, a lovable mutt called Sandy, and a cast of 100 kids!
  </p>
  <p>
    Set in the depression era of the 1930s, when some “good news” was something everyone needed a little taste of, 
    Annie taught everyone that
    <em>“the sun’ll come out, tomorrow – bet your bottom dollar that tomorrow, there’ll be sun!”</em>
  </p>
  <p>
    Written by Thomas Meehan, Charles Strouse and Martin Charnin, <em>ANNIE</em> won seven Tony Awards,
    including Best Musical, when the show opened in NYC in 1977.  It’s continually been one of the most 
    produced stage shows across the world every year.
  </p>
  <p>
    Three movie versions over the years have featured Carol Burnett, Tim Curry, Albert Finney, Bernadette 
    Peters and Aileen Quinn (in 1982, getting two Oscar nominations), then Kathy Bates, Alan Cumming, Kristen 
    Chenoweth and Andrea McArdle (in 1999, winning two Emmy Awards), and most recently, in 2014, a third movie 
    version that starred Jamie Foxx, Bobby Cannavale, Cameron Diaz and Quvenzhane Wallis, and received two Golden 
    Globe nominations.
  </p>
  <p>
    Our annual summer Kids’ Camp production features a week of workshops and rehearsals for the 100 kids 
    that starts May 23rd, wrapping up the following weekend with some memorable performances where 
    <em>these little actors will move us all to  laughter and tears as they sing their hearts out!!!</em>
  </p>
  <p>
       <a class='call_to_action'
         href="<?php echo "$relative_path" ?>pages/casts.php?years=<?php echo "$years_numbers";?>#annie_jr"> 
         Click here for <em>ANNIE JR</em> cast list.
      </a>
  </p>
  <div style="clear:both;"></div>
  <p>
    <?php 
      echo "<!-- WDAM Interview -->\n\n"; 
      echo '<a href="https://www.wdam.com/video/2019/05/28/midday-interview-annie-jr-2/" target="_blank" rel="noopener noreferrer nofollow">'. "\n";
      echo '           <img style="float:left;width:280px;margin-left:20px;margin-right:10px;"' . "\n"; 
      echo '                src="' . dirname($showImage) . '/WDAM_annie_interview.png"' . "\n";
      echo '                title="WDAM Interview for Kids\' Camp Annie Jr." alt="WDAM Interview for Kids\' Camp Annie Jr.">' . "\n";
      echo "</a>\n";
    ?>   
  </p>
  <p style="clear: both;">  
    <span class="caption">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <em>ANNIE</em> cast members Keeghan Messer and Jacob Scott<br />
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;
      were guests on Channel 7's MIDDAY.<br /><br />
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;
      Click image to see their interview
    </span>
  </p>
  <div style="clear:both;"></div>
</div><!-- close of 'show' div -->







