<?php

# West Requested a image randomize on pages

$rand_int=rand(0,3);
if ($rand_int == 0 ){
  $rand_int++;
}
if ($rand_int == 3 ){
  $rand_int--;
}
if ($rand_int == 1 ){
  $image_choice="../images/arabian.gif";
}
else{
  $image_choice="../images/arabian_sign3.png";
}

#print_r($rand_int);
#print "<br /><br />";
#print_r($image_choice);
#print "<br /><br />";

echo<<<MLR
   <img src="{$image_choice}" alt="" title="" />
   <br /><br />
   <p class="special">
     Would you like to receive email reminders of our upcoming productions and auditions?
    <br /><br />
    <a href="mailto:{$_SESSION['llt_email']}?subject=Add%20me%20to%20LLT's%20mailing%20list&amp;body=Hi%0d%0a%0d%0aPlease%20add%20me%20to%20LLT's%20mailing%20list.%0d%0a%0d%0aThank%20you.%0d%0a">
       Click here to be added to our mailing list
    </a>
  </p>
 
MLR;
?>
