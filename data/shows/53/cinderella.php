<?php 
#$showImage = $_SESSION['website_home']/data/shows/nn/images/xxxxxxx.xxx
$showImage = dirname($_SESSION['website_home'] . substr(__FILE__,strlen($_SESSION['root'])));
$showImage = $showImage . "/images/cinderella.png";
?>
    <div id="Cinderella" class='show'>
        <img style="float:right;width:210px;margin-left:10px"
        <?php echo 'src="' . $showImage . '"';?>
             alt="Cinderella Logo"
             title="Cinderella Logo" />
        <br />
        <span class="blurb_highlight">ANNUAL LLT SUMMER KIDS' CAMP</span>
        <h2>CINDERELLA</h2>
        <p>                 
            9 Tony Award Nominations<br />
            9 Emmy Award Nominations<br />
            5 Drama Desk Award Nominations
        </p>
        <h4>May 29 - June 8, 2014</h4>
        <br />
        <h5>Directed by Katelyn Bryant</h5>
        <p>
            Our annual Kids' Camp will take us
            <span style="font-weight:bold;font-style:italic;">to a kingdom far, far away</span>.  
            A brand new production of Rodgers &amp; Hammerstein's <span class='showTitle'>CINDERELLA</span>
            is running on Broadway right now, and our local kids will also get the chance to work on this show
            in a ten day summer workshop.  It's the story that's so well known from the TV versions that starred
            Julie Andrews in the 1950s, Lesley Anne Warren in the 1960's and Mississippi born singer Brandy
            along with Whoopi Goldberg and Whitney Houston in the 1990's version.
        </p>
        <p>
            Our annual Summer Kids' Camp is an intensive one week workshop where students have a memorable 
            time learning the audition and rehearsal process and then will end the week with performances of
            <span class='showTitle'>CINDERELLA</span>.  Pre-registration is required early next spring since
            our camp sells out in advance and auditions for leads will take place in late April.  Make sure 
            you're on our email newsletter list to get early notice when registration opens!
        </p>
        <p>
          <span style="font-size:90%">Performances June 6 at 7:30PM, June 7 at 4PM &amp; 7:30PM and June 8 at 2PM</span>
        </p>
        <p>
          <span class="standout">Our Kids' Camp is not part of our regular 4-punch season ticket.</span>
        </p>
        <p>
          <a class='call_to_action' 
             href="<?php echo "$relative_path" ?>pages/casts.php?years=<?php echo "$years_numbers";?>#cinderella">
             Click here for our <em>Cinderella</em> cast list.
          </a>
        </p>
    </div><!-- close of 'show' div -->
