<?php 
#$showImage = $_SESSION['website_home']/data/shows/nn/images/xxxxxxx.xxx
$showImage = dirname($_SESSION['website_home'] . substr(__FILE__,strlen($_SESSION['root'])));
$showImage = $showImage . "/images/seussical.jpg";
?>
    <div id="seuss" class='show'>
        <p style="font-size:1.5em;text-align:center;">From the 1960's</p>

        <img class="showpic"
        <?php echo 'src="' . $showImage . '"'; ?> 
             style="float:left;width:300px;margin-right:20px;"
             alt="Seussical Logo"
             title="Seussical Logo"/>

        <h2>SEUSSICAL THE MUSICAL<br />
            Our Annual Summer LLT Kid's Camp
        </h2>
        <h4>June 2-12, 2011</h4>
        <br />
        <h5>
            Directed by Wess Hughes<br />
            with instructors Lacy Cockrell, Shane Cockrell,  Pam Johnson, Missy Sanderson
        </h5>

        <p>
            At some point, everyone has seen the hit 1966 TV special
            <span class='showTitle'>How the Grinch Stole Christmas</span>.  It repeats on television 
            every holiday, and all the great Dr. Seuss books have long been children's favorites.  Just a
            couple years ago, the characters of his books all became Broadway stars in this new musical, 
            and the Cat in the Hat, Horton the Elephant, the Grinch and all the folks from Whoville make
            for a delightful new show that kids of all ages will love.
        </p>
        <p>
            We present our annual Summer Kid's Camp with an intensive one week workshop where students
            will have the unique learning opportunity to discover and grow their talents and strengths.
            The students will gain both on-stage and off-stage experience and learn the audition,
            rehearsal and performance process and have a unbelievably memorable time doing it.  Kids have an 
            unbounding imagination and their desire to sing and dance and participate in the performing arts
            will make for a highlight of their summer.
        </p>
        <p>
            Seasoned LLT veteran performers and directors will lead classes this week in workshops
            that will enrich the kid's lives and will culminate with performances of 
            <span class='showTitle'>SEUSSICAL THE MUSICAL</span>.  To make sure you receive info 
            and details on our summer camp, drop a line to 
            <?php echo "<a href=\"mailto:" . $_SESSION['llt_email'] . "\">" . $_SESSION['llt_email'] . "</a>" ?>
            to be included on our mailing list.
        </p>
        <p>
          <a class='call_to_action' 
             href="<?php echo "$relative_path" ?>pages/casts.php?years=<?php echo "$years_numbers";?>#seussical">
             Click here for our <em>Seussical</em> cast list.
          </a>
        </p>
        
    </div><!-- close of 'show' div -->
