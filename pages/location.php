<?php session_start();
include_once "../functions/set_session_vars.php";
include_once "header.php";
?>

<div class='page group'>
  <div class="sidebar"> 
    <div class='sBox'>
      <?php include_once "../functions/add_to_mailing_list.php";?>
    </div>
  </div>   
            
  <div class='main group'>
    <div class='headBanner'>OUR LOCATION</div>
      <div class='main_content'>
        <div style="text-align:center;">
          408 North 5th Avenue, Laurel, Mississippi.<br />
          (601) 428-0140<br />
          Email: 
          <?php echo "<a href=\"mailto:" . $_SESSION['llt_email'] . "\">" . $_SESSION['llt_email'] . "</a>" ?>
          <br /><br />
          Click Map to go to Google Maps<br />
        <br />
        <a href="https://www.google.com/maps/place/Laurel+Little+Theatre/@31.693705,-89.131124,17z/data=!3m1!4b1!4m2!3m1!1s0x0:0x77dbbf142eee24dc?hl=en" target="_blank" rel="noopener noreferrer nofollow">
<img src="../images/newmap2.png" style="border:0;width:540px;" alt="goolge map" title="goolge map"/>
        </a>
        </div>           
        <br /><br />
        <h4>DIRECTIONS TO THE ARABIAN THEATRE</h4>
        
        <br />
        <u>FROM THE SOUTH:</u>
        <br />
        
        <ul>
          <li>Go NORTH on I-59 and reaching Laurel take the Beacon Street Exit #95C</li>
          <li>At the end of the exit ramp, go LEFT on Beacon Street and continue for about 1 mile</li>
          <li>Turn RIGHT onto Commerce Street and go one long block to 5th Avenue</li>
          <li>Turn LEFT onto 5th Avenue and go two blocks</li>
          <li>The Arabian Theatre is at 408 5th Avenue on your LEFT side, directly across from City Hall</li>
        </ul>

        <br />
        <u>FROM THE NORTH:</u>
        <br />

        <ul>
          <li>Go SOUTH on I-59 and reaching Laurel take the<br /> US-84/Chantilly Street Exit #97</li>
          <li>
            At the end of the ramp, veer to the RIGHT onto Chantilly Street and go the three blocks until 
            Chantilly ends at US-11/Susie Ruffin Blvd
          </li>
          <li>Turn LEFT onto US-11/Susie Ruffin Blvd. going South</li>
          <li>Follow the signs for US-11 South for about 1 mile until you reach Oak Street in Downtown</li>
          <li>Turn RIGHT onto Oak Street and go two blocks until you reach 5th Avenue</li>
          <li>Turn RIGHT onto 5th Avenue and go two more blocks</li>
          <li>The Arabian Theatre is at 408 5th Avenue on your LEFT side, directly across from City Hall</li>
        </ul>
        
        <br />
        <u>FROM THE EAST:</u>
        <br />

        <ul>
          <li>
            Go WEST on US-84 and reaching Laurel you will go under I-59 and go three more blocks until the 
            road ends at US-11/Susie Ruffin Blvd.
          </li>
          <li>Turn LEFT onto US-11/Susie Ruffin Blvd. going South</li>
          <li>Follow the signs for US-11 South for about 1 mile until you reach Oak Street in Downtown</li>
          <li>Turn RIGHT onto Oak Street and go two blocks until you reach 5th Avenue</li>
          <li>Turn RIGHT onto 5th Avenue and go two more blocks</li>
          <li>The Arabian Theatre is at 408 5th Avenue on your LEFT side, directly across from City Hall</li>
        </ul>
        
        <br />
        <u>FROM THE WEST:</u>
        <br />

        <ul>
          <li>Go EAST on US-84 and follow it thru Laurel at it becomes 5th Street</li>
          <li>
            Follow 5th Street as it has a slight VEER to the RIGHT and then go on past Mason Street as 
            5th Street becomes SawMill Road.  SawMill Mall is on your right at the intersection of Mason &amp; 
            SawMill Road.
          </li>
          <li>Keep going STRAIGHT as 5th Street becomes SawMill Road.</li>
          <li>
            As SawMill Road reaches Beacon Street intersection, go through the red light with a very slight 
            VEER to the RIGHT and that will be Central Avenue.
          </li>
          <li>Go one long block on Central Ave until you reach 5th Avenue</li>
          <li>Turn LEFT onto 5th Avenue and go two blocks</li>
          <li>The Arabian Theatre is at 408 5th Avenue on your LEFT side, directly across from City Hall</li>
        </ul>
               
      </div><!-- Close main content div -->
    </div> <!-- end of div main --> 
  </div> <!-- Close page -->

<?php include_once "footer.php"; ?>

</body>
</html>
    
