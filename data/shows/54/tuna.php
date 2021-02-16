<?php 
#$showImage = $_SESSION['website_home']/data/shows/nn/images/xxxxxxx.xxx
$showImage = dirname($_SESSION['website_home'] . substr(__FILE__,strlen($_SESSION['root'])));
$showImage = $showImage . "/images/red-white-and-tuna.png";
?>
    <div id="red" class='show'>
        <a ></a>
        <img style="width:255px; float:right; margin-left:10px"
        <?php echo 'src="' . $showImage . '"'; ?> 
             alt="Red White &amp; Tuna Logo"
             title="Red White &amp; Tuna Logo"/>
        <br />   
        <h2>RED WHITE &amp; TUNA</h2>
        <h3>A Redneck Comedy!</h3>
        <p class='reservation_line'>       
          <?php
            $temp=explode(".",basename(__FILE__));
            $the_show=$temp[0];  
    
            reservation_print_yes_no($the_show,$years_numbers,$date_array);
          ?>
        </p>
        <br />
        <h4>APRIL 23 - 26, 2015</h4>
        <br />
        <h5>Directed by Catherine Nowicki</h5>

        <p>
            <span class='showTitle'>RED WHITE &amp; TUNA</span> is a side-splitting comedic tour-de-force for
            just two actors that play a total of 22 characters with the quickest costume changes you'll ever
            see on our Arabian Theatre stage.  It's one of four different plays all set in the redneck town
            of Tuna, Texas - the "third-smallest" town in the state - where "the Lion's Club is too
            liberal and Patsy Cline never dies!"
        </p>
        <p>
            We presented <span class='showTitle'>A TUNA CHRISTMAS</span> just a few years ago with Steven
            Nowicki and Wess Hughes speed acting thru all those characters, and these two LLT alumni return
            this coming season for us to see just what's up in Tuna as they all get ready for the annual
            4th of July celebrations.
            <br />
            <span class="blurb_highlight">Don't miss it! 2 ACTORS - 22 CHARACTERS - 222 BELLY LAUGHS!</span>
        </p>
        <p>
          <a class='call_to_action' 
             href="<?php echo "$relative_path" ?>pages/casts.php?years=<?php echo "$years_numbers";?>#tuna">
             Click here for our <em>Red White &amp; Tuna</em> cast list.
          </a>
        </p>
        
     </div><!-- close of 'show' div -->
