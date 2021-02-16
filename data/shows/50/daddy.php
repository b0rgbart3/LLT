<?php 
#$showImage = $_SESSION['website_home']/data/shows/nn/images/xxxxxxx.xxx
$showImage = dirname($_SESSION['website_home'] . substr(__FILE__,strlen($_SESSION['root'])));
$showImage = $showImage . "/images/daddysdyin.jpg";
?>
    <div id="daddy" class='show'>
        <p style="font-size:1.5em;text-align:center;">From the 1960's</p>
        
        <img class="showpic"
        <?php echo 'src="' . $showImage . '"'; ?>
             style="float:left;width:300px;margin-right:20px;"
             alt="Daddy's Dyin' Logo"
             title="Daddy's Dyin' Logo"/>

        <h2>DADDY'S DYIN'...<br />WHO'S GOT THE WILL?</h2>
        <h4>March 3-6, 2011</h4>
        <br />
        <h5>Directed by Frankie Bennett</h5>

        <p>
            Fifty years ago, the founders of LLT first got together in the Coffee Shop of the old
            Pinehurst Hotel to start our group.  Little did they know back in 1961 that one day LLT
            would be performing next door in the Arabian Theatre-just steps 
            away from where they were meeting that summer!
        </p>
        <p>
            They quickly organized and the very first show LLT ever presented was a comedy, and every
            year since then we've presented at least one comedy a year.   Especially popular with 
            our audiences are the 'southern' comedies and we have a doozy for you this season.
        </p>
        <p>
            In <span class='showTitle'>DADDY'S DYIN'...WHO'S GOT THE WILL?</span>, a set of 1960's
            siblings all converge on their childhood Texas home when they're told their Dad is dying.
            Lurleen, Sara Lee, Orville and Evalita all come back to make sure they can each fight for 
            their share of Daddy Buford's big estate.  You can bet that major cat fights will ensue and
            ensure some major belly laughs!
        </p>
        <p>
          <a class='call_to_action' 
             href="<?php echo "$relative_path" ?>pages/casts.php?years=<?php echo "$years_numbers";?>#daddy">
             Click here for our <em>Daddy's Dyin'... Who's Got the Will?</em> cast list.
          </a>
        </p>
        
    </div><!-- close of 'show' div -->
