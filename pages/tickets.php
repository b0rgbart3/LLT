<?php session_start();
include_once "../functions/set_session_vars.php";
include_once "header.php";
?>
     
<div class='page group'>
    <div class="sidebar">
      <div class="sBox">
        <?php include_once "../functions/add_to_mailing_list.php";?>
      </div>
    </div>   
            
    <div class='main group'>
        <div class='headBanner'>LLT TICKET INFO</div>
        <div class='main_content padMe'>
          It's soooooooo very easy to get your tickets for our shows.  You don't actually have to worry about trying to 
          order or pick up tickets ahead of time.  We simply take reservations for each performance for the number of seats
          we have in the theatre and then you pay for your ticket at the door when you get there that night.  It's as easy 
          as that!  One phone call to reserve your seats and then just show up at the Arabian.
          <br /><br />
          <h4 style="text-align:left;">A couple of guidelines.....</h4>
          <br />

          <ul style="list-style-type:square;">
            <li>The reservations number only works the week of each show.  That number is 
                <strong><?php echo $_SESSION['llt_phone']?>.</strong></li>
            <li>
                The auditorium doesn't open until half-hour before the show.  We do not use assigned seats--it's all general
                admission. First-come-first-seated.
            </li>
            <li>
                In case the show is sold out you would want to be at the theatre 20-30 minutes before showtime to 
                insure you get seats together.  Arriving late might mean only single seats here and there.
            </li>
            <li>Reservations not claimed 15 minutes before curtain could be forfeited and given to any wait-listed folks</li>
            <li>
                Please call back and cancel your reservation if you see that you can't make it.  Allow us to let other
                people in and not have empty seats.
            </li>
            <li>Our box office accepts cash, local personal checks, VISA and MASTERCARD.</li>
            <li>
                Our first three productions this year will all run for two weekends with performances on Friday and 
                Saturday nights at 7:30pm, and then a Sunday matinee each weekend at 2pm.  The Kid’s Camp show runs just
                one weekend Thursday-Sunday.
            <!-- 
                Most of our shows run just four performances over one weekend.  7:30pm curtain on Thursday, Friday, Saturday 
                nights and then we close with a 2pm matinee on Sunday afternoons.  But always call the reservations line to 
                check schedule since some of our shows may have less or more performances or different performance times.
            -->
            </li>
            <li>
                You can always try to come in as a walk-up without a reservation and often you can get in without a problem. 
                But some of our performances are fully reserved and you're less likely to get in on a wait-list if that 
                happens.So always a better idea to call in ahead of time if you can.  Our musicals and our children's shows
                usually perform to pretty full houses.
            </li>
            <li>You can email any questions to 
            <?php echo "<a href=\"mailto:" . 
                       $_SESSION['llt_email'] . 
                       "\">" . 
                       $_SESSION['llt_email'] . "</a>"
            ?>
            </li>
            <li>
              <a href="../images/brochures/brochure60.pdf" 
                 target="_blank" 
                 rel="noopener noreferrer nofollow">
                 CLICK HERE to download this season's brochure to your desktop
              </a>
            </li>
        </ul>
     
        <br />
        <h4 style="text-align:left;">REGULAR SEASON MEMBERSHIPS</h4>
        <br />
        
        <ul class="llist">
            <li>You get four punches on your season ticket and can use one or two punches per show. 
                <!-- Silent Movie Night is included in addition to your four punches. -->
                </li>
            <li>Adult Season Ticket is $55 for four punches to cover all four shows of the year.</li>
            <li>Senior Citizen / Student Season Ticket is $50 for four punches to cover all four shows of the year.</li>
            <li>Family Season Package is $100 for two full season tickets or $190 for four full season tickets.</li>
        </ul>

        <br />
        <h4 style="text-align:left;">PATRON SEASON MEMBERSHIPS</h4>
        <br />        

        <ul class="llist">
            <li><a href="become_a_patron.php">FOR MORE INFO CLICK HERE</a></li>
        </ul>
        
     </div><!-- Close main content div -->

    </div><!-- Close Main -->

  </div> <!-- Close page -->
  <div style='clear:both'></div>
  <!-- <br clear='all'><br /> -->
  <?php include_once "footer.php"; ?>
</body>
</html>
