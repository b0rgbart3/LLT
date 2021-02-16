<?php 
#$showImage = $_SESSION['website_home']/data/shows/nn/images/xxxxxxx.xxx
$showImage = dirname($_SESSION['website_home'] . substr(__FILE__,strlen($_SESSION['root'])));
$showImage = $showImage . "/images/camp_title.jpg";
?>
    <div id="alice" class='show'>
        <img style="margin-left: auto; width:547px;margin-right: auto;" 
        <?php echo 'src="' . $showImage . '"'; ?> 
             alt="Kids' Camp Logo"
             title="Kids' Camp Logo"/>
        <br /><br />    

        <p style="font-size:1.5em;text-align:center;">Children's Characters</p>

        <?php $showImage = dirname($showImage) . "/alice.jpg"; ?>

        <img class="showpic"
             style="float:left;width:260px;margin-right:20px;"
        <?php echo 'src="' . $showImage . '"'; ?> 
             alt="Alice in Wonderland Logo"
             title="Alice in Wonderland Logo"/>

        <h2>Alice in Wonderland</h2>
        <h4>May 31 - June 10, 2012</h4>
        <br />
        <h5>Directed by Brenda Parker</h5>

        <p>
            It's our annual Summer Kid's Camp with an intensive one week workshop where students will 
            have the unique learning opportunity to gain both on-stage and off-stage experience.
        </p>
        <p>
            The students will learn the audition, rehearsal and performance process, and have an
            unbelievably memorable time doing it.  Kids have an unbounding imagination, and their desire
            to sing and dance and participate in the performing arts will make for a highlight of their summer.
        </p>
        <p>
            Seasoned LLT veteran performers and directors will lead classes this week in workshops that
            will enrich the kids' lives and will culminate with performances of Disney's musical version
            of Lewis Carroll's madcap adventure, <span class='showTitle'>Alice In Wonderland</span>.
            It's full of all those <span class="chills">great children's characters</span> like the Mad
            Hatter, Twiddledum &amp; Tweedledee, the White Rabbit, the Cheshire Cat, the mad Queen of Hearts
            and of course, Alice herself.  The show features memorable Disney songs
            <span class='showTitle'>"I'm Late," "The Unbirthday Song," and "Zip-A-Dee-Do-Dah."</span>
        </p>
        <p>
            Director Brenda Parker will head up the camp that will be open to students from 1st grade
            through college. Pre-registration is required since the camp will sell out in advance. To make
            sure you receive info and details on registering, drop a line to 
            <?php echo "<a href=\"mailto:" . $_SESSION['llt_email'] . "\">" . $_SESSION['llt_email'] . "</a>" ?>
            to be included on our mailing list. 
        </p>
        <p>
          <a class='call_to_action' 
             href="<?php echo "$relative_path" ?>pages/casts.php?years=<?php echo "$years_numbers";?>#alice">
             Click here for our <em>Alice in Wonderland</em> cast list.
          </a>
        </p>
    </div><!-- close of 'show' div -->
