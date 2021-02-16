<?php 
#$showImage = $_SESSION['website_home']/data/shows/nn/images/xxxxxxx.xxx
$showImage = dirname($_SESSION['website_home'] . substr(__FILE__,strlen($_SESSION['root'])));
$showImage = $showImage . "/images/joseph.jpg";
?>
    <div id="joseph" class='show'>
        <img style="width:250px; float:right; margin-left:10px"
        <?php echo 'src="' . $showImage . '"'; ?> 
             alt="Dreamcoat Logo"
             title="Dreamcoat Logo"/>    
      
        <h2>JOSEPH &amp; THE AMAZING TECHNICOLOR DREAMCOAT</h2>
        <h4>March 13-15 &amp;<br />March 21-22, 2009</h4>
        <br />
        <h5>Directed by Wess Hughes</h5>
        <p>
            <span class="showtitle">Joseph &amp; The Amazing Technicolor Dreamcoat</span> is a colorful
            retelling of the Biblical story of Joseph and his coat of many colors found in the book of Genesis.
            Told through a narrator with a goal for encouraging children of all ages to dream, it was Sir 
            Andrew Lloyd Webber's first staged musical and is still the most produced of all his shows.
        </p>
        <p>
            This modern musical features a fun score with songs ranging from a country and western hoe-down 
            and an Elvis blue-suede shoes number to a spoof of French ballads and a rousing 1970's disco production
            number.
        </p>
        <p>
            LLT set an attendance record when we first presented <span class="showtitle">Joseph</span> back in 
            the mid 1990's, so we're excited to offer the show to the Pine Belt audiences once again.  Director 
            Wess Hughes is back in town to work with music director Sue Bush, choreographer Jennifer Odom and 
            a huge cast to dazzle audiences with this family classic guaranteed to leave you smiling and humming 
            the show's score for weeks!
        </p>
        <p>
          <a class='call_to_action' 
             href="<?php echo "$relative_path" ?>pages/casts.php?years=<?php echo "$years_numbers";?>#joseph">
             Click here for our <em>Joseph &amp; The Amazing Technicolor Dreamcoat</em> cast list.
          </a>
        </p>
        
    </div><!-- close of 'show' div -->
