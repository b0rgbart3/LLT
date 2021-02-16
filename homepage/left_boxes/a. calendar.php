<?php
  # The Boxes below will rotate color highlight as programmed in decide_class.php file.
  # The function is in memory as the index.php loads it and it can be used here.
  #
  # You must use ++$box_number.  NOT $box_number++.  One works. The other doesn't.
  # I Think it is because the ++$box_number has the increment happen BEFORE the call
  # and $box_number++ will happen AFTER the call
?>

<!-- First Box -->

<div class='<?php print decide_class_name(++$box_number,2)?>'>
    <h2>COMING UP AT THE</h2>
            
    <img src="homepage/images/arabian.jpg" style="max-width:94%;" alt="" title="">
    <hr>
    
<?php

# if the date and time for today is less than last_show 
# in /pages/dates/dates.data (+30 mins), print the info
# using a HERE Document


if (array_key_exists('doublewide',$date_array) and 
   (is_time_now_less_than($date_array['doublewide']['last_show']->format('Y-m-d_H:i')))){
    echo<<<DW1
    <h1>A SOUTHERN-FRIED TRAILER PARK COMEDY</h1>
    <h2>Doublewide, Texas</h2>
    <h3 style="color:#ffc832;font-weight:bold">
       Jan 22-24 &amp; 29-31
    </h3>
    <br />
    <hr>
DW1;
}

# if the date and time for today is less than November 23, 2019 @ 7:00 pm
# in /pages/dates/dates.data (+30 mins), print the info
# using a HERE Document

if (is_time_now_less_than("2020-11-23_19:00")){
  echo<<<LLT
  <h1>LLT's</h1>      
  <h2>Annual Membership<br />Meeting</h2>
  <h3 style='line-height:1.3em; margin-top:6px;'>November 23, 2020<br />6 PM</h3>
  <br />
  All Season Members
  Welcome To Attend
  <h3 style="color:#ffc832;font-weight:bold;">
      All Attendees Are Required To Wear A Mask
  </h3>
  <hr>
LLT;
}

# if the date and time for today is less than last_audition 
# in /pages/dates/dates.data (+30 mins), print the info
# using a HERE Document


if (array_key_exists('ongoledenpond',$date_array) and 
   (is_time_now_less_than($date_array['ongoledenpond']['last_audition']->format('Y-m-d_H:i')))){
    echo<<<GP1
    <h1>AUDITIONS</h1>
    <h2>
      ON GOLDEN POND
    </h2>
    <h3 style="color:#ffc832;font-weight:bold;">Feb 1-2</h3>
    <br />
    <a class="call_to_action" href="pages/auditions.php"> 
      <span style="color: #ffc40c; font-size:.9em">
        Click here for
        <!-- <span class='reshi'>ON GOLDEN POND</span><br /> -->
        Info
      </span>
    </a>
    <hr>
    
GP1;
}

# if the date and time for today is less than last_show 
# in /pages/dates/dates.data (+30 mins), print the info
# using a HERE Document


if (array_key_exists('liveatthepo',$date_array) and 
   (is_time_now_less_than($date_array['liveatthepo']['last_show']->format('Y-m-d_H:i')))){
    echo<<<PO1
    <h1>A MISSISSIPPI CLASSIC !</h1>
    <h2>Why I Live<br />At The P.O.</h2>
    <h3 style="color:#ffc832;font-weight:bold">
     Feb 26-28 &amp;<br />Mar 5-7
   </h3>
   <br />
    <hr>
PO1;
}

# if the date and time for today is less than last_show 
# in /pages/dates/dates.data (+30 mins), print the info
# using a HERE Document

/*
if (array_key_exists('doublewide',$date_array) and 
   (is_time_now_less_than($date_array['wonka_jr']['last_audition']->format('Y-m-d_H:i')))){
  echo<<<KC1
    <h1 style="color:white;">
    ANNUAL SUMMER<br />
    KIDS' CAMP
    </h1>      
    <h1><br />
      Willy Wonka jr.
    </h1>
    <h3 style="color:#ffc832;font-weight:bold">
      POSTPONED<br />
      Until May 2021
    </h3>
    <hr>
KC1;
}
*/

?>
</div> 

<!-- Close of First Box -->
