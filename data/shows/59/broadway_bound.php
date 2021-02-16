<?php
#$link=explode(".",basename(__FILE__))[0];
##$showImage = $_SESSION['website_home']/data/shows/nn/images/xxxxxxx.xxx
#$showImage = dirname($_SESSION['website_home'] . substr(__FILE__,strlen($_SESSION['root'])));
#$showImage = $showImage . '/images/broadway_bound.jpg';

list ($link,$showImage) = find_image_file(__FILE__);
?>

<div id="<?php echo $link;?>" class='show group'>
  <p class='spectacular'>
  THE CLASSIC NEIL SIMON COMEDY!
  </p>

  <h2>BROADWAY BOUND</h2>

  <h4>
    November 1-2 &amp; 8-9 at 730pm<br />
    November 3 &amp; 10 at 2pm<br />
  </h4>

  <p class='reservation_line'>       
    <?php
      $temp=explode(".",basename(__FILE__));
      $the_show=$temp[0];  
    
      reservation_print_yes_no($the_show,$years_numbers,$date_array);

      if (array_key_exists($the_show,$date_array) and 
         (is_time_now_less_than($date_array[$the_show]['last_audition']->format('Y-m-d_H:i')))){
        echo<<<BB1
        <br /><br />
        <a class="call_to_action" href="{$relative_path}pages/auditions.php"> 
          <span style="color: #ffc40c;">Click here for <span class='reshi'>BROADWAY BOUND</span> Audition Info.</span>
        </a>
BB1;
}
?>
  </p>
  <h5>
    Directed by Rick Youngblood
  </h5>

  <?php echo "<img src=" . $showImage ." title=\"Broadway Bound\" alt=\"Broadway Bound\"/>"; ?>

  <p>
    Neil Simon, America’s favorite comedy writer, capped his long career with the three play ‘Eugene Trilogy’ that was 
    basically the story of his own life.
  </p>
  <p>
    <span style="font-weight:bold; font-style:italic;">BRIGHTON BEACH MEMOIRS</span> dealt with Eugene’s coming-of-age
    in 1930s Brooklyn, and <span style="font-weight:bold; font-style:italic;">BILOXI BLUES</span> covered his time in 
    boot camp in the 1940s.
  </p>
  <p>
    Now, the story continues in the 1950s as Eugene, and his brother Stanley, begin their careers writing comedy - 
    first for radio, then in the early days of television and <span style="font-weight:bold; font-style:italic;">
    on to Broadway!</span>
  </p>
  <p>
    This play stands on its own as one of Simon’s best. Touching, funny and moving – this one’s not to be missed! 
  </p>

<?php 
  # if cast list exists, insert a link to the cast list

  find_cast_list($relative_path,$the_show,$years_numbers,"BROADWAY BOUND",(__FILE__));  
?>

    <p>
      <?php 
        echo "<!-- Cast Pic -->\n\n"; 
        echo '<a href="' . dirname($showImage) . '/broadway_bound_cast_photo.jpg">'. "\n";
        echo '           <img style="float:left;width:280px;margin-left:20px;margin-right:10px;"' . "\n"; 
        echo '                src="' . dirname($showImage) . '/broadway_bound_cast_photo.jpg"' . "\n";
        echo '                title="Broadway Bound Cast" alt="Broadway Bund Cast">' . "\n";
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
        echo '<a href="https://www.wdam.com/video/2019/10/26/midday-interview-christy-liverett/" target="_blank" rel="noopener noreferrer nofollow">'. "\n";
        echo '           <img style="float:left;width:280px;margin-left:20px;margin-right:10px;"' . "\n"; 
        echo '                src="' . dirname($showImage) . '/WDAM_Broadway_Bound_Christy_Liverett.png"' . "\n";
        echo '                title="WDAM Interview with Christy Liverett" alt="WDAM Interview with Christy Liverett">' . "\n";
        echo "</a>\n";
      ?>   
    </p>
    <p style="clear: both;">  
      <span class="caption">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;
        <em>BROADWAY BOUND</em> cast member Christy Liverett<br />
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;
        appears on Channel 7's MIDDAY. Click image to watch. 
      </span>
    </p>
    <div style="clear:both;"></div>
    
  </div><!-- close of 'show' div -->
 



