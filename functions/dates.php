<?php
  /*
    ini_set('display_errors',1);
    error_reporting(E_ALL|E_STRICT);
 */

  # because this is an include we dig up the full path for this file differently
  # using "stream_resolve_include_path" with 'this file name' using  __FILE__
  
  # we cant use $_SERVER('SCRIPT_FILENAME'). that returns the path of the file in the 
  # navigation bar

  $show_for_carousel=array("season_plate");
  $dates_php_file=basename(stream_resolve_include_path(__FILE__));
  $data_files_dates = $_SESSION['data_dir'] . '/dates';
  $dates = scandir ( $data_files_dates,1);	
  $count=count($dates);
  
  # drop out all files we don't want 

  for ($i=0; $i<$count; $i++){
	
 	  if (strlen($dates[$i]) < 5){
	    unset($dates[$i]);
	    continue;
	  }
	
      if (substr($dates[$i],-5) != '.data'){
	    unset($dates[$i]);
      }
  }

# compress the array to only the remiinding data

  $dates=array_values($dates);

  #print_r($dates);
  #print "<br />\n";

  $file_name=strtolower($dates[0]);	

  $unix_file = $data_files_dates . '/' . $file_name;
 
  if ( ! file_exists($unix_file)){
    $file_name=strtolower($dates[0]);		
    $unix_file = $data_files_dates . '/' . $file_name;
  }
  
  $file_read_handle = fopen($unix_file, "r");

  while (! feof($file_read_handle)) {   
    $line = chop(fgets($file_read_handle));
    $line=trim($line);
  
    if (strlen($line) < 1){
     continue;
    }

    if (strtoupper(substr($line,0,1)) == "#" ) {
     continue;
    }
	
    #############
    # show name #
    #############
    
    $pieces = explode("|", $line);
    $show_name=trim($pieces[1]);
    
    #######################
    # Season such as 2018 #
    #######################
    
    $date_array[$show_name]['season']=trim($pieces[0]);    
    
    #############################################################
    # load the $show_for_carousel array                         #
    #( different array from the Dates Array )                   #
    #                                                           #
    # $show_for_carousel is used by functions/load_carousel.php #
    # $date_array is used throughout the site for date/time     #
    #             event processing                              #           
    ############################################################# 
    # [array("season_plate","hello_dolly","broadway_bound","doublewide","wonka_jr");
    
    if (count($show_for_carousel) < 5){
        array_push($show_for_carousel,$show_name);
    }   
            
    ###############################
    # Last Audition date and time #
    ###############################
    
    $date_array[$show_name]['last_audition']=DateTime::createFromFormat('Y/m/d H:i', trim($pieces[2]),new DateTimeZone($_SESSION['timezone']));
    
    ############################
    # First Show date and time #
    ############################

    $date_array[$show_name]['first_show']=DateTime::createFromFormat('Y/m/d H:i', trim($pieces[3]),new DateTimeZone($_SESSION['timezone']));
    
    #############################################
    # Reservation Line Open date and time       #
    # This is Calculated and added to the array #
    #############################################

    # Using First Show data, change the hours and minutes to 00:00 
    # before setting up the reservation line value into memory
    
    $reserve_time_string=trim($pieces[3]);

    $reserve_time_string=substr($reserve_time_string,0,(strlen($reserve_time_string) - 5)) . "00:00";
    $date_array[$show_name]['reserve']=DateTime::createFromFormat('Y/m/d H:i', $reserve_time_string,new DateTimeZone($_SESSION['timezone']));
    
    ###########################
    # Last Show date and time # 
    ###########################
    
    $date_array[$show_name]['last_show']=DateTime::createFromFormat('Y/m/d H:i', trim($pieces[4]),new DateTimeZone($_SESSION['timezone']));

    ####################################
    # make adjustments to time.        #
    # settings in the Date Array Entry #
    ####################################
    
    $date_array[$show_name]['last_audition']->modify('+30 minutes');
    $date_array[$show_name]['reserve']->modify('-7 days');
    $date_array[$show_name]['last_show']->modify('+30 minutes');
    
/*
    echo "*****************************************************<br />\n";
    echo $line .  "<br />\n";
    echo "-----------------------------------------------------<br />\n";
    echo "          Season: " . $date_array[$show_name]['season'] . "<br />\n";
    echo "            Show: " . $show_name . "<br />\n";
    echo "   Last Audition: " . $date_array[$show_name]['last_audition']->format('Y-m-d_H:i') . "<br />\n";
    echo "      First Show: " . $date_array[$show_name]['first_show']->format('Y-m-d_H:i') . "<br />\n";
    echo "Reservation Line: " . $date_array[$show_name]['reserve']->format('Y-m-d_H:i') . "<br />\n";
    echo "       Last Show: " . $date_array[$show_name]['last_show']->format('Y-m-d_H:i') . "<br />\n";
    echo "*****************************************************<br /><br />\n";
*/
  }
  
# echo var_dump($show_for_carousel) . "<br />\n";
 
  fclose($file_read_handle);
?>
