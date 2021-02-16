<?php
function reservation_text($opens_date_obj,$last_show_date_obj) 
{   
  #######################################################
  # convert the reservation line open date from numbers # 
  # to a month and day string such as "March 29"        #
  #######################################################

  $opens_date_time=$opens_date_obj->format('Y-m-d_H:i');
  $last_show_date_time=$last_show_date_obj->format('Y-m-d_H:i');

    if (is_time_now_less_than($opens_date_time)){
        $month=(int)substr($opens_date_time,5,2);
        $day=(int)substr($opens_date_time,8,2);
        
        switch ($month)
          {
              case 1:  $date_string="January " . $day; break;
              case 2:  $date_string="February " . $day; break;
              case 3:  $date_string="March " . $day; break;
              case 4:  $date_string="April " . $day; break;
              case 5:  $date_string="May " . $day; break;
              case 6:  $date_string="June " . $day; break;
              case 7:  $date_string="July " . $day; break;
              case 8:  $date_string="August " . $day; break;
              case 9:  $date_string="September " . $day; break;
              case 10: $date_string="October " . $day; break;
              case 11: $date_string="November " . $day; break;
              case 12: $date_string="December " . $day; break;
          }
         echo<<<REZ
                   <span style="color: #ffc40c;">
                       Reservation line opens 
                          <span class='reshi'>$date_string</span> 
                      and answers 24 hours a day at 
                          <span class='reshi'>{$_SESSION['llt_phone']}</span>
                  </span>
REZ;
      }
      elseif (is_time_now_less_than($last_show_date_time)){

          ###  DON'T PRINT AFTER LAST SHWOW

          echo<<<REZB
              Reservation line is <span class='reshi' style="color: #ffc40c;">OPEN NOW</span> and answers 24 hours a day at <span class='reshi'>{$_SESSION['llt_phone']}</span>    
REZB;
      }
}

function reservation_print_yes_no($the_show,$years_numbers,$date_array)
{
    ####################################################################
    # Look at the current season's years and the show years and decide #
    # if the resevation line information should be displayed or not.   #
    ####################################################################
      
    # locate any single hash key for this associative array ( any key is ok )
    # $hold_key will contain the years from the dates.data file [ currnt season ]
    # ( 2018 for example )

    $hold_key='';
    foreach ($date_array as $key => $value){
      $hold_key=$key;
      break;
    }
       
    # if the show blurb is part of the current season, process the reservation line text
       
    # because this is an include we dig up the full path for this file differently
    # using "stream_resolve_include_path" with 'this file name' as parm using $check_this_file 
    # which is a parm populated by __FILE__
    
    # we cant use $_SERVER('SCRIPT_FILENAME'). that returns the path of the file in the 
    # navigation bar
           
    # $temp=explode(".",basename(stream_resolve_include_path($check_this_name)));
    # $the_show=$temp[0];  

    # $years_numbers will contain the season that was set before this routine was called.
    # The value will typically come from the setting in the set_session_vars file 
    # ( where it is defaulted to current season ) OR it will be the season as chosen
    # from the seasons.php pulldown menu and set from the Query string when the 
    # seasons.php page displayed coming from $_GET['years']
     
    # Here we compare the current season years with the years for the show being displayed.
    # If the years MATCH, then we procede to the reservation_text routine in this php file
    # for more processing 
        
    if (substr($date_array[$hold_key]['season'],0,4) == substr($years_numbers,0,4)){
      reservation_text($date_array[$the_show]['reserve'],$date_array[$the_show]['last_show']);
    }    
}
?>
