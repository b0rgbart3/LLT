<?php 
#$showImage = $_SESSION['website_home']/data/shows/nn/images/xxxxxxx.xxx
$showImage = dirname($_SESSION['website_home'] . substr(__FILE__,strlen($_SESSION['root'])));
$showImage = $showImage . "/images/aladdinjr.png";
?>
  <div id="aladdinjr" class='show'>
    <img style="width:255px; float:right; margin-left:10px"
     <?php echo 'src="' . $showImage . '"'; ?> 
             alt="Aladdin Jr. Logo"
             title="Aladdin Jr. Logo"/>
     <br />   
     <h2>ANNUAL LLT SUMMER KIDS' CAMP</h2>
     <h3>ALADDIN JR.</h3>
     <br />
     <h4>JUNE 5 - 7, 2015</h4>
      <p class='reservation_line'>       
        <?php
          $temp=explode(".",basename(__FILE__));
          $the_show=$temp[0];  
   
          reservation_print_yes_no($the_show,$years_numbers,$date_array);
        ?>
      </p>
      <br />
      <h5>Directed by Katelyn Bryant</h5>
      <p>
        Even though our Kids' Camp Production is not a part of the regular season membership, it's always 
        a crowd pleaser!  In <span class='showTitle'>ALADDIN JR.</span>, our wonderful young actors will
        welcome you to Agrabah, City of Enchantment.  Jasmine, the Sultan, the Genie and all the rest of 
        the cast of a hundred (YES...ONE HUNDRED KIDS!) will welcome you with all those favorite songs like
        <span class='showTitle'>"Arabian Nights", "A Whole New World"</span> 
        and <span class='showTitle'>"Friend Like Me."</span>
      </p>
      <p>
        Our annual Summer Kids' Camp is an intensive one week workshop where students have a memorable time 
        learning the audition and rehearsal process and then will end the week with performances of
        <span class='showTitle'>ALADDIN JR.</span>  
      </p>
      <p>
        Pre-registration is required early next spring since our camp sells out in advance - and auditions for 
         the lead roles will be held in early May.  Make sure you're on our email newsletter list to get an 
         early notice when registration opens!  Drop a line to
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
         <br />
         <span class="blurb_highlight">
           Come and see how much these adorable kids can amaze you with what they'll do with just a 
           week of rehearsals!
         </span>
      </p>
      <p>
        <span class="standout">Our Kids' Camp is not part of our regular 4-punch season ticket.</span>
      </p>
      <p>
        <a class='call_to_action' 
           href="<?php echo "$relative_path" ?>pages/casts.php?years=<?php echo "$years_numbers";?>#aladdin">
           Click here for our <em>Aladdin</em> cast list.
        </a>
      </p>
     </div><!-- close of 'show' div -->
