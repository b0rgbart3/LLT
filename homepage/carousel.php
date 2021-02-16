<!-- Javascript Stuff -->
 
<!-- You can load the jQuery library from the Google Content Network.
Probably better than from your own server. -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
 
<!-- Load the CloudCarousel JavaScript file -->
<script src="js/cloud-carousel.1.0.5.js"></script>
 
<script>
$(document).ready(function(){
                           
    // This initialises carousels on the container elements specified, in this case, carousel1.
    $("#carousel").CloudCarousel(      
        {           
            minScale: .8,
            maxScale: 2,
            xPos: 310,
            yPos: 100,
            xRadius: 200,
            yRadius: 50,
            buttonLeft: $("#left-but"),
            buttonRight: $("#right-but"),
            altBox: $("#alt-text"),
            titleBox: $("#title-text"),
            reflOpacity: .4,
            reflGap: 0,
            reflHeight: 80,
            autoRotate: 'right',
            autoRotateDelay: 4200,
            speed: .1,
            FPS: 12
        }
    );
});
 
</script>

<div class='masthead group' style="white-space:nowrap">
        <div class='mast-left-column'>
             <div class='logo'></div>
		     <div style='clear:both'></div>

        <!-- <br clear="all"> -->
            <nav>
                <a href="pages/tickets.php" class="mainnav">Ticket Info</a>
                <a href="pages/become_a_patron.php" class="mainnav">Become a Patron</a> 
                <a href="pages/location.php" class="mainnav">Our Location</a> 
                <a href="pages/auditions.php" class="mainnav">Auditions</a> 
                <a href="pages/patrons.php" class="mainnav">Our Gold Patrons</a> 
                <a href="#ContactInfo" class="mainnav">Contact Us</a>
                <img src='images/spacer.gif' style="width:40px;" height='3' alt="" title=""><br />
              <div class='brackettitle'><?php echo $_SESSION['how_many_years']?> Years Of:</div>
                <div class='bracket group'>
                <a href="pages/seasons.php" class="mainnav">Seasons</a>
                <a href="pages/casts.php" class="mainnav"> Cast Lists</a> 
                <a href="pages/boards.php" class="mainnav"> Board of Directors</a>
                <a href="photos/index.html" class="mainnav">Photos</a>
                <a href="pages/past.php" class="mainnav">Shows</a>
                <a href="pages/stories.php" class="mainnav">LLT/Arabian History</a></div>
            </nav>
        </div>

<div class="top-caption">
   In the Historic 1927 Downtown Arabian Theatre-- 5th Avenue -- Laurel, Mississippi
 </div> 

<div id= "carousel">
                    
<?php

# Load the Carousel data into memory 

include_once "functions/load_carousel.php";

###########################################
# --- Display the Carousel ---            #
# This doesn't have to change each season #
###########################################

###################################
# This Array contains the indexes #
# for the carousel data in the    #
# order we need to display them.  #
###################################

$display_order=array(0,4,3,2,1); # show numbers in carousel DISPLAY ORDER


for ($i=0;$i<5;$i++){
  $x=$i+1;
  echo<<<CAR
      
    <!-- Display Position {$x} ( Show #{$display_order[$i]}) -->

         <a href="{$links_array[$display_order[$i]]}">
            <img class = "cloudcarousel" 
                 src="{$image_file_array[$display_order[$i]]}" 
                 title="{$alt_text_array[$display_order[$i]]}"   
                 alt="{$alt_text_array[$display_order[$i]]}"   
                 style="width:195px;" />
         </a>

CAR;
}
?>
        </div>  <!-- Close of Carousel -->

<div class='season_script'></div>
</div> <!-- close of masthead -->
