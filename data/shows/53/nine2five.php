<?php 
#$showImage = $_SESSION['website_home']/data/shows/nn/images/xxxxxxx.xxx
$showImage = dirname($_SESSION['website_home'] . substr(__FILE__,strlen($_SESSION['root'])));
$showImage = $showImage . "/images/ninetofive.png";
?>
    <div id="Ninetofive" class='show'>
        <img style="float:right; width:220px;margin-left:10px;"
        <?php echo 'src="' . $showImage . '"';?>
             alt="9 to 5 Logo"
             title="9 to 5 Logo" />
     <br />
     <h2>9 TO 5 THE MUSICAL!</h2>
     <p>                                        
         4 Tony Award Nominations <br />
         15 Drama Desk Award Nominations<br />
         2 Grammy Awards<br />
         1 Academy Award Nomination
    </p>
    <h4>April 24-27 and May 2-3, 2014</h4>
    <br />
    <h5>Directed by Frankie Bennett &amp; Wess Hughes</h5>
    <p>
        We wrap up our regular season traveling
        <span style="font-weight:bold;font-style:italic;">to a 1970's corporate office</span> 
        in the fun Dolly Parton musical <span class='showTitle'>9 TO 5</span>.  Its first appearance was the hit
        1980 movie that Dolly wrote the theme song for and starred in.  Just a couple years ago, she penned an
        entirely new country-flavored pop score for a hilarious Broadway production that is just now starting
        to appear at community theatres around the country.  For a fun twist, Dolly herself appears in the
        production to narrate the story.
    </p>
    <p>  
        <span style="font-weight:bold;font-style:italic;">
            Join Violet, Doralee and Judy as they deal with their male chauvinist boss and put him in his 
            place - literally!
        </span>
    </p>
    <p>
        Performances April 24-25-26, May 2 at 7:30PM and April 27, May 3 at 2PM 
    </p>
    <p>
      <a class='call_to_action' 
         href="<?php echo "$relative_path" ?>pages/casts.php?years=<?php echo "$years_numbers";?>#9to5">
         Click here for our <em>9 to 5</em> cast list.
      </a>
    </p>
    
    </div><!-- close of 'show' div -->
