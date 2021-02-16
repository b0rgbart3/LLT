<?php 
#$showImage = $_SESSION['website_home']/data/shows/nn/images/xxxxxxx.xxx
$showImage = dirname($_SESSION['website_home'] . substr(__FILE__,strlen($_SESSION['root'])));
$showImage = $showImage . "/images/honk.gif";
?>
    <div id="honk" class='show'>
        <img style="width:377px; height:120px; float:right; margin-left:10px"
        <?php echo 'src="' . $showImage . '"'; ?> 
             alt="Honk! Logo"
             title="Honk! Logo"/>

        <h2>HONK!</h2>
        <h4>December 7-10, 2006</h4>
        <br />
        <h5>Directed by Juna Broome</h5>
        <p>
            The always anticipated children's musical for this season will be <span class="showtitle">HONK!</span> It was the 
            winner of London's Best Musical Award in 2000 and is based on the famous old story of the ugly duckling. Ugly has 
            many adventures trying to discover why he is so different than all the other ducks on the 
            pond. <span class="showtitle">HONK!</span> is a delightful children's production with lots of dancing and songs 
            and it ultimately teaches that it's ok to be different and to be yourself. This cast will be comprised entirely 
            of kids directed by Juna Broome. This show will be fun for the entire family. 
        </p>
        <p>
          <a class='call_to_action' 
             href="<?php echo "$relative_path" ?>pages/casts.php?years=<?php echo "$years_numbers";?>#honk">
             Click here for our <em>Honk!</em> cast list.
          </a>
        </p>
        
    </div><!-- close of 'show' div -->
