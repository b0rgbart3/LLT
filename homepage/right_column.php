<!-- RIGHT SIDE OF PAGE STARTS HERE -->
<div class='main group'>
<img src="homepage/images/60th_15.jpg"
     alt=""
     title=""
     style="width:100%;">

<?php 
  if (array_key_exists('doublewide',$date_array) and 
   (is_time_now_less_than($date_array['doublewide']['last_show']->format('Y-m-d_H:i')))){
    echo<<<GP1
    <div class="popBox3 group">
      <h2><b> HELP!  WE NEED SOME USHERS!</b></h2>
	  <br />
	  <p style="text-align:left">
        Our LLT Membership & Tickets chairman, Steve Guy, needs some extra volunteers to usher and help front of the 
        house.
        <span style="font-weight:bold; font-style:italic;color:#ffffff;">DOUBLEWIDE, TEXAS</span>
        opens soon - and runs the last two weekends of January.  He needs some hands for 
        the one hour before curtain to help get the audiences through the box office and
         ticketing, and then also to help with seating inside.  Please drop us a line at
        <a href="mailto:{$_SESSION['llt_email']}">{$_SESSION['llt_email']}</a>
       if you can pitch in a few days (or even for the whole run).
	</p>
</div> 
GP1;
}
?>

<div style="font-weight:800;
            border:4px solid green;
            border-radius:18px;
            box-sizing:border-box;
            padding:14px;
            margin-bottom:20px;
            font-size:.8em;
            line-height:1.6;
            background-color:rgba(0,0,0,.1);">
    <h1>OUR NEW COVID SAFETY PRECAUTIONS</h1>
    <p>
      Keeping safety in mind as a top priority for our audiences and our volunteers, extra 
      precautions this year include: limited audiences under 50% capacity with marked off 
      rows and empty seats between each couple/family, masks (bring your own, please!) 
      and distancing required, no admittance with visible illness/coughs/sneezing, temperature
      checks at the door and hydrostatic disinfectant cleaning of the theatre before each 
      performance.
    </p>
        </div>

    <p class='headBanner'>NEXT UP ON OUR STAGE</p>

    <div id='newseason' class='main_content'>

        <!-- Temporary Covid 19 Info -->


        <!-- End Temporary Covid 19 Info -->



        <?php 
         ######################
         # The Current Season #
         ######################
         
         # ( Shows will drop off page automatically half hour after final performance begins )
         
        #########################
        # Season Opener Message #
        #########################
        
        if (is_time_now_less_than("2020-06-30_14:30")){
          include_once $_SESSION['data_dir'] . '/shows/'. $_SESSION['how_many_years'] . '/season_intro.php';
        }
       

        ##################################
        # Annual Kids' Camp Announcement #
        ##################################

        # include_once $_SESSION['data_dir'] . '/shows/'. $_SESSION['how_many_years'] . '/kids_camp_announce.php';

        ###########################################################
        # Note - Here is the start of the new 60th season's shows #
        ###########################################################

       # echo "<div class='tempDiv'> This is where the show listings will appear.</div>\n\n";
       
       #############################################################################
       # Use 2019 blurb for kids' camp as we only want ONE copy of the content and #
       # at the time the 2020 season is 'go-live' the Kids' camp hasn't finished.  #
       #############################################################################
       
       /* 
       if (array_key_exists('wonka_jr',$date_array) and 
          (is_time_now_less_than($date_array['wonka_jr']['last_show']->format('Y-m-d_H:i')))){       
          include_once $_SESSION['data_dir'] . '/shows/' . ($_SESSION['how_many_years'] - 1) . '/wonka_jr.php';
        }
       */
                
       ##################
       # Annual Meeting #
       ##################

          if (is_time_now_less_than("2019-06-10_18:00")){
            echo<<<LLT
              <div id="meeting" class='show group'>

                <h2>ANNUAL MEMBERSHIP MEETING<br />JUNE 10TH</h2>
                <p>
                  LLT’s annual membership meeting and election of officers will take place on Monday, 
                  June 10th at 5:30pm.  Anyone who bought a season ticket membership for this past year 
                  is welcome to attend the short meeting.
                </p>
              </div>
LLT;
        }

        #######################################################################################
        # this can be simplified using data from $show_for_carousel which is loaded when the  #
        # functions/dates.php script. This sets up and INITIAL set of .php files to display   #
        # a loop can be used now to display the Season's Shows in order with less hard-coding #
        #######################################################################################
        
        #####################################################################################################
        # here is an example of how $show_for_carousel array is populated                                   #
        #---------------------------------------------------------------------------------------------------#
        # $show_for_carousel=array("season_plate","hello_dolly","broadway_bound","doublewide","wonka_jr");  #
        #####################################################################################################

        $shows_for_home_page=$show_for_carousel;   
                                
        # Insert one-off's and movies as needed on home page
        
        # array_splice($shows_for_home_page,$insert_at_pos,$remove_how_many,$what_to_insert);
           
        ##################################################
        # Display each show on the top of the right side #
        ##################################################
        
        foreach ($shows_for_home_page as $one_show){
          if ($one_show=="season_plate"){  continue; }
          
          if (array_key_exists($one_show,$date_array) and 
             (is_time_now_less_than($date_array[$one_show]['last_show']->format('Y-m-d_H:i')))){
            include_once $_SESSION['data_dir'] . "/shows/" . $_SESSION['how_many_years'] . "/" . $one_show . ".php";
          }
        }
         
        #########################################################
        # Display each Info Box on the bottom of the right side #
        #########################################################
         
        # The Boxes below will rotate color highlight as programmed in decide_class.php file.
        # The function is in memory as the index.php loads it and it can be used by left_column.php
        # and this file (right_column.php)
         
        # while the left column is set to rotate 2 colors, the php files below rotate 3 colors.
  
        $box_number=0;
        
        # go to llt/home_page/right_parts.  Sort the list of files in the directory and 
        # one by one, include each one into the  right colunm
        # The files for the right column are located in llt/homepage/right_boxes
    
        display_boxes(dirname(__FILE__) . "/right_boxes/",$date_array,0);
      ?>
    </div> <!-- close of 'content' div -->
</div> <!-- close of 'main' div -->

