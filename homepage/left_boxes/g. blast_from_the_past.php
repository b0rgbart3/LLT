<!-- Eleventh Box -->
<?php
  # The Boxes below will rotate color highlight as programmed in decide_class.php file.
  # The function is in memory as the index.php loads it and it can be used here.
  #
  # You must use ++$box_number.  NOT $box_number++.  One works. The other doesn't.
  # I Think it is because the ++$box_number has the increment happen BEFORE the call
  # and $box_number++ will happen AFTER the call
?>

<div class='<?php print decide_class_name(++$box_number,2)?>'>
    <p class="title"><span>BLAST FROM<br />THE PAST</span></p> 
    <br />
    <span style="font-weight:bold; color:#3fd4a1;">ROYAL THEATRE</span>

    <p class="columntext">
      Lloyd Royal built many movie theatres around Mississippi in the 1940s and 1950s
      - including the Royal Drive-In just off Interstate 20 in Meridian.  During that 
      time, Mr. Royal also built a Royal Theatre in Laurel, and he became the owner 
      of the Arabian Theatre for a spell.
      <br /><br />
      Next door to the Meridian Royal Drive-In, Mr. Royal constructed Royal Land theme 
      park in 1965 mostly using old rides from touring State Fairs.  The park operated
      just a couple years, and the Drive-In closed in 1985. 
      <br /><br />
      LLT Board member Rick Youngblood recently found this old piece of stationary.
      <br /><br />
      <a href="photos/Other%20Old%20Laurel%20Theatres/slides/royal%20theatres.html"> 
         <img src="homepage/images/royal_theatres_small.png"
              style="width:140px;" 
              alt="Royal Theatres Stationary"
              title="Royal Theatres Stationary">
      </a>

      <p class="caption">Click image to enlarge.</p>
      <br />
      Royal Land is long closed and run down.  It's a private property and off-limits, but you
      can read a great history of the property and find photos and video 
      <br />
      <a href="https://theabandonedcarousel.com/royal-land/"
         target="_blank"
         rel="noopener noreferrer nofollow">
         <span style="color: #ffc40c;">CLICK HERE</span>
      </a>
      <br /><br />
      <a href="homepage/images/Royal_Land.png"> 
         <img src="homepage/images/Royal_Land_small.png"
              style="width:140px;" 
              alt="Royal Land"
              title="Royal Land">
      </a>
    </p>

    <hr>
    
    <span style="font-weight:bold; color:#3fd4a1;">PINEHURST HOTEL COLLECTION</span>

    <p class="columntext">
        Our million-dollar fund raiser to build the new PINEHURST ROOM addition to the 
        Arabian is now getting close to the 25% mark!  We'll break ground once we 
        reach 50%.  Please consider donating or making a pledge to be a part of this 
        and you'll secure your own engraved tile that will be included on a 
        wall in the new lobby extension.  Drop a line to 
        <?php echo "<a href=\"mailto:" . 
                   $_SESSION['llt_email'] . 
                   "\"> <span style=\"font-size:80%\">" . 
                   $_SESSION['llt_email'] . "</span></a>"
        ?>
        
        for more info.
        <br /><br />
        A collection of old Pinehurst Hotel items will be on display in the new 
        room. we've already collected a handful of things - let us know if you have any old items.
    </p>

    <hr>

    <span style="color:#3fd4a1;font-weight:bold;">2009-Arabian Proscenium Arch</span>
    <br /><br />

    <a href="photos/Arabian%20-%20Pinehurst/2009%20Arabian%20Interior/slides/prosc1.html"> 
    <img src="homepage/images/prosc1_small.png" style="width:140px;" 
         alt="Pinehurst Interior" title="Pinehurst Interior">
    </a>

    <p class="caption">Click image to enlarge.</p>

    <hr>

    <span style="color:#3fd4a1;font-weight:bold;">1920s<br />PINEHURST HOTEL</span>
    <br /><br />

    <a href="photos/Arabian%20-%20Pinehurst/slides/1920%20PinehurstBeforeArabian.html">
    <img src="photos/Arabian%20-%20Pinehurst/1920%20PinehurstBeforeArabian.jpg" style="width:140px;"
         alt="Pinehurst Before Arabian" title="Pinehurst Before Arabian">
    </a>

    <br />
    <p class="caption">Click image to enlarge.</p>
    <br />

    <p class="columntext">
        A great old post card photo of the Pinehurst Hotel from back in the 20s.  This was before an 
        addition in 1927 added extra hotel rooms over to the right along with the Arabian Theatre 
        right behind them.  The Pinehurst was demolished in 1988, but we've just kicked off our 
        fund raiser to build our own PINEHURST ROOM addition to the Arabian--right where the old 
        hotel used to stand.  We'll even recreate the old secret side entrance that used to allow 
        hotel guests to go straight into the theatre from right inside the hotel!
    </p>
    <hr>
    <!-- end of blast from the past photos -->

    <a href="photos/index.html">
    Click here to see our entire collection of LLT and Arabian photos.
    </a>

    <p class="sidecolumntitle">GOT ANY OLD PHOTOS OR STORIES OF LLT OR THE ARABIAN???</p> 
    <span style="font-size:95%">
    We're looking for more old pictures of the Arabian Theatre, or any of the over 
    200 shows we've produced at LLT over the last five decades.  If you have any, you 
    can scan and email it to us at 
    <?php echo "<a href=\"mailto:" . 
               $_SESSION['llt_email'] . 
               "\"> <span style=\"font-size:80%\">" . 
               $_SESSION['llt_email'] . "</span></a>,"
    ?>
    or drop a line and we'll just borrow it long enough to make a copy and return the original to you.
    If you have a great story you'd like to share, write it up and send it on. We'll be sharing 
    throughout the season on our website.
    </span>
</div> 

<!-- Close of Eleventh Box -->
