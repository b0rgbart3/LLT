<?php 
#$showImage = $_SESSION['website_home']/data/shows/nn/images/xxxxxxx.xxx
$showImage = dirname($_SESSION['website_home'] . substr(__FILE__,strlen($_SESSION['root'])));
$showImage = $showImage . "/images/highschool.jpg";
?>
    <div id="high" class='show'>
        <img style="width:270px; float:right; margin-left:10px"
        <?php echo 'src="' . $showImage . '"'; ?> 
             alt="High School Musical"
             title="High School Musical"/>    
      
        <h2>HIGH SCHOOL MUSICAL</h2>
        <h4>July 30-31 &amp; August 1-5, 2009</h4>
        <br />
        <h5>Directed by Juna Broome</h5>
        <p>
            Disney Channel's smash hit musical comes to life on the LLT stage!  On the front steps of East High, 
            it's the first day after winter break and the Jocks, Brainiacs, Thespians and Skater Dudes find
            their cliques and discover that life takes twists and turns that they had never expected.  
        </p>
        <p>
            <span class="showtitle">High School Musical</span> is a modern updated show for the whole
            family to see.  All of the songs everyone loves from the movie will keep you toe tapping and
            bring your thoughts back to your days of high school drama.
        </p>
        <p>
          <a class='call_to_action' 
             href="<?php echo "$relative_path" ?>pages/casts.php?years=<?php echo "$years_numbers";?>#highschool">
             Click here for our <em>High School Musical</em> cast list.
          </a>
        </p>
        
    </div><!-- close of 'show' div -->
