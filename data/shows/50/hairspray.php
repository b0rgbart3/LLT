<?php 
#$showImage = $_SESSION['website_home']/data/shows/nn/images/xxxxxxx.xxx
$showImage = dirname($_SESSION['website_home'] . substr(__FILE__,strlen($_SESSION['root'])));
$showImage = $showImage . "/images/hairspray.jpg";
?>
    <div id="hair" class='show'>
        <p style="font-size:1.5em;text-align:center;">From the 1960's</p>

        <img class="showpic"
        <?php echo 'src="' . $showImage . '"'; ?> 
             style="float:left;width:180px;margin-right:20px;"
             alt="Hairspray Logo"
             title="Hairspray Logo"/>
             
        <h2>HAIRSPRAY</h2>
        <h4>May 12-15, 2011</h4>
        <br />
        <h5>Directed by Lacy Cockrell</h5>

        <p>
            Speaking of Aquanet, the 2002 musical <span class='showTitle'>HAIRSPRAY</span> ran on Broadway
            for 7 years and just recently closed there.  It won 8 Tony Awards including Best Musical of the
            Year and the recent movie version starring John Travolta, Zac Efron and Queen Latifah won the 
            Golden Globe for Best Movie.
        </p>
        <p>
            Set in 1962 Baltimore, Maryland, the musical follows the ''pleasantly plump'' teen Tracy Turnblad,
            whose dream is to dance on a local TV dance program.  When she surprisingly wins a place on 
            the show, Tracy becomes a celebrity overnight even though she isn't the typical "popular girl"
            and she uses her fame to make things better for all the outcasts at her school.  
            <span class='showTitle'>HAIRSPRAY</span> is a bubblegum-flavored confection full of great 
            songs and hot dances and is as sweet as a show can be without promoting tooth decay!
        </p>
        <p>
          <a class='call_to_action' 
             href="<?php echo "$relative_path" ?>pages/casts.php?years=<?php echo "$years_numbers";?>#hairspray">
             Click here for our <em>Hairspray</em> cast list.
          </a>
        </p>
        
    </div><!-- close of 'show' div -->
