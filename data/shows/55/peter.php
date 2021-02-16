<?php 
#$showImage = $_SESSION['website_home']/data/shows/nn/images/xxxxxxx.xxx
$showImage = dirname($_SESSION['website_home'] . substr(__FILE__,strlen($_SESSION['root'])));
$showImage = $showImage . "/images/peter.jpg";
?>
    <div id="peter" class='show'>
        <img style="width: 50%;"
        <?php echo 'src="' . $showImage . '"'; ?> 
             class="floater"
             alt="Peter Pan Logo"
             title="Peter Pan Logo"/>
        <br />

        <h2>PETER PAN JR</h2>
        <h3>THE <span class='lightThrill'>THRILLING</span> DISNEY MUSICAL!</h3>
        <h4>
            June 2-3, 2016 at 730PM<br />
            June 4, 2016 at 4PM and 730PM<br />
            June 5, 2016 at 2PM
        </h4>
        <p class='reservation_line'>       
          <?php
            $temp=explode(".",basename(__FILE__));
            $the_show=$temp[0];  
    
            reservation_print_yes_no($the_show,$years_numbers,$date_array);
          ?>
        </p>  
        <br />
        <h5>Directed by Brenda Shows</h5>

        <p>
           For years our audiences have asked us to return the annual Kids' Camp production to our
           4-Punch Season Ticket - and this year it will once more be part of our main season!
        </p>
        <p>
           Our annual Summer Kids' Camp is an intensive one-week workshop where over 100 students have a
           memorable time learning the audition and rehearsal process, and then they'll end the week with 
           five <span class='lightThrill'>THRILLING</span> performances of 
           <span class='showTitle'>DISNEY'S PETER PAN JR!</span>
        </p>
        <p>
           Using J.M. Barrie's enchanting play about the boy who just "won't grow up," this stage version 
           is based on the Disney animated film that featured the memorable songs "Second Star To The
           Right," "You Can Fly" and "Yo Ho, Yo Ho, A Pirate's Life For Me."
        </p>
        <p>
           You'll meet Peter and all his Lost Boys as he takes Wendy, Michael and John off to Never Land.
           On their exciting adventure they meet mermaids and Indians, and even the infamous Captain Hook
           and his Pirates!
        </p>
        <p>
           Pre-registration is required early next spring for the students since our camp 
           <em><strong>ALWAYS</strong></em> sells out in advance.  Camp runs for one week beginning May 26, 2016 
           and then there's performances the weekend of June 2-5, 2016.  Make sure you're on our email newsletter 
           list to get the first early notice when registration opens!  Drop a line to 
            <?php 
            echo "<a href=\"mailto:" . $_SESSION['llt_email'] .
                "?subject=" . "Add%20me%20to%20LLT's%20mailing%20list" . 
                "&amp;body=" .
                "Hi%0d%0a%0d%0aPlease%20add%20me%20to%20LLT's%20mailing%20list.%0d%0a%0d%0aThank%20you.%0d%0a" .
                "\">" . 
                $_SESSION['llt_email'] . 
                "</a>" .
                " to be added to that list.";
            ?>
        </p>
        <p>
           Come and see just how much all those adorable kids can amaze you with what they do with just a 
           week of rehearsals!
        </p>
        <p>
           The LLT reservation line for <span class='showTitle'>PETER PAN JR</span> will open May 26th 
           and answers 24 hours a day at <?php print $_SESSION['llt_phone']?>.
        </p>
         <p>
           <a class='call_to_action' 
              href="<?php echo "$relative_path" ?>pages/casts.php?years=<?php echo "$years_numbers";?>#peter">
              Click here for our <em>Peter Pan</em> cast list.
            </a>
        </p>
    </div><!-- close of 'show' div -->
