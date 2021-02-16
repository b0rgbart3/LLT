<?php 
#$showImage = $_SESSION['website_home']/data/shows/nn/images/xxxxxxx.xxx
$showImage = dirname($_SESSION['website_home'] . substr(__FILE__,strlen($_SESSION['root'])));
$showImage = $showImage . "/images/proof.png";
?>
     <div id="Proof" class='show'>
        <img style="float:right;width:260px;margin-left:10px;"
        <?php echo 'src="' . $showImage . '"'; ?> 
             title="Proof Logo"/>
        <br />

        <h2>PROOF</h2>   
        <p style="text-align:center;">
                Tony Award Winner!<br />
                Pulitzer Prize Winner!<br />
                2002's Best Play
        </p>
        <h4>January 10 - 13, 2013</h4>
        <br />
        <h5>Directed by Sam Buchanan &amp; Jessica Shaidnagle</h5>
        <p>
            Set on a back porch in present day Chicago, the drama <span class='showTitle'>PROOF</span>
            is the story of a guy, a girl, and a math equation.  The young woman has just lost her brilliant
            but disturbed mathematician father, and in the wake of his death she must deal with her own
            volatile emotions, the arrival of her overbearing estranged sister and the attentions of 
            the boy, a former student of her father.
        </p>
        <p>
	        After a notebook is found with an equation that might prove to be an important discovery,
            it's assumed her father wrote it - only in truth, she is the author and now she's wondering
            exactly what she inherited from her father: genius, or insanity?
            <span style="font-style:italic;">The 'proof' is in the viewing.</span>
        </p>
        <p>
          <a class='call_to_action' 
             href="<?php echo "$relative_path" ?>pages/casts.php?years=<?php echo "$years_numbers";?>#proof">
             Click here for our <em>Proof</em> cast list.
          </a>
        </p>
        
    </div><!-- close of 'show' div -->
