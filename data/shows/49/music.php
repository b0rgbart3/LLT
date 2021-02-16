<?php 
#$showImage = $_SESSION['website_home']/data/shows/nn/images/xxxxxxx.xxx
$showImage = dirname($_SESSION['website_home'] . substr(__FILE__,strlen($_SESSION['root'])));
$showImage = $showImage . "/images/musicman.gif";
?>
    <div id="music" class='show'>

        <p style="font-size:1.5em;text-align:center;">From The 1950's</p>

        <img class="showpic" 
        <?php echo 'src="' . $showImage . '"'; ?> 
             style="width:150px; float:left; margin-right:30px"
             alt="Music Man"
             title="Music Man"/>    

        <h2>THE MUSIC MAN</h2>
        <ul>
            <li>Ran 1,375 performances on Broadway</li>
            <li>Won the 1958 Tony Award for Best Musical</li>
            <li>1962 movie stared Shirley Jones &amp; Robert Preston</li>
            <li>First presented at LLT in 1984</li>
        </ul>
        <br />
        <h4>December 10th-14th, 2009</h4>
        <br />
        <h5>Directed by Juna Broome</h5>
        <p>
            Laugh at Meredith Willson's musical about con-man 'Professor' Harold Hill as he tries to fool the people 
            of River City, Iowa into buying instruments and uniforms for a kid's band he vows to organize--despite 
            the fact he doesn't know a trombone from a treble clef!  It features the famous songs 
            <span class='showTitle'>'76 Trombones', 'Good Night My Someone', 'Ya Got Trouble'</span> and the memorable 
            Barbershop Quartet singing <span class='showTitle'>'Good Night Ladies'</span> and 
            <span class='showTitle'>'Lida Rose.'</span>  Director Juna Broome already has a huge cast in 
            rehearsals for our exciting season opener.
        </p>
        <p>
          <a class='call_to_action' 
             href="<?php echo "$relative_path" ?>pages/casts.php?years=<?php echo "$years_numbers";?>#musicman">
             Click here for our <em>Music Man</em> cast list.
          </a>
        </p>
        
    </div><!-- close of 'show' div -->
