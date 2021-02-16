<?php 
  list ($link,$showImage) = find_image_file(__FILE__);
?>

<div id="fb-root"></div>
<script async defer crossorigin="anonymous"
                    src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v9.0"
					nonce="lloII656">
</script>

<div id="<?php echo $link;?>" class='show group'>
  <p class='spectacular'>
    A SOUTHERN-FRIED TRAILER PARK COMEDY
  </p>

  <h2>Doublewide, Texas</h2>
  <h4>
  January 22-23 &amp; January 29-30 at 730pm<br />
  January 24 &amp; January 31 at 2pm<br />
  </h4>

  <p class='reservation_line'>       
    <?php
    $temp=explode(".",basename(__FILE__));
    $the_show=$temp[0];  
  
    reservation_print_yes_no($the_show,$years_numbers,$date_array);
    ?>
    </p>
    <h5>
      Directed by Frankie Bennett
    </h5>
  
  <?php    
    if (array_key_exists($the_show,$date_array) and 
       (is_time_now_less_than($date_array[$the_show]['last_audition']->format('Y-m-d_H:i')))){
        echo<<<DW1
          <a href='{$relative_path}pages/auditions.php'>
            <div class='auditionsAnnouncement group'>
              <p class='auditionsTitle'>
                AUDITIONS
              </p>
              
              <p class='auditionsInfo'>Cast was set in 2020 </p>
          </div>
          </a>
DW1;
}
?>
  <?php echo "<img src=" . $showImage . " title=\"Doublewide, Texas\" alt=\"Doublewide, Texas\"/>"; ?>

  <p>
    The residents of the smallest trailer park in Texas – just four doublewides – are thrown for a loop
    when they find out the nearby town of Tugaloo is going to annex them!
  </p>
  <p>
    Mayhem escalates when they realize if they’re gonna have a snowball’s chance to stop it, they need to 
    <span style="font-weight:bold; font-style:italic;">secede from the state of Texas!</span>
  </p>
  <p>
    ‘Git’ on your Stetson and favorite cowboy boots, and come on over to the new town of Doublewide – where 
    life is double the fun, double the joy and just ‘a hoot and a holler’ to double the belly ‘laffs!’
    <span style="font-style:italic;">YEEEEEHAW!</span>
  </p>
  <p>
    Written by the same authors of LLT hits <span style="font-weight:bold; font-style:italic;">THE DIXIE SWIM CLUB</span>
    and <span style="font-weight:bold; font-style:italic;">REX’S EXES</span>, it’ll be another of our LLT audiences’ 
    favorite ‘Southern Comedies.’ 
  </p>

<?php 
  # if cast list exists, insert a link to the cast list

  find_cast_list($relative_path,$the_show,$years_numbers,"DOUBLEWIDE, TEXAS",(__FILE__));  
?>

  <p>
    <?php 
      echo "<!-- Cast Pic -->\n\n"; 
      echo '<a href="' . dirname($showImage) . '/doublewide_cast.png">'. "\n";
      echo '           <img style="float:left;width:280px;margin-left:20px;margin-right:10px;"' . "\n"; 
      echo '                src="' . dirname($showImage) . '/doublewide_cast.png"' . "\n";
      echo '                title="Doublewide, Texas Cast" alt="Doublewide, Texas Cast">' . "\n";
      echo "</a>\n";
    ?>   
  </p>  
  
  <p>
    <a class='call_to_action'
       href="https://www.hattiesburgamerican.com/picture-gallery/news/local/2021/01/15/laurel-little-theatre-through-years-photos/6579822002/"
       target="_blank" rel="noopener noreferrer nofollow">
       Click here for Article in the Hattiesburg American<br /><em>"PHOTOS: Laurel Little Theatre, marking 60 years, back in the spotlight"</em>
    </a>
  </p>
  <div style="clear:both;"></div>  
  <p style="clear: both;">  
    <span class="caption">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      Our <em>DOUBLEWIDE, TEXAS</em> Cast !!!<br><br>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      Top Row (L to R): Paula Pierce, Stacy Ruth, Breanne Dalton<br>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      Bottom Row (L to R): Catherine Nowicki, Rick Bennett, Christy Liverett,<br> 
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;
      Angela Watkins, Beau Blackledge, Randy Cooley<br><br>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;
      Click image to enlarge
    </span>
  </p>
  
  <div style="clear:both;"></div>
  <br />
  <div class="fb-video" 
       data-href="https://www.facebook.com/laurellittletheatre/videos/160717532511128/" 
       data-width="500" data-show-text="false">
	   <blockquote cite="https://developers.facebook.com/laurellittletheatre/videos/160717532511128/"
	              class="fb-xfbml-parse-ignore">
				  <a href="https://developers.facebook.com/laurellittletheatre/videos/160717532511128/">Doublewide, Texas</a>
				  <p>
					  With the re-opening of LLT, we wanted to let the characters of our newest production give you a
					  heads up of our covid safety precautions. Don&#039;t forget to reserve your seats (starting 1/15)
					  so that you can see the show!
				  </p>
				  Posted by <a href="https://www.facebook.com/laurellittletheatre/">Laurel Little Theatre</a>
				  on Thursday, January 14, 2021
	   </blockquote>
   </div>
   <br /><br />
</div><!-- close of 'show' div -->
