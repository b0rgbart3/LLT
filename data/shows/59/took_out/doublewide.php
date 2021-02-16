<?php 
#$link=explode(".",basename(__FILE__))[0];
##$showImage = $_SESSION['website_home']/data/shows/nn/images/xxxxxxx.xxx
#$showImage = dirname($_SESSION['website_home'] . substr(__FILE__,strlen($_SESSION['root'])));
#$showImage = $showImage . '/images/doublewide.jpg';

list ($link,$showImage) = find_image_file(__FILE__);
?>

<div id="<?php echo $link;?>" class='show group'>
  <p class='spectacular'>
    A SOUTHERN-FRIED<br>
    TRAILER PARK COMEDY
  </p>

  <h2>DOUBLEWIDE, TEXAS</h2>
  <h4>
<!--
    March 27-28 &amp; April 3-4 at 730pm<br />
    March 29 &amp; April 5 at 2pm<br />
-->
   <span style="color:#ffc832;font-weight:bold">POSTPONED<br />Will Be Rescheduled<br />In A Few Months</span>
  <br />
  </h4>

  <p class='reservation_line'>       
    <?php
    $temp=explode(".",basename(__FILE__));
    $the_show=$temp[0];  
  
#    reservation_print_yes_no($the_show,$years_numbers,$date_array);

    if (array_key_exists($the_show,$date_array) and 
       (is_time_now_less_than($date_array[$the_show]['last_audition']->format('Y-m-d_H:i')))){
        echo<<<DW1
          <br /><br />
          <a class="call_to_action" href="{$relative_path}pages/auditions.php"> 
            <span style="color: #ffc40c;">Click here for <span class='reshi'>DOUBLEWIDE, TEXAS</span> Audition Info.</span>
          </a>
DW1;
}
?>
  </p>
  <h5>
    Directed by Frankie Bennett
  </h5>
  
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
  <p>
    <a class='call_to_action'
    href="<?php echo "$relative_path" ?>pages/casts.php?years=<?php echo "$years_numbers#$the_show";?>"> 
    Click here for <em>DOUBLEWIDE, TEXAS</em> cast list.
      </a>
  </p>
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
  <div style="clear:both;"></div>  
  <p style="clear: both;">  
    <span class="caption">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      Our <em>DOUBLEWIDE, TEXAS</em> Cast !!!<br /><br />
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      Top Row (L to R): Paula Pierce, Stacy Ruth, Breanne Dalton<br />
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      Bottom Row (L to R): Catherine Nowicki, Rick Bennett, Christy Liverett,<br /> 
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;
      Angela Watkins, Beau Blackledge, Randy Cooley<br /><br />
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;
      Click image to enlarge
    </span>
  </p>
  <div style="clear:both;"></div>
</div><!-- close of 'show' div -->
