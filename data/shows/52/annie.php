<?php 
#$showImage = $_SESSION['website_home']/data/shows/nn/images/xxxxxxx.xxx
$showImage = dirname($_SESSION['website_home'] . substr(__FILE__,strlen($_SESSION['root'])));
$showImage = $showImage . "/images/annie.png";
?>
    <div id="annie" class='show'>
        <img style="float:right;width:260px;margin-left:10px;"
        <?php echo 'src="' . $showImage . '"'; ?> 
             alt="Annie Logo"
             title="Annie Logo"/>

         <br />
         <h2>ANNIE</h2>
         <p style=text-align:center;>
                 Tony Award Winner!<br />
                 1977's Best Musical
        </p>
        <h4>October 4 - 7 and 12 - 14, 2012</h4>
        <br />
        <h5>Directed by Lacy Cockrell</h5>
				
        <p>
            <span style="font-style:italic;">Leapin' Lizards!!!  The sun'll come out...tomorrow!!!</span> 
            The musical <span class='showTitle'>ANNIE</span> opened on Broadway exactly 35 years ago and swept all the 
            Tony Awards that year and entertained audiences for 2,377 performances.  To celebrate Annie's birthday, a 
            brand new revival of the show will open in NYC this fall, and LLT has secured the rights to also bring her 
            back to our own stage as well--just ONE DAY after it opens on Broadway!
        </p>
        <p>
	        Our previous productions in 1991 and 2005 sold out to record houses, and we expect it'll happen again as we kick 
            off our 53rd Season this October with Annie and her dog Sandy, Daddy Warbucks and the mean Miss Hannigan and all 
            those lovable orphans.
        </p>
        <p>
          <a class='call_to_action' 
             href="<?php echo "$relative_path" ?>pages/casts.php?years=<?php echo "$years_numbers";?>#annie">
             Click here for our <em>Annie</em> cast list.
          </a>
        </p>
        
    </div><!-- close of 'show' div -->
