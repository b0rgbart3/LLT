<?php 
#$showImage = $_SESSION['website_home']/data/shows/nn/images/xxxxxxx.xxx
$showImage = dirname($_SESSION['website_home'] . substr(__FILE__,strlen($_SESSION['root'])));
$showImage = $showImage . "/images/noises.jpg";
?>
 <div id="noises_off" class='show group'>
     <h1>Michael Frayn's</h1>
        <p class='spectacular'>SLAPSTICK SPECTACLE!!!</p>
        <h2>NOISES OFF</h2>
         <h4>
             March  8-9-10 at 730PM<br />
             March 11 at 2PM<br />
         </h4>
          <p class='reservation_line'>       
            <?php
              $temp=explode(".",basename(__FILE__));
              $the_show=$temp[0];  
    
              reservation_print_yes_no($the_show,$years_numbers,$date_array);
            ?>
         </p>  
         <h5>Directed by Sam Buchanan</h5>
     
         <?php echo "<img src=" . $showImage . " title=\"Noises Off\" alt=\"Noises Off\"/>"; ?>
                        
         <p>
             A deliciously hilarious show about a dizzy group of actors staging a new comedy - but they just can't 
             get their "act" together.  Mix in lots of slamming doors with offstage romance and intrigue, and you 
             have what's called the "funniest farce ever written."
         </p>
         <p>
             First you see them acting the show ON the stage, but then the set turns and you see what's going on 
             BEHIND the scenes - <i>and that's even crazier!</i> 
         </p>
<!--
         <br />    
         <a class='call_to_action' href="<?php echo "$relative_path" ?>pages/auditions.php">Click here for audition info.</a>
-->         
         <a class='call_to_action' 
            href="<?php echo "$relative_path" ?>pages/casts.php?years=<?php echo "$years_numbers";?>#noises_off">
            Click here for our <em>Noises Off</em> cast list.
         </a>
         <br /><br />
         <p>
         <?php 
           echo '<a href="' . dirname($showImage) . '/Noises_off_cast.jpg">'. "\n";
           echo '           <img style="float:left;width:230px;margin-right:20px;"' . "\n"; 
           echo '                src="' . dirname($showImage) . '/Noises_off_cast.jpg"' . "\n";
           echo '                title="Noises Off Cast" alt="Noises Off Cast">' . "\n";
           echo "         </a>\n";
         ?>
             
         </p>
         <p style="clear: both;">   
            <span class="caption">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;
                Click on Image to enlarge
            </span>
            <br /><br />
            The cast of LLT's <span class='showTitle'>NOISES OFF</span> in final rehearsals!
         </p>
     </div><!-- close of 'show' div -->
     