<?php 
#$showImage = $_SESSION['website_home']/data/shows/nn/images/xxxxxxx.xxx
$showImage = dirname($_SESSION['website_home'] . substr(__FILE__,strlen($_SESSION['root'])));
$showImage = $showImage . "/images/dearly.jpg";
?>
    <div id="dearly" class='show'>
        <img style="width: 50%;"
        <?php echo 'src="' . $showImage . '"'; ?> 
             class="floater"
             alt="Dearly Departed Logo"
             title="Dearly Depoarted Logo"/>
        <br />
        <h2>DEARLY DEPARTED</h2>
        <h3>A <span class='chills darkenBack'>THRILLING</span> DROP-DEAD-FUNNY COMEDY!</h3>
        <br />
        <h4>
            March 3-4-5, 2016 at 730PM<br />
            March 6, 2016 at 2PM
        </h4>
        <p class='reservation_line'>       
          <?php
            $temp=explode(".",basename(__FILE__));
            $the_show=$temp[0];  
    
            reservation_print_yes_no($the_show,$years_numbers,$date_array);
          ?>
        </p>  
        <br />
        <h5>Directed by Frankie Bennett</h5>
        <p>
           LLT's annual Southern comedy is sure to be a hoot!  Not since <span class='showTitle'>STEEL MAGNOLIAS</span>
           has a more colorful and dysfunctional group of Southern eccentrics gathered below the Mason-Dixon line. 
        </p>
        <p>
           In the backwoods of the Bible Belt, the Turpin family struggles to all come together to bury 
           the despicable daddy of the family.  One son drinks too much, a second one is doin' time in 
           prison, another son is pretty much a deadbeat, the daughter is a junk food junkie and his 
           not-so-grieving widow wants to engrave 
           <span style="font-weight:bold;font-style:italic;">"He Was Mean And Surly"</span> on the tombstone.
        </p>
        <p>
           The stage play of <span class='showTitle'>DEARLY DEPARTED</span> was later adapted into a
           movie screenplay and retitled <span class='showTitle'>KINGDOM COME</span>.  The 2001 film
           starred Whoopi Goldberg, LL Cool J, Vivicia Fox, Loretta Devine, Toni Braxton and Jada Pinkett Smith.
        </p>
        <p>
           Don't miss it - You'll <span class='chills'>DIE</span> laughin'!!!
        </p>
        <p>
           The LLT reservation line for <span class='showTitle'>DEARLY DEPARTED</span> will open February 25th and 
           answers 24 hours a day at <?php print $_SESSION['llt_phone']?>.
        </p>
         <p>
           <a class='call_to_action' 
              href="<?php echo "$relative_path" ?>pages/casts.php?years=<?php echo "$years_numbers";?>#departed">
              Click here for our <em>Dearly Departed</em> cast list.
            </a>
        </p>
        
    </div><!-- close of 'show' div -->
