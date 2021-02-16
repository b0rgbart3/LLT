<?php 
#$showImage = $_SESSION['website_home']/data/shows/nn/images/xxxxxxx.xxx
$showImage = dirname($_SESSION['website_home'] . substr(__FILE__,strlen($_SESSION['root'])));
$showImage = $showImage . "/images/arsenic.jpg";
?>
  <div id="arsenic" class='show'>
    <img style="width: 50%;"
      <?php echo 'src="' . $showImage . '"'; ?> 
             class="floater"
             alt="Arsenic Logo"
             title="Arsenic Logo"/>
    <br />
    <h2>Arsenic And Old Lace</h2>
    <h3>Classic Comedy!</h3>
    <br />
    <h4>December 10 - 13, 2015</h4>
    <p class='reservation_line'>       
      <?php
        $temp=explode(".",basename(__FILE__));
        $the_show=$temp[0];  
 
        reservation_print_yes_no($the_show,$years_numbers,$date_array);
      ?>
    </p>  
    <br />
    <h5>Director - Lacy Cockrell</h5>
    <p>
      It's the classic 1941 Broadway hit that ran for over three years and opened with one reviewer 
      saying "it was so funny that none of us will ever forget it."
    </p>
    <p>
      Two dotty old-maid spinster aunts have decided that they'll just go on and put the lonely old single 
      men looking for a room to rent from them out of their misery.  They've already murdered a dozen of 
      them and buried the bodies in the basement.  And how did they knock them off so easily?  Easy - just 
      get them to drink some of their home-brewed elderberry wine that they've laced with arsenic, strychnine 
      and "just a pinch of cyanide."  A lethal concoction to be sure - but don't worry - 
      <span style="font-weight:bold;font-style:italic;">we won't be serving it at intermission!</span>
    </p>
    <p>
      The 1944 film version starring Cary Grant and Peter Lorre was a huge hit and is still one of the most 
      successful comedies of that era which the New York Times called "great macabre fun."  It's a classic 
      <span class='chills'>CHILLER</span> comedy that will keep your laughing as you see just what those 
      two crazy ol' ladies get up to next!
      </p>
      <p>
        The LLT reservation line for <span class='showTitle'>ARSENIC AND OLD LACE</span> will open December 3rd and 
        answers 24 hours a day at <?php print $_SESSION['llt_phone']?>.
      </p>
       <p>
         <a class='call_to_action' 
            href="<?php echo "$relative_path" ?>pages/casts.php?years=<?php echo "$years_numbers";?>#arsenic">
            Click here for our <em>Arsenic and Old Lace</em> cast list.
          </a>
      </p>
    </div><!-- close of 'show' div -->
