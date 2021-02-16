<?php 
  list ($link,$showImage) = find_image_file(__FILE__);
?>

<div id="<?php echo $link;?>" class='show group'>
  <p class='spectacular'>
    A MISSISSIPPI CLASSIC !
  </p>

  <h2>WHY I LIVE AT THE P.O.</h2>
  <h4>
    February 26-27 &amp; March 5-6 at 730pm<br />
    February 28 &amp; March 7 at 2pm<br />
  </h4>

  <p class='reservation_line'>       
    <?php
    $temp=explode(".",basename(__FILE__));
    $the_show=$temp[0];  
  
    reservation_print_yes_no($the_show,$years_numbers,$date_array);
    ?>
  </p>
  <?php    
    if (array_key_exists($the_show,$date_array) and 
       (is_time_now_less_than($date_array[$the_show]['last_audition']->format('Y-m-d_H:i')))){
        echo<<<DW1
          <a href='{$relative_path}pages/auditions.php'>
            <div class='auditionsAnnouncement group'>
              <p class='auditionsTitle'>
                AUDITIONS
              </p>
              
              <p class='auditionsInfo'>No Casting Call Needed</p>
          </div>
          </a>
DW1;
}
?>
  <h5>
    Directed by Rick Youngblood
  </h5>
  
  <?php echo "<img src=" . $showImage . " title=\"WHY I LIVE AT THE P.O.\" alt=\"WHY I LIVE AT THE P.O.\"/>"; ?>

  <p>
    In 1941, Mississippi author Eudora Welty wrote a short story that became one of her most popular pieces.  
    It was inspired by a photo that Welty had taken of a woman ironing clothes in the back of a small Southern post office.
    <!-- <span style="font-weight:bold; font-style:italic;">WHY I LIVE AT THE P.O.</span> -->
  </p>
  <p>
    It’s a vivid one-woman show of ‘Sister’ – the postmistress of the teeny tiny post office in ‘China Grove, Mississippi’ - 
    telling the story of her very <span style="font-weight:bold;font-style:italic;">very</span> Southern family:
    Papa-Daddy, Stella-Rondo and Uncle Rondo.  She explains all about her trials and tribulations with her mad-capped folks.
  </p>
  <p>
    LLT alumni Christy Liverett will be playing ‘Sister’ for us – and she’s already started learning all those lines so
    she’ll be ready for the funny one-act one-hour long winter performance.
  </p>

<?php 
  # if cast list exists, insert a link to the cast list

  find_cast_list($relative_path,$the_show,$years_numbers,"WHY I LIVE AT THE P.O.",(__FILE__));  
?>

  <div style="clear:both;"></div>
</div><!-- close of 'show' div -->
