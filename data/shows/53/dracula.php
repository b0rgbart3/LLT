<?php 
#$showImage = $_SESSION['website_home']/data/shows/nn/images/xxxxxxx.xxx
$showImage = dirname($_SESSION['website_home'] . substr(__FILE__,strlen($_SESSION['root'])));
$showImage = $showImage . "/images/dracula.png";
?>
    <div id="Dracula" class='show'>
        <img style="float:right; width:220px;margin-left:10px;"
        <?php echo 'src="' . $showImage . '"';?>
             alt="Dracula Logo"
             title="Dracula Logo" />
        <br />
        <h2>DRACULA</h2>
        <p> 
            The Long Running 18 Year Hit for Louisville's Actors Theatre<br />
            Our Special Halloween Week Thriller
        </p>
        <h4>October 31 &amp; November 1-3, 2013</h4>
        <br />
        <h5>Directed by Sam Buchanan</h5>
        <p>
            Then we're off <span style="font-weight:bold;font-style:italic;">to the Transylvanian hills of 
            Romania and the British seashore</span> for a special Halloween production based on the classic
            Bram Stoker cult thriller.  The world famous novel first appeared in 1897, and this stage version
            is a gothic screamfest jam-packed with plenty of thrills and chills and special effects that will
            keep you on the edge of your seat.  Join in as Professor Ven Helsing and his comrades hunt down 
            and destroy the cunningly evil Count Dracula.  
        </p>
        <p>
            <span style="font-weight:bold;font-style:italic;">
                Steel your nerves, break out the garlic, don your fangs and get ready to scream!
            </span>
        </p>
        <p>
            Performances October 31 &amp; November 1-2 at 7:30PM and November 3 at 2PM
        </p>
        <p>
          <a class='call_to_action' 
             href="<?php echo "$relative_path" ?>pages/casts.php?years=<?php echo "$years_numbers";?>#dracula">
             Click here for our <em>Dracula</em> cast list.
          </a>
        </p>
        
    </div><!-- close of 'show' div -->
