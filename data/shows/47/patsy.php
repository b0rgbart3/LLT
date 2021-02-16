<?php 
#$showImage = $_SESSION['website_home']/data/shows/nn/images/xxxxxxx.xxx
$showImage = dirname($_SESSION['website_home'] . substr(__FILE__,strlen($_SESSION['root'])));
$showImage = $showImage . "/images/patsy.gif";
?>
    <div id="patsy" class='show'>
        <img style="width:160px; height:222px; float:right; margin-left:10px"
        <?php echo 'src="' . $showImage . '"'; ?> 
             alt="Always... Patsy Cline Logo"
             title="Always... Patsy Cline Logo"/>

        <h2>Always... Patsy Cline</h2>
        <h4>APRIL 11-12-13, 18-19, 2008 </h4>
        <br />
        <h5>Directed by Wess Hughes</h5>
        <p>
            Yeeeeee Haw! We're bringin' back LLT's biggest hit ever! In our 47 year history, this is the show
            that holds the record for the most performances and largest audience numbers. Director Wess Hughes
            has talked his favorite trio of gals into comin' back to do one more round of this rip-roarin',
            knee-slappin', belly-laughin' musical. It's based on the true story of Patsy Cline's friendship 
            with Houston housewife Louise Seger back in 1961. The show's title was inspired by 
            Patsy's letters to Louise, which were consistently signed, "Love ALWAYS...Patsy Cline." 
        </p>
        <p>
            Missy Sanderson will be back on our stage as Patsy, along with Catherine Nowicki as her funny 
            sidekick, Louise. A whole new cast of singers and dancers will be featured in a pre-show country 
            talent hour. Musical Director Michelle Howells will be onstage along with the fiddles and steel
            guitars as the band works through 27 of Patsy's famous ole songs like 
            <span class="showtitle">"Walkin' After Midnight", "I Fall To Pieces", "Crazy", and "Sweet Dreams".</span> 
        </p>
        <p>
            Don't miss this one, y'all! 
        </p>
        <p>
          <a class='call_to_action' 
             href="<?php echo "$relative_path" ?>pages/casts.php?years=<?php echo "$years_numbers";?>#always">
             Click here for our <em>Always... Patsy Cline</em> cast list.
          </a>
        </p>
        
    </div><!-- close of 'show' div -->
