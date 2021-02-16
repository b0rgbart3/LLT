<?php 
#$showImage = $_SESSION['website_home']/data/shows/nn/images/xxxxxxx.xxx
$showImage = dirname($_SESSION['website_home'] . substr(__FILE__,strlen($_SESSION['root'])));
$showImage = $showImage . "/images/patsy2.png";
?>
    <div id="patsy" class='show'>
        <img style="float:right;width:260px;margin-left:10px;"
        <?php echo 'src="' . $showImage . '"'; ?> 
             alt="Patsy Cline Logo"
             title="Patsy Cline Logo"/>

        <h2>ALWAYS...PATSY CLINE</h2>
        <h4>November 1-4 and 9-11, 2012</h4>
        <br />
        <h5>Directed by Wess Hughes</h5>
             
        <p>
            Join in and help Laurel Little Theatre as we embark on a major fund raiser to build the brand
            new Pinehurst Room and extension to our historic Arabian Theatre.  This will be a huge addition
            running down the entire length of the south side of the theatre, exactly where the old 
            Pinehurst Hotel originally stood from the 1920s until it was demolished in the late 1980s!
        </p>
        <p>
	        When the Arabian was built in 1927 it had two common walls with the Pinehurst and there
            was even a secret courtesy door that went directly from the hotel into the side of the 
            Arabian's Lobby.  We'll be recreating that entrance and building what we'll be calling the
            Pinehurst Room with a huge new concession and meeting room and lots of new restrooms.  That's 
            right ladies, no more long lines waiting for the loo!!!!  And then further down the southern 
            wall will be new set construction and storage areas as well as new dressing rooms and cast 
            restrooms.
        </p>
        <p>
	        We plan to use the new Pinehurst Room to showcase tons of old photographs of the old Pinehurst 
            Hotel and the Arabian and Strand Theatres that Sank Taylor, Charles Green and B.A. Schneider
            had built in Laurel back in the 1920s when the movie palaces were first popping up all over
            the country.  If anyone has any old great photos of the hotel or the 
            theatres or Downtown Laurel, please get in touch with us at 
            <?php echo "<a href=\"mailto:" . $_SESSION['llt_email'] . "\">" . $_SESSION['llt_email'] . "</a>" ?>
            so we might add to our collection.
        </p>
        <p>
	        And to remember those of you that join in with contributions to this fund raiser, there will 
            be an entire Wall of Honor with your names engraved.
        </p>
        <p>
	        We're kicking off this fund raiser with a special return engagement of LLT's most successful production ever,
            <span class='showTitle'>ALWAYS...PATSY CLINE</span>.  This will be our fourth presentation of the musical that 
            celebrates the life and songs of the great country singer, and it's sold out every time we've had 
            it on our stages.
        </p>
        <p>
	        Director Wess Hughes and Music Director Michelle Howells will be back with Missy Sanderson as
            Patsy and Catherine Nowicki playing her funny side-kick Louise.  As usual, the evening will 
            begin with a rousin' Grand Ole Opry Talent Show featuring some of the great performers of
            the Pine Belt.
        </p>
        <p>
            <span class='showTitle'>ALWAYS...PATSY CLINE</span> will be a special fund raiser and not part of our 
            regular 4-show season.
        </p>
        <p>
          <a class='call_to_action' 
             href="<?php echo "$relative_path" ?>pages/casts.php?years=<?php echo "$years_numbers";?>#patsy">
             Click here for our <em>Always... Patsy Cline</em> cast list.
          </a>
        </p>
        
    </div><!-- close of 'show' div -->
