<?php 
#$showImage = $_SESSION['website_home']/data/shows/nn/images/xxxxxxx.xxx
$showImage = dirname($_SESSION['website_home'] . substr(__FILE__,strlen($_SESSION['root'])));
$showImage = $showImage . "/images/seventeen_new.png";
?>
    <div id="Seventeen" class='show'>
        <img style="float:right;width:260px;margin-left:10px;"
        <?php echo 'src="' . $showImage . '"'; ?> 
             alt="1776"
             title="1776"/>

        <br />

        <h2>1776</h2>
        <p style="text-align:center;">  
                Tony Award Winner!<br />
                1969's Best Musical
        </p>
        <br />
        <h4>May 16 - 19, 2013</h4>
        <br />
        <h5>Directed by Frankie Bennett &amp; Wess Hughes</h5>
        <br />
        <p>
            It was a blistering hot summer in 1776, and the nation was ready to revolt - if only our founding 
            fathers could finally agree to it! This play with music follows argumentative John Adams,
            eccentric Ben Franklin, and brilliant young statesman Thomas Jefferson as they attempt to
            convince the second Continental Congress to vote for signing the Declaration of Independence
            from the shackles of the British monarchy.
        </p>
        <p>
            <span class='showTitle'>1776</span> portrays the founding fathers not as the legendary icons
            they sometimes become in history books, but as the real human beings they truly were.  It's
            filled with history and humor and romance - an unconventional but astonishing musical that's
            patriotic, witty and breathtaking as it tells the 236 year old story.
        </p>
        <p>
          <a class='call_to_action' 
             href="<?php echo "$relative_path" ?>pages/casts.php?years=<?php echo "$years_numbers";?>#1776">
             Click here for our <em>1776</em> cast list.
          </a>
        </p>
        
    </div><!-- close of 'show' div -->
