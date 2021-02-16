<?php 
#$showImage = $_SESSION['website_home']/data/shows/nn/images/xxxxxxx.xxx
$showImage = dirname($_SESSION['website_home'] . substr(__FILE__,strlen($_SESSION['root'])));
$showImage = $showImage . "/images/fortysecond.gif";
?>
    <div id="forty" class='show'>
        <img style="width:191px; height:209px; float:right; margin-left:10px"
        <?php echo 'src="' . $showImage . '"'; ?> 
             alt="Forty-Second Street Logo"
             title="Forty-Second Street Logo"/>

             <h2>42nd Street</h2>
             <h4>
                 July 27-30 2006<br />
                 with holdovers July 31st and August 1st
             </h4>
             <br />
             <h5>Directed by Wess Hughes</h5>
             <p>
                 Come and meet... those dancin feet... on the avenue I'm takin you to... Forty-Second Street."
                 The biggest tap dancing musical comedy LLT has ever seen.  Director Wess Hughes is back from
                 the West Coast hard at work with a cast and crew of over 100 that will tap-tap-tap their way
                 into your heart and put the biggest smile on your face.  The 1933 movie made Ruby Keeler famous
                 as the small-town girl who becomes a Broadway star overnight when the diva leading lady breaks her
                 leg and the little chorus girl has to learn the part in just a few hours before opening night.
                 When the movie screenplay was finally turned into a real live Broadway musical in 1980, it won
                 dozens and dozens of accolades including Best Musical Tony Award.  Besides the title song, it's
                 full of so many other wonderful tunes like 
                 <span class="showtitle">"We're In The Money", "I Only Have Eyes For You", "Shuffle Off To Buffalo"</span>, 
                 and the famous one that call you to "Come along and listen to....The Lullaby of Broadway...the
                 hi-dee-hi and whoop-dee-doo... the lullaby of Broadway. This one is not to be missed!
            </p>
            <p>
              <a class='call_to_action' 
                 href="<?php echo "$relative_path" ?>pages/casts.php?years=<?php echo "$years_numbers";?>#forty">
                 Click here for our <em>42nd Street</em> cast list.
              </a>
            </p>
            
        </div>
