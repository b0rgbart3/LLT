<?php 
#$showImage = $_SESSION['website_home']/data/shows/nn/images/xxxxxxx.xxx
$showImage = dirname($_SESSION['website_home'] . substr(__FILE__,strlen($_SESSION['root'])));
$showImage = $showImage . "/images/mermaid.png";
?>
    <div id="mermaid" class='show'>
        <img style="float:right;width:260px;margin-left:10px;"
        <?php echo 'src="' . $showImage . '"'; ?> 
             alt="Little Mermaid Logo"
             title="Little Mermaid Logo"/>

        <br />

        <h2>Disney's THE LITTLE MERMAID</h2>
        <p style="text-align:center;">
                Our Annual Summer Kids' Camp
        </p>
        <br />
        <h4>May 30 - June 9, 2013</h4>
        <br />
        <h5>Directed by Katelyn Bryant</h5>
        <br />
        <p>
            Our annual Summer Kids' Camp is an intensive one week workshop where students have a memorable
            time learning the audition and rehearsal process and then end the week with performances of 
            <span class='showTitle'>THE LITTLE MERMAID, Jr.</span>
        </p>
        <p>
            Disney had huge hits with both the animated movie and the Broadway production of 
            <span class='showTitle'>LITTLE MERMAID</span>, featuring the memorable characters of the mermaid Ariel, 
            King Triton, Prince Eric and the sea witch Ursula.  Our camp is open to elementary and junior high students.  
            Pre-registration is required next spring since the camp will sell out in advance and auditions for leads 
            will take place in early May.
        </p>
        <p>
            <span class="standout">Our Kids' Camp is not part of our regular 4-show season.</span>
        </p>
        <p>
          <a class='call_to_action' 
             href="<?php echo "$relative_path" ?>pages/casts.php?years=<?php echo "$years_numbers";?>#mermaid">
             Click here for our <em>The Little Mermaid</em> cast list.
          </a>
        </p>
    </div><!-- close of 'show' div -->
