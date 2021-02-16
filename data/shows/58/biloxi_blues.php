<?php 
#$showImage = $_SESSION['website_home']/data/shows/nn/images/xxxxxxx.xxx
$showImage = dirname($_SESSION['website_home'] . substr(__FILE__,strlen($_SESSION['root'])));
$showImage = $showImage . '/images/biloxi.jpg';
?>

<div id="biloxi" class='show group'>
  <h1>Neil Simon’s</h1>
  <p class='spectacular'>
    <span style='font-weight:900; font-style:italic; font-size:18px; color: #33aaff;'>ASTONISHING</span>&nbsp;
    Classic Comedy!!!
  </p>

  <h2>BILOXI BLUES</h2>

  <h4>
    April  5 &amp; 6 at 730PM<br />
    April 7 at 2PM<br />
    April 12 &amp; 13 at 730PM<br />
    April 14 at 2PM<br />
  </h4>

  <p class='reservation_line'>       
     <?php
       $temp=explode(".",basename(__FILE__));
       $the_show=$temp[0];  
  
       reservation_print_yes_no($the_show,$years_numbers,$date_array);
     ?>
  </p>    

  <h5>Directed by Rick Youngblood</h5>

  <?php echo "<img src=" . $showImage . " title=\"Biloxi Blues\" alt=\"Biloxi Blues\"/>"; ?>
  

  <!--
  AUDITIONS  JANUARY 7-8 at 7PM.<br />
  <a class='call_to_action' href="<?php echo "$relative_path" ?>pages/auditions.php">CLICK HERE FOR AUDITION INFO</a>
  <br /><br />
  -->
  <p>
    Neil Simon, America’s favorite comedy writer, capped his long career with the three-play “Eugene Trilogy” 
    that was basically the true story of his own life.  Last year, we presented the first one, 
    <em>BRIGHTON BEACH MEMOIRS</em>, where his alter ego, Eugene Jerome, deals with his own coming-of-age in 
    1930s Brooklyn.
  </p>
  <p>
    <em>BILOXI BLUES</em> continues the story as we follow Eugene in 1943, when he gets drafted into the Army
    during World War II, and then heads off to boot camp in the muggy swamps of steamy Mississippi.  Eugene and 
    his fellow privates have to deal with a strange, but hard-as-nails platoon leader, and we see that Eugene
     has to grow up very <em>very</em> quickly.
  </p>
  <p>
    The highlight of the recruits’ time in Biloxi is their weekend leave when they get to hit the town for USO 
    dances with hopes to find some female entertainment.
  </p>
  <p>
    Even though the three plays are a continuing story, it’s not necessary <em>at all</em> to have seen the 
    first play to enjoy this one.  As one critic said, “It stands alone as some of Simon’s very best writing.”
    And another NYC critic professed that “Absolutely no one can spin a comic line like Mr. Simon.”
  </p>
  <p>
    The original 1985 NYC production swept up at awards season, winning the Tony Award, the Critics Circle and 
    the Drama Desk awards for Best Play that year.  A 1988 film version starred Matthew Broderick reprising 
    his Broadway role of Eugene, and Christopher Walken as the tough sergeant.
  </p>
  <p>
    It's a moving, but always funny, drama-comedy.  Some mature content and language, 
    so <em>not suitable for the little ones, but great for older teens and adults.</em>
  </p>
  <p>
    <a class='call_to_action'
       href="<?php echo "$relative_path" ?>pages/casts.php?years=<?php echo "$years_numbers";?>#biloxi_blues"> 
         Click here for <em>BILOXI BLUES</em> cast list.
    </a>
  </p>
  <p>
    <?php 
      echo "<!-- Cast Pic -->\n\n"; 
      echo '<a href="' . dirname($showImage) . '/biloxi_blues_cast.jpeg">'. "\n";
      echo '           <img style="float:left;width:280px;margin-left:20px;margin-right:10px;"' . "\n"; 
      echo '                src="' . dirname($showImage) . '/biloxi_blues_cast.jpeg"' . "\n";
      echo '                title="Biloxi Blues Cast" alt="Biloxi Blues Cast">' . "\n";
      echo "</a>\n";
    ?>   
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
  <p>
    <?php 
      echo "<!-- WDAM Interview -->\n\n"; 
      echo '<a href="http://www.wdam.com/video/2019/03/30/midday-interview-christy-liverett/" target="_blank" rel="noopener noreferrer nofollow">'. "\n";
      echo '           <img style="float:left;width:280px;margin-left:20px;margin-right:10px;"' . "\n"; 
      echo '                src="' . dirname($showImage) . '/WDAM_Christy_Liverett.png"' . "\n";
      echo '                title="WDAM Interview with Christy Liverett" alt="WDAM Interview with Christy Liverett">' . "\n";
      echo "</a>\n";
    ?>   
  </p>
  <p style="clear: both;">  
    <span class="caption">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;
      Click image to see our cast member Christy Liverett on Channel 7's MIDDAY
    </span>
  </p>
  <div style="clear:both;"></div>
</div><!-- close of 'show' div -->
