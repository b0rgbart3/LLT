<?php
function find_image_file($file_name){
  $link=explode(".",basename($file_name))[0];

  $the_image = dirname( substr($file_name,strlen($_SESSION['root'])));
  $the_image = substr($the_image,1) . '/images/' . $link . '.*';

  ###########################################
  # The image file is located relative to   #       
  # the directory we are in in the case of  #
  # seasons.php, we are in pages directory  #
  # and have to climb out one directory. so #
  # let's figure out how many times we have #
  # to climb up to find the data directory  #
  ###########################################
  
  $the_dir_path=getcwd();

  while (in_array("pages",explode('/', $the_dir_path))){
    $the_image="../" . $the_image;
    $the_dir_path=dirname($the_dir_path);
  }

  ######################################
  # search for an image file in the    # 
  # data/shows/xx/images directory the #
  # search is in data/shows/xx/images  #
  # and the file wilcard is the name   #
  # of the show's php file with an     #
  # asterisk (*) for an extension.     #
  #                                    #
  # Such as:                           #
  # data/shows/59/images/hello_dolly.* #
  ######################################
  
  $answer = glob($the_image)[0];  

  return array($link,$answer);
}
?>