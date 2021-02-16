<?php 
#$showImage = $_SESSION['website_home']/data/shows/nn/images/xxxxxxx.xxx
$showImage = dirname($_SESSION['website_home'] . substr(__FILE__,strlen($_SESSION['root'])));
$showImage = $showImage . "/images/dixie.png";
?>
    <div id="dixie" class='show'>
        <img style="float:right;width:260px;margin-left:10px;"
        <?php echo 'src="' . $showImage . '"'; ?> 
             alt="Dixie Swim Club Logo"
            title="Dixie Swim Club Logo"/>
        <br />

        <h2>THE DIXIE SWIM CLUB</h2>
        <p style="text-align:center;">
                Brand NEW Hilarious<br />
                Southern Comedy!
        </p>
        <br />
        <h4>March 21 - 24, 2013</h4>
        <br />
        <h5>Directed by Frankie Bennett &amp; Amanda Robertson</h5>
        <br />
        <p>
            Imagine the sassy gals of <span class='showTitle'>Steel Magnolias, Designing Women</span> and 
            <span class='showTitle'>Golden Girls</span> all wrapped up in 
            one hilarious comedy and you'd have <span class='showTitle'>THE DIXIE SWIM CLUB!</span>  Five 
            Southern ladies that were on their college swim team have remained life-long friends and meet 
            every summer at a North Carolina beach cottage to get free from husbands, kids and jobs.  You'll 
            see them age through their 40s, 50s, 60s and 70s as they dish about their loves, meddle in each 
            others lives and laugh 'til they cry.
        </p>
        <p>
	        <span class='showTitle'>THE DIXIE SWIM CLUB!</span> is a deliciously funny gut-busting Southern-fried
            comedy. You'll laugh out loud and roar with laughter until your face hurts! 
            <span class="standout"><i>
                Sit a spell and let the humor wash over you like an ice-cold Dr. Pepper on a hot summer day!
            </i></span>
        </p>
        <p>
          <a class='call_to_action' 
             href="<?php echo "$relative_path" ?>pages/casts.php?years=<?php echo "$years_numbers";?>#dixie">
             Click here for our <em>The Dixie Swim Club</em> cast list.
          </a>
        </p>
        
    </div><!-- close of 'show' div -->
