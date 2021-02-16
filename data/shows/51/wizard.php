<?php 
#$showImage = $_SESSION['website_home']/data/shows/nn/images/xxxxxxx.xxx
$showImage = dirname($_SESSION['website_home'] . substr(__FILE__,strlen($_SESSION['root'])));
$showImage = $showImage . "/images/oz.jpg";
?>
    <div id="oz" class='show'>
        <p style="font-size:1.5em;text-align:center;">Famous Characters</p>
        <img style="float:left;width:260px;margin-right:20px;"
        <?php echo 'src="' . $showImage . '"'; ?> 
             alt="Wizard of OZ Logo"
             title="Wizard of OZ Logo"/>

        <h2>The Wizard of Oz</h2>
        <h4>
            August 18-21<br />
            August 26-27
        </h4>
        <br />
        <h5>Directed by Lacy Cockrell </h5>

        <p>
            It's one of the most beloved musicals of all time, and we open our 51st Season with a huge cast 
            featuring all those <span class='chills'>famous characters</span> that everyone knows and loves:
            Dorothy &amp; Toto, the Scarecrow, Tin Man &amp; Cowardly Lion, the Wicked Witch of the West &amp; Glinda the
            Good Witch, and of course, all those little Munchkins and the man himself, the wonderful Wizard of Oz.
        </p>
        <p>
            There's been dozens of various stage productions of this story since L. Frank Baum first wrote his 
            children's book over a hundred years ago in 1900. Film adaptations included silent movie versions 
            and cartoons, as well as the famous 1939 Technicolor movie that made a huge star out of little Judy Garland 
            and went on to win 2 Academy Awards.
        </p>
        <p>
            Director Lacy Cockrell has been rehearsing her huge cast all summer, and they'll delight audiences of all ages
            with those songs that everyone knows: 
            <span class='showTitle'>
                "We Welcome You To Munchkinland", "Ding! Dong! The Witch is Dead!", 
                "If I Only Had a Brain"
            </span> 
            and the most famous of all,<span class='showTitle'>"Over the Rainbow."</span>
        </p>
        <p>
            LLT first presented <span class='showTitle'>Oz</span> back in 1981 to completely sold out houses, and this summer 
            will be no different--so don't miss out.  Put on your ruby red slippers, and come along and 
            <span style="font-style:italic;">"Follow the Yellow Brick Road"</span> 
            to the Land of Oz! 
            <span class="showTitle">
                "There's no place like home.  There's no place like home.  There's no place like home!"
            </span>
        </p>
        <p>
          <a class='call_to_action' 
             href="<?php echo "$relative_path" ?>pages/casts.php?years=<?php echo "$years_numbers";?>#oz">
             Click here for our <em>The Wizard of Oz</em> cast list.
          </a>
        </p>
        
    </div><!-- close of 'show' div -->
