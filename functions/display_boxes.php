<?php 
function display_boxes($directory,$date_array,$sort_order)
{
  #########################################################################
  # The files for the LEFT column are located in homepage/left_boxes      #
  # The files for the RIGHT columen are located in homepage/right_parts   #
  #-----------------------------------------------------------------------#
  # using the directory name and a forward sort order, the routine gets   #
  # list of files in alphabetical order and one by one, uses include_once #
  # to assemble the parts of the left column                              #
  #                                                                       #
  # The routine also drops out the index file from the list and also      #
  # drops out any file that does not end in .php or .html                 #
  #########################################################################
  
  $box_number=0;
  $boxes = scandir ( $directory,$sort_order);  # $sort_order = 0 -> forward / $sort_order = 1 -> reverse 
  $count=count($boxes);

# keep only html and php files  

  for ($i=0; $i<$count; $i++){
     if ((substr($boxes[$i],-5) != '.html') && (substr($boxes[$i],-4) != '.php')){
       unset($boxes[$i]);
       continue;
     }

     if ((basename($boxes[$i]) == 'index.html') || (basename($boxes[$i]) == 'index.php')){
       unset($boxes[$i]);
       continue;
     }
  }
 
# compress the array to only the remaining data

  $boxes=array_values($boxes);
  $count=count($boxes);

# display all the left column boxes in appropriate sort order

  print "\n<!-- start including html/php documents for left column -->";
  
 for ($i=0; $i<$count; $i++){
   print "\n<!-- including: $boxes[$i] -->\n\n";

   include_once("$directory/$boxes[$i]");

   print "\n<!-- end of: $boxes[$i] -->";
  } 

  print "\n\n<!-- End includes of html/php documents for left colum -->\n\n";
}
?>