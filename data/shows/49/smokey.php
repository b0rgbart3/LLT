<?php 
#$showImage = $_SESSION['website_home']/data/shows/nn/images/xxxxxxx.xxx
$showImage = dirname($_SESSION['website_home'] . substr(__FILE__,strlen($_SESSION['root'])));
$showImage = $showImage . "/images/smokeyjoes_big.gif";
?>
    <div id="smokey" class='show'>
        <p style="font-size:1.5em;text-align:center;">From the 1960's</p>

        <img class="showpic"
        <?php echo 'src="' . $showImage . '"'; ?> 
             style="width:236px; float:left; margin-right:30px"
             alt="Smokey Joe's Cafe Logo"
            title="Smokey Joe's Cafe Logo"/>
                  
        <h2>SMOKEY JOE'S CAFE</h2>
        <ul>
            <li>Ran 2,036 performances on Broadway</li>
            <li>Tony nomination for Best Musical</li>
            <li>Won the Grammy Award for Best Cast Album</li>
            <li>Making its LLT premiere this season</li>
        </ul>
        <br />
        <h4>July 15th-18th, 2010</h4>
        <br />
        <h5>  Directors Mike Weber &amp; Jennifer Coghlan</h5>
        <br />
        <p>
            A musical revue of the hit pop songs of Jerry Lieber and Mike Stoller-you might not know their names, but 
            you'll remember what they wrote: <span class='showTitle'>'Hound Dog,' 'On Broadway,' 'W-O-M-A-N,' "Love Potion #9,'
            'Jailhouse Rock'</span> and <span class='showTitle'>'Spanish Harlem.'</span> They started composing in the 1950's
             but hit their stride by the 1960's and defined the pop songs of that decade.  This high energy show opened on 
             Broadway in 1995 and became the longest running musical revue ever!   Mike Weber and Jennifer Coghlan will 
             co-direct this one for us.
        </p>
        <p>
          <a class='call_to_action' 
             href="<?php echo "$relative_path" ?>pages/casts.php?years=<?php echo "$years_numbers";?>#sjc">
             Click here for our <em>Smokey Joe's Cafe</em> cast list.
          </a>
        </p>
        
    </div><!-- close of 'show' div -->
