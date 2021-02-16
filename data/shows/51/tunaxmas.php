<?php 
#$showImage = $_SESSION['website_home']/data/shows/nn/images/xxxxxxx.xxx
$showImage = dirname($_SESSION['website_home'] . substr(__FILE__,strlen($_SESSION['root'])));
$showImage = $showImage . "/images/tuna_xmas.jpg";
?>
    <div id="tuna" class='show'>
        <p style="font-size:1.5em;text-align:center;">Hilarious Characters</p>
        <img class="showpic"
        <?php echo 'src="' . $showImage . '"'; ?> 
             style="float:left;width:260px;margin-right:20px;"
             alt="Tuna Christmas Logo"
             title="Tuna Christmas Logo"/>

        <h2>A Tuna Christmas</h2>
        <h4>December 8-11, 2011</h4>
        <br />
        <h5>Directed by Catherine Nowicki</h5>

        <p>
            It's a side-splitting comedic tour-de-force for just two actors that play a total of 24 different
            <span class='chills'>hilarious characters</span> with the quickest costume changes  you'll ever 
            see, and some of the biggest belly laughs you'll ever hear!
        </p>
        <p>
            Catherine Nowicki will direct veteran LLT actors Wess Hughes and her husband, Steven Nowicki, 
            as they become all the various townsfolk of redneck Tuna, Texas.... the third smallest town in 
            Texas.  Tuna is a quirky little place where <i>"the Lion's Club is too liberal and Patsy Cline 
            never dies!"</i>
        </p>
        <p>
            Come and kick up your cowboy heels as the whole town whips itself into a frenzy over the 
            traumas and dramas of their annual Christmas Yard Display Contest and the local little theatre's 
            horridly bad production of <span class="showTitle">A Christmas Carol</span>.  
        </p>
        <p>
            There's Didi Snavely--the insipid used-gun store owner and R.R., her crazy UFO aficionado husband; 
            Vera Carp and Bertha Bumiller, the leaders of the local 'Smut Snatchers' organization; Thurston
            and Arles, the DJs on the area's only radio station; and Helen Bedd and Inita Goodwin, the two
            gum snappin' waitresses at the local greasy spoon called The Tasty Creme.
        </p>
        <p>
            God rest ye merry gentleman--it's two hoots in a ten-gallon hat, with a<br />ho-ho-ho-larious 
            start to the holiday season!
        </p>
        <p>
          <a class='call_to_action' 
             href="<?php echo "$relative_path" ?>pages/casts.php?years=<?php echo "$years_numbers";?>#tuna">
             Click here for our <em>A Tuna Christmas</em> cast list.
          </a>
        </p>
        
    </div><!-- close of 'show' div -->
