<?php 
#$showImage = $_SESSION['website_home']/data/shows/nn/images/xxxxxxx.xxx
$showImage = dirname($_SESSION['website_home'] . substr(__FILE__,strlen($_SESSION['root'])));
$showImage = $showImage . "/images/charity.gif";
?>
    <div id="sweet" class='show'>
        <img style="width:350px; height:158px; float:right; margin-left:10px"
        <?php echo 'src="' . $showImage . '"'; ?> 
             alt="Sweet Charity Logo"
             title="Sweet Charity Logo"/>

        <h2>Sweet Charity</h2>
        <h4>March 1-4, 2007</h4>
        <br />
        <h5>Directed by Ricardo Robinson</h5>
        <p>
            Ricardo Robinson will make his directing debut with this hit Neil Simon/Cy Coleman musical 
            play about Charity Valentine, a girl that wants something so badly that she always tries too
            hard to get it. Come see Charity as she sings, dances, laughs and cries her way through
            romances. This show features dramatic dancing and wonderful musical numbers like 
            <span class="showtitle">"Hey, Big Spender" and "If My Friends Could See Me Now". Sweet Charity</span> is a 
            charming show that has been a favorite for many years. 
        </p>
        <p>
          <a class='call_to_action' 
             href="<?php echo "$relative_path" ?>pages/casts.php?years=<?php echo "$years_numbers";?>#charity">
             Click here for our <em>Sweet Charity</em> cast list.
          </a>
        </p>
        
    </div><!-- close of 'show' div -->
