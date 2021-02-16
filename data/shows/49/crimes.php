<?php 
#$showImage = $_SESSION['website_home']/data/shows/nn/images/xxxxxxx.xxx
$showImage = dirname($_SESSION['website_home'] . substr(__FILE__,strlen($_SESSION['root'])));
$showImage = $showImage . "/images/crimes_big.gif";
?>
    <div id="crimes" class='show'>
        <p style="font-size:1.5em;text-align:center;">From the 1980's</p>

        <img class="showpic" 
        <?php echo 'src="' . $showImage . '"'; ?> 
             style="width:188px; float:left; margin-right:30px"
             alt="Crimes Of The Heart Logo"
             title="Crimes Of The Heart Logo"/>    

        <h2>CRIMES OF THE HEART</h2>
        <ul>
            <li>Ran 535 performances on Broadway</li>
            <li>Won the 1985 Tony Award for Best Play</li>
            <li>Won the 1985 Pulitzer Prize for Drama</li>
            <li>First presented at LLT in 1985</li>
        </ul>
        <br />
        <h4>February 11th-14th, 2010</h4>
        <br />
        <h5>Directed by Michael Garner</h5>
        <br />
        <p>
            This hilarious southern gothic comedy will have you in stitches as three crazy sisters from Hazlehurst, 
            Mississippi reunite at Old Grandaddy's home to hash out their troubled lives and the 'crimes of the heart'
            that each have committed.  Mississippi author Beth Henley's humorous movie version starred Diane Keaton, 
            Sissy Spacek and Jessica Lange and garnered three Academy Award nominations.  Michael Garner will direct
            this one for us and will be looking for three local gals to play these tragically funny roles.
        </p>
        <p>
          <a class='call_to_action' 
             href="<?php echo "$relative_path" ?>pages/casts.php?years=<?php echo "$years_numbers";?>#crimes">
             Click here for our <em>Crimes of the Heart</em> cast list.
          </a>
        </p>
        
    </div><!-- close of 'show' div -->
