<?php 
#$showImage = $_SESSION['website_home']/data/shows/nn/images/xxxxxxx.xxx
$showImage = dirname($_SESSION['website_home'] . substr(__FILE__,strlen($_SESSION['root'])));
$showImage = $showImage . '/images/beauty.jpg';
?>

  <div id="beauty" class='show group'>
    <h1>Disney’s</h1>
    <h2>BEAUTY AND THE BEAST</h2>
    <h3>A little bit of music...and a LOT of magic!</h3>
    <h4>JULY 28-31  AUGUST 5-7, 2016</h4>
            
    <p class='reservation_line'>       
      <?php
        $temp=explode(".",basename(__FILE__));
        $the_show=$temp[0];  
 
        reservation_print_yes_no($the_show,$years_numbers,$date_array);
      ?>
    </p>  
            
    <h5>Directed by Lacy Cockrell</h5>
                     
    <?php echo "<img src=" . $showImage . ' class="floater" ' . 
                   ' title="Beauty and the Beast" alt="Beauty and the Beast">'; 
    ?>
    
    <p>
      Disney's big hit musical, the 9th longest-running show in Broadway history, comes to our LLT 
      stage in a <span style="font-weight:bold;">full-length</span> production with beautiful costumes, 
      outstanding sets and a huge cast.
    </p>

    <p>
      Based on a French fairy tale, <span class='showTitle'>BEAUTY AND THE BEAST</span> tells the 
      story of a prince who was transformed into a hideous beast as punishment for his cruel ways, 
      and an adventurous young woman named Belle, who must see him for what he really is, and fall
      in love with him so that he can become human again.
    </p>

          <p>
              The 1991 animated movie set a record as Disney's must successful, and it won a Golden Globe for 
              Best Film as well as two Academy Awards.
          </p>

          <p>
             Early next year, Disney will be releasing a brand new live-action feature movie with an all-star 
             cast including Emma Watson, Luke Evans, Emma Thompson, Ewan McGregor, Ian McKellen, Kevin Kline, 
             Josh Gad and Stanley Tucci.  Filming is already completed and it's being edited now for a March 
             2017 release.
         </p>

         <p>
            The Broadway version of the musical was Disney's first show in NYC and ran for 5,461 performances 
            over a 13 year stretch.  It’s the 9th longest running production in Broadway history.
        </p>

        <p>
           Come "Be Our Guest" and see Gaston and the Beast fight for the attention of the beautiful Belle in 
           this enchanting and exciting show.  All your favorite characters like Lumiere, Cogsworth, Mrs. Potts 
           and Chip will be there too.
       </p>
                     
       <p>Running for two weekends this summer, it’s sure to be one of our biggest season openers ever!</p>
                     
       <p>
          The LLT reservation line for <span class='showTitle'>BEAUTY AND THE BEAST</span> opens on July 21st 
          and will answer 24 hours a day at <?php print $_SESSION['llt_phone']?>.
      </p>
      <p>
        <a class='call_to_action' 
           href="<?php echo "$relative_path" ?>pages/casts.php?years=<?php echo "$years_numbers";?>#beauty">
           Click here for our <em>Beauty and The Beast</em> cast list.
         </a>
     </p>
    </div><!-- close of 'show' div -->
    