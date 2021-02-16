<!-- Marda Box -->
<?php
  # The Boxes below will rotate color highlight as programmed in decide_class.php file.
  # The function is in memory as the index.php loads it and it can be used here.
  #
  # You must use ++$box_number.  NOT $box_number++.  One works. The other doesn't.
  # I Think it is because the ++$box_number has the increment happen BEFORE the call
  # and $box_number++ will happen AFTER the call
?>
<div class='<?php print decide_class_name(++$box_number,2)?>' style="font-size:0.9em;">
    <br />
     <em>
        MARDA BURTON
     </em>
     <br /><br />
        <a href="homepage/images/marda_burton.jpeg" target="_blank" rel="noopener noreferrer nofollow"> 
        <img src="homepage/images/marda_burton.jpeg"
             style="width:135px;"
			 alt="Marda Burton"
             title="Marda Burton"/>
    </a>
    <br />
         We sadly note the passing of one of the
         <span style="font-weight:bold;font-style:italic;">
           original
         </span>
         founders of Laurel Little Theatre.  Marda Burton
         and a small handful of local theatre lovers organized our group back in 1961 at a small meeting at 
         the Pinehurst Coffee Shop.  Marda became our very first board president and she also directed and 
         acted in many of our productions.  For six decades, she was a constant source of support to all of
         us.  Even at our most recent production, she stuck around after the curtain call to talk to a 
         circle of actors and friends, regaling us with old stories and words of encouragement.  A fitting
         <span style="font-style:italic;">final-curtain</span> memory for so many of us!
    <br />
</div>

<!-- Close of Marda Box -->
