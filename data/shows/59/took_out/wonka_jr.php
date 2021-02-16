<?php
#$link=explode(".",basename(__FILE__))[0];
##$showImage = $_SESSION['website_home']/data/shows/nn/images/xxxxxxx.xxx
#$showImage = dirname($_SESSION['website_home'] . substr(__FILE__,strlen($_SESSION['root'])));
#$showImage = $showImage . '/images/wonka_jr.jpg';

list ($link,$showImage) = find_image_file(__FILE__);
?>

<div id="<?php echo $link;?>" class='show group'>
  <p class='spectacular'>
    SCRUMDIDDLYUMPTIOUS FAMILY FAVORITE!
  </p>
  <h2>WILLY WONKA</h2>
  <h4>
    <span style="color:#ffc832;font-weight:bold">
      POSTPONED<br />
      Until May 2021
    </span>
  </h4>

  <p class='reservation_line'>       
  <?php
    $temp=explode(".",basename(__FILE__));
    $the_show=$temp[0];  
 
     # reservation_print_yes_no($the_show,$years_numbers,$date_array);

     if (array_key_exists($the_show,$date_array) and 
        (is_time_now_less_than($date_array[$the_show]['last_audition']->format('Y-m-d_H:i')))){
      echo<<<WW1
      <br /><br />
    <!-- <a class="call_to_action" href="{$relative_path}pages/auditions.php"> -->
        <span style="color: #ffc40c;">Camp registration begins <span class='reshi'>March 2020</span><br />
          Make sure you’re on our newsletter mail list.
        </span>
    <!--  </a> -->
WW1;
}
?>
  </p>

  <h5>
    Directed by Katelyn Bryant
  </h5>
  
  <?php echo "<img src=" . $showImage . " title=\"Willy Wonka Jr.\" alt=\"Willy Wonka Jr.\"/>"; ?>

  <p>
    Lovable Charlie Bucket and four other kids find lucky ‘Golden Tickets’ that win them a lifetime of candy – 
    and a tour of Willy Wonka’s magical Chocolate Factory.
  </p>
  <p>
    Wonka is secretly looking for an heir to take over his factory, and Charlie might be just the
    <span style='font-style:italic;'>‘ticket.’</span>
  </p>
  <p>
    Featuring famous songs from the movie like “The Candy Man” and “Pure Imagination” in a whole new memorable score – 
    <i>as well as the bright orange Oompa Loompas</i> - it’s guaranteed to delight everyone’s sweet tooth!
  </p>
  <p>
    This production is our annual Kids’ Camp - a whole week of rehearsals and workshops that begins late May 2021
    and ends with performances just days later from 100 lovable young actors that 
    <span style='font-style:italic; font-weight:bold;'>will AMAZE you!</span>
  </p>
<!--
  <p>
    <a class='call_to_action'
    href="<?php echo "$relative_path" ?>pages/casts.php?years=<?php echo "$years_numbers#$the_show";?>"> 
    Click here for <em>WILLY WONKA</em> cast list.
      </a>
  </p>
-->
  <div style="clear:both;"></div>  
</div>
