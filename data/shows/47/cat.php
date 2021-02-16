<?php 
#$showImage = $_SESSION['website_home']/data/shows/nn/images/xxxxxxx.xxx
$showImage = dirname($_SESSION['website_home'] . substr(__FILE__,strlen($_SESSION['root'])));
$showImage = $showImage . "/images/cat.gif";
?>
    <div id="cat" class='show'>
        <img style="width:140px; height:208px; float:right; margin-left:10px"
        <?php echo 'src="' . $showImage . '"'; ?> 
             alt="Cat On A Hot Tin Roof Logo"
             title="Cat On A Hot Tin Roof Logo"/>

        <h2>CAT ON A HOT TIN ROOF</h2>
        <h4>FEBRUARY 14-17, 2008</h4>
        <br />
        <h5>Directed by Amanda Hall</h5>
        <p>
            The Tennessee Williams classic is a must see for all theatre lovers.  A family celebrates the 
            birthday of a rich plantation owner and head of the house, Big Daddy.  The tone is upbeat, 
            but the mood is somber, for a number of evils poison the gaiety.  This is Big Daddy's last 
            birthday as he has cancer and everyone except him knows it.  There is no will and no heir 
            to "the richest land south of the Delta", and each family member is fighting for their share.
        </p>
        <p>
            Who will stay on top of this hot tin roof?
        </p>
        <p>
          <a class='call_to_action' 
             href="<?php echo "$relative_path" ?>pages/casts.php?years=<?php echo "$years_numbers";?>#cat">
             Click here for our <em>Cat On A Hot Tin Roof</em> cast list.
          </a>
        </p>
        
    </div><!-- close of 'show' div -->
