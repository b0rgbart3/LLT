<?php
   date_default_timezone_set("America/Chicago"); 
#  date_default_timezone_set("Europe/London"); 
#  date_default_timezone_set("America/Los_Angeles"); 
#  date_default_timezone_set("Pacific/Honolulu"); 

  $laurel_month=date('m',(int)time());
  $laurel_day=date('j',(int)time());

  #  make a call to unix calender command to get calendar data
  
  $cal_info=array();
  
  exec ("cal -h -m $laurel_month",$cal_info );
  
  print "<table style=\"xborder-collapse:separate;border-spacing:5px\">\n";

  $count=0;
  
  foreach ($cal_info as $one_line){
    $count=$count + 1;
    $one_line=trim($one_line);
    $days=array();
    
    switch ($count) {
      case 1:   # Print the month and the year
        print "  <tr>\n    <td class='patron_header' colspan=\"7\">$one_line</td>\n  </tr>\n";
        break;
      case 2:  # Print the days of the week
        $days=explode(' ',$one_line);
        print "  <tr style=\"text-align:right;\">\n    ";
        
        foreach ($days as $one_day){
          print "<td>$one_day</td>"; 
        }
            
        print "\n  </tr>\n";
        break;
      default:  # print the weeks of the month ( The dates )
        $one_line = preg_replace("/\s+/", " ", $one_line);
        
        $days=explode(' ',$one_line);
        $how_many=count($days);
        
        # First week of month. Pad elements with &nbsp; until element count = 7
        
        if ($count == 3){
          while ($how_many < 7){
            array_unshift($days,'&nbsp;'); 
            $how_many=count($days);  
          }
        }
          
        print "  <tr style=\"text-align:right;\">\n    ";
        
        foreach ($days as $one_day){          
          if ($laurel_day == $one_day){
            print "<td><span class='reshi' style=\"color: #ffc40c;\">$one_day</span></td>";
          }
          else{
            print "<td>$one_day</td>";   
          }
        }    
        
        print "\n  </tr>\n";
        break;
    }
  }
  print "</table>\n";
?>
