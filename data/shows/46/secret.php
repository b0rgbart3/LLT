<?php 
#$showImage = $_SESSION['website_home']/data/shows/nn/images/xxxxxxx.xxx
$showImage = dirname($_SESSION['website_home'] . substr(__FILE__,strlen($_SESSION['root'])));
$showImage = $showImage . "/images/garden.gif";
?>
    <div id="secret" class='show'>
        <img style="width:182px; height:209px; float:right; margin-left:10px"
        <?php echo 'src="' . $showImage . '"'; ?> 
             alt="The Secret Garden Logo"
             title="The Secret Garden Logo"/>

        <h2>The Secret Garden</h2>
        <h4>April 26-29, 2006</h4>
        <br />
        <h5>Directed by Amanda Hall</h5>
        <p>
            With a story of transformation and rebirth, <span class="showtitle">The Secret Garden</span> is sure to captivate 
            audiences of all ages. Mary Lennox, a spoiled young orphan, is sent to live with her brooding uncle at gloomy 
            Misselthwaite Manor. Discovering a hidden, neglected garden, Mary plants the seeds of new life for all those 
            drawn into her secret refuge. This wonderful old story will be a delight to experience for all ages. 
        </p>
        <p>
          <a class='call_to_action' 
             href="<?php echo "$relative_path" ?>pages/casts.php?years=<?php echo "$years_numbers";?>#garden">
             Click here for our <em>The Secret Garden</em> cast list.
          </a>
        </p>
        
    </div><!-- close of 'show' div -->
