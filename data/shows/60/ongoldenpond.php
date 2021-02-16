<?php 
  list ($link,$showImage) = find_image_file(__FILE__);
?>

<div id="<?php echo $link;?>" class='show group'>
  <p class='spectacular'>
      A LOVE STORY FOR <span style="font-style:italic;font-weight:bold;">ALL</span> AGES
  </p>

  <h2>ON GOLDEN POND</h2>
  <h4>
    April 16-17 &amp; April 23-24 at 730pm<br />
    April 18 &amp; April 25 at 2pm<br />
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
              
              <p class='auditionsInfo'>February 1st & 2nd at 7pm at the Arabian</p>  
          </div>
          </a>
DW1;
}
?>
  <h5>
    Directed by Frankie Bennett
  </h5>

  <?php echo "<img src=" . $showImage . " title=\"ON GOLDEN POND\" alt=\"ON GOLDEN POND\"/>"; ?>
  <p>
    A love story of an aged couple – cantankerous tart-tongued retiree Norman Thayer, and his supportive
    wife Ethel – living out their golden years as they spend summers at their peaceful Maine vacation 
    home on the shores of Golden Pond.
    <!-- <span style="font-weight:bold; font-style:italic;">ON GOLDEN POND</span> in the HTML -->
  </p>
  <p>
    Their daughter brings her wise-cracking ‘too cool’ soon-to-be stepson to stay with them – and the
    comedy, the teen angst and the drama all begins.
  </p>
  <p>
    LLT faves Catherine & Steven Nowicki will play the Thayers.  All other roles will be open at auditions on 
    February 1st and 2nd.
  </p>
  <p>
    The 1979 Broadway production won both Tony and Drama Desk awards.  The well-received 1981 movie version
    with Henry Fonda, Katherine Hepburn and Jane Fonda garnered ten Academy Award nominations and three Oscar wins.
  </p>
  <p>
    Sweet, funny, affectionate and moving – it’s not to be missed!
  </p>

<?php 
  # if cast list exists, insert a link to the cast list

  find_cast_list($relative_path,$the_show,$years_numbers,"ON GOLDEN POND",(__FILE__));  
?>

  <div style="clear:both;"></div>
</div><!-- close of 'show' div -->
