<?php
  ##############################################################
  # 20190602 This file created to simplify the carousel logic. #
  #          This file along with homepage/carousel.php, will  #
  #          use data/shows/xx/images and /functions/dates.php #
  #          to populate the carousel without requiring any    #
  #          hard-coded logic changes                          #
  ##############################################################
    
  # example of how $show_for_carousel array is loaded from the functions/dates.php script
  
  # $show_for_carousel=array("season_plate","hello_dolly","broadway_bound","doublewide","wonka_jr");

 # print "****************<br />\n";
 # print "0: " . $show_for_carousel[0] . "<br />\n";
 # print "1: " . $show_for_carousel[1] . "<br />\n";
 # print "2: " . $show_for_carousel[2] . "<br />\n";
 # print "3: " . $show_for_carousel[3] . "<br />\n";
 # print "4: " . $show_for_carousel[4] . "<br />\n";
 # print "****************<br />\n";
 # exit;
  
  $links_array=array();
  $image_file_array=array();
  $alt_text_array=array();
  $season_page="pages/seasons.php#";
    
  ###########################################
  # The name portion of the poster image's  #
  # file name MUST match the name of the    #
  # show name in the dates.data file there  #
  ###########################################
  
  foreach($show_for_carousel as $one_show){
    $one_php_file=$_SESSION['data_dir'] . "/shows/" . $_SESSION['how_many_years'] . "/" . $one_show . ".php";
    
    list ($link,$showImage) = find_image_file($one_php_file);  

    if ($link == "season_plate"){
      $link="newseason";
      $link="#" . $link;
    }
    else{
      ########################################## 
      # if the the last performance for a show #
      # has happened, the link in the carousel #
      # is changed to link to the seasons.php  #
      # page instead of the home page          #
      ##########################################
 
      $link=(is_time_now_less_than($date_array[$one_show]['last_show']->format('Y-m-d_H:i')) ? '#' : $season_page) . $link;  
    }     
    
    $link=str_replace('/#','#',$link);

    ############################################
    # Set up Carousel Data                     #
    # Load information in SHOW ORDER           #
    # LATER WE WILL DISPLAY IN CAROUSEL ORDER  #
    # -- These arrangements are different      #
    # The way I am setting it up we can change #
    # the display order at any time separate   #
    # from data loading order                  #
    ############################################

    #################################################
    # Load the data based on info gathered from the #
    # data/dates.data file and data/shows/xx/images #
    # directory                                     #
    #################################################

    array_push($links_array,$link);
    array_push($image_file_array,$showImage);
    array_push($alt_text_array,ucwords(str_replace ("_" , " " , $one_show)));
  }       
?>