<!-- Note
  I use the "ClearFix" -group css class which will make divs stretch to 
  accommodate all of the content within them, so you don't end up with 
  bogus divs that are only 1px tall.  
-->

<?php 
# ini_set('display_errors',1);
# error_reporting(E_ALL|E_STRICT);

#--------------------------------------------------------------------
# Start of main logic for page
#--------------------------------------------------------------------
#       
# while the left column is set to rotate 2 colors, the right column 
# rotates 3 colors.

?>

<div class="sidebar group"> 
<?php

# go to llt/homepage/left_boxes.  Sort the list of files in the directory and 
# one by one, include each one into the  left colunm
# The files for the left column are located in llt/homepage/left_boxes
    
  display_boxes(dirname(__FILE__) . "/left_boxes",$date_array,0);
?>
</div> <!-- End of SideBar -->
