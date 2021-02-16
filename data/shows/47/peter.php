<?php 
#$showImage = $_SESSION['website_home']/data/shows/nn/images/xxxxxxx.xxx
$showImage = dirname($_SESSION['website_home'] . substr(__FILE__,strlen($_SESSION['root'])));
$showImage = $showImage . "/images/peterpan_logo.jpg";
?>
    <div id="peter" class='show'>
        <img style="width:300px; height:301px; float:right; margin-left:10px"
        <?php echo 'src="' . $showImage . '"'; ?> 
             alt="Peter Pan Logo"
             title="Peter Pan Logo"/>

        <h2>PETER PAN</h2>
        <h4>AUGUST 23-27, 2007</h4>
        <br />
        <h5>Directed by Juna Broome</h5>
        <p>
            The story of <span class="showtitle">Peter Pan</span>, the boy who would not grow up, has 
            delighted audiences for over 100 years.  First written by J. M. Barrie as a stage play in 1904,
            this tale was adapted into an animated film by Disney and then a popular musical production.
            The musical featured Mary Martin.  It opened on October 20, 1954 and ran for 152 performances.
            In that memorable tale, Peter Pan whisks Wendy Darling and her brothers Michael and John, off to Neverland:
            <span style="font-style:italic">"Second star to the right, then straight on 'til morning."</span>
        </p>
        <p>
            The enchanted island is home to Peter Pan, the Lost Boys, Tiger Lily, and the scheming Captain
            Hook.  Song highlights include 
            <span class="showtitle">"
                I Gotta Crow", "I'm Flying", "I Won't Grow Up", "Neverland", "Ugg-a-Wugg", and "Hook's Waltz".
            </span>  
            This timeless masterpiece will touch, inspire, dazzle, and charm every generation.
        </p>
        <p>
          <a class='call_to_action' 
             href="<?php echo "$relative_path" ?>pages/casts.php?years=<?php echo "$years_numbers";?>#peter">
             Click here for our <em>Petr Pan</em> cast list.
          </a>
        </p>
        
    </div><!-- close of 'show' div -->
