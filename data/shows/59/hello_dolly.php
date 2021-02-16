<?php 
#$link=explode(".",basename(__FILE__))[0];
##$showImage = $_SESSION['website_home']/data/shows/nn/images/xxxxxxx.xxx
#$showImage = dirname($_SESSION['website_home'] . substr(__FILE__,strlen($_SESSION['root'])));
#$showImage = $showImage . '/images/hello_dolly.jpg';

  list ($link,$showImage) = find_image_file(__FILE__);
?>

<div id="<?php echo $link;?>" class='show group'>
  <p class='spectacular'>
   THE TONY WINNING BEST MUSICAL!
  </p>

  <h2>HELLO DOLLY!</h2>

  <h4>
    August 2-3 &amp; 9-10 at 730pm<br />
    August 4 &amp; 11 at 2pm<br />
  </h4>

  <p class='reservation_line'>       
    <?php
    $temp=explode(".",basename(__FILE__));
    $the_show=$temp[0];  
  
    reservation_print_yes_no($the_show,$years_numbers,$date_array);

    if (array_key_exists($the_show,$date_array) and 
       (is_time_now_less_than($date_array[$the_show]['last_audition']->format('Y-m-d_H:i')))){
        echo<<<HD1
        <br /><br />
        <a class="call_to_action" href="{$relative_path}pages/auditions.php"> 
          <span style="color: #ffc40c;">Click here for <span class='reshi'>HELLO DOLLY</span> Audition Info.</span>
        </a>
HD1;
}
?>
  </p>
  
  <h5>
    Directed by Will Hodges<br />
    Musical Director - Michelle Howells<br />
    Choreographer - Coco Caldwell
  </h5>

  <?php echo "<img src=" . $showImage . " title=\"Hello Dolly\" alt=\"Hello Dolly\"/>"; ?>

  <p>
   Dolly Levi is a ‘matchmaker’ who meddles hilariously in everyone’s lives – and now, she’s on a hunt for a 
   match for <span style='font-style:italic; font-weight:bold'> herself!</span> She’s got her eyes on Horace 
   Vandergelder – the ‘well-known half-a-millionaire.’ 
  </p>
  <p>
    ‘Dolly’ made Carol Channing a star way back in the 60s, and last year, Bette Midler broke records with a sold-out 
    NYC revival.
  </p>
  <p>
    When it opened In New York in 1964, it won a record-high ten Tony Awards, including Best Musical. It also 
    became one of the longest running shows ever on Broadway. 
  </p>
  <p>
    Featuring a huge cast of all ages, it’s sure to be a sellout family favorite to kick off LLT’s brand new 
    and exciting 59th Season! 
  </p>

<?php 
  # if cast list exists, insert a link to the cast list

  find_cast_list($relative_path,$the_show,$years_numbers,"HELLO DOLLY",(__FILE__));  
?>

  <div style="clear:both;"></div>
  <p>
    <?php 
      echo "<!-- WDAM Interview -->\n\n"; 
      echo '<a href="https://www.wdam.com/video/2019/07/29/midday-interview-hello-dolly/" target="_blank" rel="noopener noreferrer nofollow">'. "\n";
      echo '           <img style="float:left;width:280px;margin-left:20px;margin-right:10px;"' . "\n"; 
      echo '                src="' . dirname($showImage) . '/Missy_WDAM_Hello_Dolly_Interview.png"' . "\n";
      echo '                title="WDAM Interview for Hello Dolly" alt="WDAM Interview for Hello Dolly">' . "\n";
      echo "</a>\n";
    ?>   
  </p>
  <p style="clear: both;">  
    <span class="caption">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      Missy Sanderson is on Channel 7's MIDDAY <br />
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;
      promoting <em>HELLO DOLLY</em><br /><br />
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;
      Click image to see the interview
    </span>
  </p>
  <div style="clear:both;"></div>
</div><!-- close of 'show' div -->







