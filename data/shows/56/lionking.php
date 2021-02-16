<?php 
#$showImage = $_SESSION['website_home']/data/shows/nn/images/xxxxxxx.xxx
$showImage = dirname($_SESSION['website_home'] . substr(__FILE__,strlen($_SESSION['root'])));
$showImage = $showImage . "/images/lion_king.jpg";
?>
 <div id="lion_king" class='show group'>
   <h1>Disney’s</h1>
   <h2>THE LION KING JR.</h2>
   <h3><span style="font-size:0.9em;">A little bit of magic...Disney’s BIGGEST hit ever!</span></h3>
   <h4>
     JUNE 1-2 at 7:30 PM<br />
     JUNE 3 at 4PM and 7:30PM<br />
     JUNE 4 at 2 PM
   </h4>
   
   <p class='reservation_line'>
     <?php
       $temp=explode(".",basename(__FILE__));
       $the_show=$temp[0];  

       reservation_print_yes_no($the_show,$years_numbers,$date_array);
     ?>
   </p>  
     
   <h5>Directed by Katelyn Bryant</h5>

   <?php echo "<img src=" . $showImage . ' class="floater"' .
                  ' title="The Lion King" alt="The Lion King">'; 
   ?>
         
   <p>
     Once again, our annual summer Kids’ Camp production is included in our season so that our 
     season ticket holders can use a punch to see it!
   </p>
     
   <p>
     LLT is one of the very first community theatres from around the nation to be approved 
     to present this junior version of <span class='showTitle'>THE LION KING</span>, 
     which is now the 3rd longest-running show in Broadway history!
   </p>
     
   <p>
     Based on the hit Disney animated film, this stage musical features the beloved score 
     by Elton John and actors in inventive costumes that includes puppets.
   </p>
     
   <p>
     When it opened in NYC, it received 22 Drama Desk and Tony Award nominations and 
     was the Tony winner for Best Musical that year.
   </p>
     
   <p>
     Our annual Summer Kids' Camp is an intensive one-week workshop where over 
     100 students have a memorable time learning the audition and rehearsal process, and then t
     hey’ll end the week with five magical performances of 
     <span class='showTitle'>DISNEY'S THE LION KING JR!</span>
   </p>
                          
   <p>
     Join Mufasa &amp; Scar, Simba &amp; Nala and Timon &amp; Pumba in "<i>The Circle of Life</i>," 
     and you'll see just how much the 100 kids from our annual Summer Kids’ Camp will make you
     smile…and laugh…and cry.
   </p>
   <p>
     <?php 
       echo '<a href="' . dirname($showImage) . '/lionking_actors.jpg">'. "\n";
       echo '           <img style="float:left;width:230px;margin-left:20px;margin-right:10px;"' . "\n"; 
       echo '                src="' . dirname($showImage) . '/lionking_actors.jpg"' . "\n";
       echo '                title="Harper Doggett and Cally Ignatius" alt="Harper Doggett and Cally Ignatius">' . "\n";
       echo "         </a>\n";
     ?>   
     Appearing on Channel 7's <span class='showTitle'>MIDDAY</span> was 
     <span class='showTitle'>LION KING</span>'s Harper Doggett, our 'Timon' and Cally Ignatius, our 
     'Pumbaa'.  Get your reservations in early - it's gonna be a sellout !!!!     
   </p>
   <p style="clear: both;">   
     <span class="caption">
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       &nbsp;&nbsp;&nbsp;
       Click on Image to enlarge
     </span>
   </p>
   <a class='call_to_action' 
      href="<?php echo "$relative_path" ?>pages/casts.php?years=<?php echo "$years_numbers";?>#lion">
      Click here for our <em>Lion King</em> cast list.
   </a>
   <div style="clear:both;"></div>
</div><!-- close of 'show' div -->