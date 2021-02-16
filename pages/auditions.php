<?php 
session_start();
include_once "../functions/set_session_vars.php";
include_once $_SESSION['root'] . "/functions/find_image_file.php";
include_once "header.php";

/*
    ini_set('display_errors',1);
    error_reporting(E_ALL|E_STRICT);
 */

  include_once $_SESSION['root'] . "/functions/dates.php"; 
  include_once $_SESSION['root'] . "/functions/is_time_now_less_than.php";
?>

<!-- I'm loading in this css file in the body because all of these style definitions pertain
     only to the auditions page -->

<link rel="stylesheet" href="../css/auditions_2020.css">

<div class='page group'>
    <div class='headBanner'>LLT AUDITIONS</div>
    <div class='main_content' style="text-align: center;">

<?php
    ##########################################################
    # We use the $show_for_carousel array as loaded from the #
    # functions/dates.php script to produce the audition     #
    # display order. We no longer have sort crtiteria on the #
    # file names in the data/audtions directory which        #
    # required clean up to match against the date file info  #
    ##########################################################  
    
    # here is an example of the $show_for_carousel 
    # $show_for_carousel=array("season_plate","hello_dolly","broadway_bound","doublewide","wonka_jr");

    # remember the blurbs for the auditions are different than the show advertising blurb used on the
    # home page. Even though the files in data/auditions directory have the same names. 
        
    $data_files_auditions=$_SESSION['data_dir'] . '/auditions';
    $audition_files=$show_for_carousel;  
    
    $show_count=0;
    $count=count($audition_files);

    for ($i=0; $i<$count; $i++){

      # drop out all files we don't have. based on the names in the 
      # $show_for_carousel. Maybe an audition blurb has not been created yet...
      # one example would be at the beginning of a season, the kids' camp blurb is likely 
      # to not have been written yet.
      
      $show_name=trim($audition_files[$i]);
      
      if ($show_name == "season_plate.php"){
        unset ($audition_files[$i]); 
        continue;
      }

      $audition_files[$i]=$show_name . ".php";
      
      if (! file_exists("$data_files_auditions/$audition_files[$i]")){
        unset($audition_files[$i]);
        continue;
      }
      
      # print $show_name . "<br />\n";
      
      # Remove any shows whose last audition date has past.
      # We don't need to display it's audition info.
      # NOTE: we can only show a MAX of 3 shows on the page at a time.  When show #1 ages out,
      #       show four will come on automatically ( if the information is available )
            
      if ((isset($date_array[$show_name]['last_audition'])) &&    
          (is_time_now_less_than($date_array[$show_name]['last_audition']->format('Y-m-d_H:i'))) && 
          ($show_count < 3)){
        $show_count=$show_count + 1;
      }
      else{ # we won't display this array entry - unset it
        unset($audition_files[$i]);
      }    
    } # end of 'for loop'

    # compress the array to eliminate all unset array elements 

    $audition_files=array_values($audition_files);

    #var_dump($audition_files) . "<br />\n";

    #######################################################
    # adjust the column(s) width and picture width within #
    # the column based on how many columns we have        #
    #######################################################

    switch ($show_count) {
      case 0:
      case 1:
        $width_percent="80%";
        $picture_width='style="width:40%"';
        break;
      case 2:
        $width_percent="35%";
        $picture_width="";
        break;
      default:
        $width_percent="30%";
        $picture_width="";
        break;
    }
    
    ##########################################################
    # if there are no active shows set up for the season,    #
    # (maybe the Kids' Camp is not configured yet). We put   #
    # "Audition Information Coming Soon" file.               #
    #                                                        # 
    #  Otherwise ...                                         #
    #                                                        # 
    # Do an include for each show we want to display.        #
    ##########################################################
    
    #print_r($audition_files);
    #echo "<br />\n";

    if ($show_count == 0 ) {
      $alt_text=ucwords(str_replace("_"," ",explode(".",basename("coming_soon.php"))[0]));
      list ($link,$showImage) = find_image_file($_SESSION['data_dir'] . 
                                                "/shows/" . 
                                                $_SESSION['how_many_years'] . 
                                                "/season_plate.php"); 
      
      include_once $_SESSION['data_dir'] . "/auditions/coming_soon.php";
    }
    else{
      foreach($audition_files as $show_name){
        $alt_text=ucwords(str_replace("_"," ",explode(".",basename($show_name))[0]));
        list ($link,$showImage) = find_image_file($_SESSION['data_dir'] . 
                                                  "/shows/" . 
                                                  $_SESSION['how_many_years'] . 
                                                  "/" . 
                                                  basename($show_name));
        
        include_once $_SESSION['data_dir'] . "/auditions/$show_name";
      }
    } 
?>                  

        <br /><br />

        <div class="sBox">
            Our auditions are usually very laid back and you don't really need to prepare 
            anything. Just come on down and we'll have a simple form you fill in with contact 
            info. Auditioning could be a very scary thing, but we try to keep it as easy-breezy 
            as we can so that newcomers will come join in with us on our productions. 
            <br /><br />
            For play auditions, the show director will have everyone read some scenes, but 
            you don't have to show up with any memorized piece to audition with. 
            <br /><br />
            For musical auditions, you can sing anything you'd like or we'll just 
            teach everyone a short song to sing together. If you bring sheet music, 
            we'll have an accompanist to play for you. You can prepare a song or just 
            sing <i><strong>'Happy Birthday'</strong></i> or the National Anthem or an old 
            hymn or you can wait and learn a group song with everyone else.
        </div> <!-- Close of sBox -->
    </div><!-- Close main_content -->
</div> <!-- Close page group  -->

<div style='clear:both'></div>
<!-- <br clear='all'><br /> -->

<?php include_once "footer.php"; ?>
</body>
</html>
