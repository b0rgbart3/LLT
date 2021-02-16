<?php   
#$showImage = $_SESSION['website_home']/data/shows/nn/images/xxxxxxx.xxx
$showImage = dirname($_SESSION['website_home'] . substr(__FILE__,strlen($_SESSION['root'])));
$showImage = $showImage . "/images/shrek.jpg";
?>
<div id="shrek" class='show group'>   

    <h1>Dreamworks'</h1>
    
    <h2>SHREK THE MUSICAL</h2>
     <p class='spectacular'>100 SPECTACULAR KIDS!!!</p>
     

    <h4>
        May 31-June 1 at 730PM<br />
        June 2 at both 2PM and 730PM<br />
        June 3 at 2PM
    </h4>

     <p class='reservation_line'>
       <?php
         $temp=explode(".",basename(__FILE__));
         $the_show=$temp[0];  
  
         reservation_print_yes_no($the_show,$years_numbers,$date_array);
        ?>
     </p> 

    <h5>Directed by Brenda Shows</h5>
     
    <?php echo "<img src=" . $showImage . " title=\"Shrek\" alt=\"Shrek\"/>"; ?>
                         
    <p>
       Beauty is in the eye of the <b><i>ogre!!!</i></b>  It's a "big bright beautiful world" as everyone's
       favorite ogre, Shrek, leads a cast of fairytale misfits on an adventure to rescue a princess and
       find true acceptance.  
    </p>

    <p>
     It's a super funny musical that's also very romantic - perfect for the whole family.  Come and see 
     just how much the 100 kids from our annual summer camp will make you smile...and laugh...and cry. 
    </p>

    <h4 style="text-align:left;">PERFORMANCES:</h4>

    <p>
      Camp wraps up with five exciting performances:  May 31st and June 1st at 
      730PM, June 2nd at both 2PM and 730PM, and then a Sunday matinee on June 3rd at 2PM.
      <br /><br />
      <a class='call_to_action' 
         href="<?php echo "$relative_path" ?>pages/casts.php?years=<?php echo "$years_numbers";?>#shrek">
         Click here for our <em>SHREK</em> cast list.
      </a>
    </p>    
</div><!-- close of 'show' div -->