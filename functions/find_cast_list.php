<?php
function find_cast_list($relative_path,$the_show,$years_numbers,$show_name_text,$file_name){   
  $the_cast_file=dirname(substr($file_name,strlen($_SESSION['root'])));
  $the_cast_file = substr($the_cast_file,1);
  $the_cast_file = str_replace( "/shows/","/casts/",$the_cast_file);
  $the_cast_file=dirname($the_cast_file) . "/$years_numbers/*" . explode(".",basename($file_name))[0] . ".*";
    
  ###########################################
  # The cast file is located relative to    #       
  # the directory we are in in the case of  #
  # seasons.php, we are in pages directory  #
  # and have to climb out one directory. so #
  # let's figure out how many times we have #
  # to climb up to find the data directory  #
  ###########################################
  
  $the_dir_path=getcwd();

  while (in_array("pages",explode('/', $the_dir_path))){
    $step_back="../" . $step_back;
    $the_dir_path=dirname($the_dir_path);
  }
    
  $the_cast_file = $step_back  . $the_cast_file;
  
  ####################################
  # search for a cast file in the    # 
  # data/casts/year/ directory the   #
  # and the file wilcard is the name #
  # of the show's php or html file.  #
  # with an asterisk (*) for an      #
  # extension.  The file name search #
  # leads with an asterisk as well   #
  # so the sort order alpha will be  #
  # taken into consideraton.         #
  #                                  #
  # Such as:                         #
  # data/casts/2019/a. hello_dolly.* #
  ####################################

  # search for cast file. If cast list file DOES exist,
  # add a link to the current page ( home page / seasons page )
  # which will take the user to the pages/casts.php page and 
  # utilize the id= for the show location within the page.
    
  if (strlen(glob($the_cast_file)[0]) > 0 ){
    echo<<<CAST
  <p>
    <a class='call_to_action'
       href="{$relative_path}pages/casts.php?years={$years_numbers}#{$the_show}"> 
         Click here for <em>{$show_name_text}</em> cast list.
    </a>
    <br /><br />
  </p>

CAST;
  }
  
  return;
}
?>