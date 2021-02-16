<?php 
  list ($link,$showImage) = find_image_file(__FILE__);
?>

<div id="<?php echo $link;?>" class='show group'>
  <p class='spectacular'>
    SCRUMDIDDLYUMPTIOUS FAMILY FAVORITE!
  </p>

  <h2>WILLY WONKA</h2>
  <h4>
    June 3-4 at 7:30pm<br />
    June 5 at 2pm and 7:30pm<br />
    June 6 at 2pm
  </h4>

  <p class='reservation_line'>       
    <?php
    $temp=explode(".",basename(__FILE__));
    $the_show=$temp[0];  
  
    reservation_print_yes_no($the_show,$years_numbers,$date_array);

    if (array_key_exists($the_show,$date_array) and 
       (is_time_now_less_than($date_array[$the_show]['last_audition']->format('Y-m-d_H:i')))){
        echo<<<DW1
          <br /><br />
          <a class="call_to_action" href="{$relative_path}pages/auditions.php">
            <span style="color: #ffc40c;">Click here for <span class='reshi'>WILLY WONKA</span> Audition Info.</span>
          </a>
DW1;
}
?>
</p>
  <h5>
    Directed by Rebecca Green
  </h5><br>
  
  <?php echo "<img src=" . $showImage . " title=\"WILLY WONKA\" alt=\"WILLY WONKA\"/>"; ?>

  <p>
    Lovable Charlie Bucket and four other kids find lucky ‘Golden Tickets’ that win them a lifetime of 
    candy – and a tour of Willy Wonka’s magical Chocolate Factory.
  </p>
  <p>
    Wonka is secretly looking for an heir to take over his factory, and Charlie might be just the ‘ticket.’
  </p>
  <p>
    Featuring famous songs from the movie like <span style="font-style:italic;">“The Candy Man”</span>
    and <span style="font-style:italic;">“Pure Imagination”</span> in a whole new memorable score –  
    <span style="font-style:italic;">as well as the bright orange Oompa Loompas</span> 
    - it’s guaranteed to delight everyone’s sweet tooth!
  </p>
  <p>
    This production is our annual Kids’ Camp - a whole week of rehearsals and workshops that begins late May 27th, 
    2021 and ends with performances just days later from 100 lovable young actors that
    <span style="font-style:italic; font-weight:bold;">will AMAZE you!</span>
  </p>

<?php 
  # if cast list exists, insert a link to the cast list

  find_cast_list($relative_path,$the_show,$years_numbers,"WILLY WONKA",(__FILE__));  
?>

  <div style="clear:both;"></div>
</div><!-- close of 'show' div -->
