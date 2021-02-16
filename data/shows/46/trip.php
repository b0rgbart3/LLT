<?php 
#$showImage = $_SESSION['website_home']/data/shows/nn/images/xxxxxxx.xxx
$showImage = dirname($_SESSION['website_home'] . substr(__FILE__,strlen($_SESSION['root'])));
$showImage = $showImage . "/images/triptobountiful.gif";
?>
    <div id="trip" class='show'>
        <img style="width:377px; height:117px; float:right; margin-left:10px"
        <?php echo 'src="' . $showImage . '"'; ?> 
             alt="Trip To Bountiful Logo"
             title="Trip To Bountiful Logo"/>

     <h2>The Trip to Bountiful</h2>
     <h4>September 21-24, 2006</h4>
     <br />
     <h5>Directed by Mike Garner</h5>
     <p>
       <span class=" showtitle">The Trip to Bountiful</span> 
         is the famous Horton Foote story of an elderly woman trying to see her Texas childhood home
         one last time before she dies. Experience her trip back there and the many obstacles that
         she encounters on her way. It's a touching show that highlights many life lessons. Geraldine
         Page won an Academy Award playing the old country lady in the movie version of this story
         in 1985 and Lois Smith just one Best Actress Awards playing the same role
         in this year's NYC revival. Sure to be a hit with our Deep South audiences. 
    </p>
    <p>
      <a class='call_to_action' 
         href="<?php echo "$relative_path" ?>pages/casts.php?years=<?php echo "$years_numbers";?>#bountiful">
         Click here for our <em>The Trip to Bountiful</em> cast list.
      </a>
    </p>
    
    </div><!-- close of 'show' div -->
