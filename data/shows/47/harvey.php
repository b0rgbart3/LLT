<?php 
#$showImage = $_SESSION['website_home']/data/shows/nn/images/xxxxxxx.xxx
$showImage = dirname($_SESSION['website_home'] . substr(__FILE__,strlen($_SESSION['root'])));
$showImage = $showImage . "/images/harvey.gif";
?>
    <div id="harvey" class='show'>
        <img style="width:200px; height:191px; float:right; margin-left:10px"
        <?php echo 'src="' . $showImage . '"'; ?> 
             alt="Harvey"
             title="Harvey"/>

        <h2>HARVEY</h2>
        <h4>NOVEMBER 8-11, 2007</h4>
        <br />
        <h5>Directed by Cynthia Welborn<br />Assisted by Gerald Wansley</h5>
        <p>
            Elwood P. Dowd is a gentle eccentric who talks with an invisible 6-foot rabbit named Harvey.  
            As the plays evolves, Harvey becomes very real, not only to the audience, but to the characters 
            in the play.  This lighthearted drama seems to say that reality becomes what we believe it to be.
        </p>
        <p>
            It won the Pulitzer Prize after its initial run on Broadway in the 1940s and then in 1950 was
            made into the famous movie starring Jimmy Stewart. This is LLT's third presentation of the
            old comedy. Our 1986 production starred Laurel's own Parker Posey before she went off to 
            Hollywood and Broadway fame.
        </p>
        <p>
          <a class='call_to_action' 
             href="<?php echo "$relative_path" ?>pages/casts.php?years=<?php echo "$years_numbers";?>#harvey">
             Click here for our <em>Harvey</em> cast list.
          </a>
        </p>
        
    </div><!-- close of 'show' div -->
