<?php 
function is_time_now_less_than($trigger_date_time) 
{
  # This function obtains the date and time ( Laurel Miss Time ) as of right now.
  # and compares it with the trigger date and time for an action to happen or not happen.

  # Date format: date("Y-m-d_H:i");  [ Year-Month-Day_Hours:Mins ( including leading Zeros ) ]

  date_default_timezone_set($_SESSION['timezone']); // CDT. ( Set timezone to Laurel Mississippi )

  # if date / time as of right now is less than the $trigger_date_time, return TRUE
  
  #print $_SESSION['timezone'] . ": " . date("Y-m-d_H:i") . "<br />\n";       

  return (strcmp(date("Y-m-d_H:i"),$trigger_date_time) < 0 ? TRUE : FALSE);  # $var=(test ? true : false);
}
?>
