<?php 
#$showImage = $_SESSION['website_home']/data/shows/nn/images/xxxxxxx.xxx
$showImage = dirname($_SESSION['website_home'] . substr(__FILE__,strlen($_SESSION['root'])));
$showImage = $showImage . "/images/driving.png";
?>
    <div id="Driving" class='show'>
        <img style="float:right; width:210px;margin-left:10px;"
        <?php echo 'src="' . $showImage . '"';?>
             alt="Driving Miss Daisy Logo"
             title="Driving Miss Daisy Logo" />
        <br />
        <h2>DRIVING MISS DAISY</h2>
        <p>
            4 Academy Awards including Best Picture<br />
            3 Golden Globe Awards including Best Picture<br />
            Grammy Award Nomination<br />
            3 Outer Critics Awards<br /> including Best Off-Broadway Play<br />
            Pulitzer Prize for Drama
        </p>
        <h4>February 13-16, 2014</h4>
        <br/>
        <h5>Directed by<br />Shana Riles &amp; Brenda Shows Parker</h5>
        <p>
            After Transylvania, we head back
            <span style="font-weight:bold;font-style:italic;">to the 1950's south in Atlanta</span>.  
            We first presented this now-classic play back in 1991 with Brenda Shows Parker and Michael
            Marks in the two lead roles, and both of them will be back as we revisit Miss Daisy and her
            chauffeur Hoke.  <span class='showTitle'>DRIVING MISS DAISY</span> is a warm-hearted and 
            humorous story of the unlikely relationship between an aging, crotchety white Southern 
            lady and a proud, soft-spoken black man. 
        </p>
        <p> 
            <span style="font-weight:bold;font-style:italic;">
                This will be a lovely and sentimental Valentine's Week production that will make you both
                laugh and cry!
            </span>
        </p>
        <p> 
            Performances February 13-14-15 at 7:30PM and February 16 at 2PM
        </p>
        <p>
          <a class='call_to_action' 
             href="<?php echo "$relative_path" ?>pages/casts.php?years=<?php echo "$years_numbers";?>#daisy">
             Click here for our <em>Driving MIss Daisy</em> cast list.
          </a>
        </p>
        
    </div><!-- close of 'show' div -->
