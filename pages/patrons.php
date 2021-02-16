<?php session_start();
  include_once "../functions/set_session_vars.php";
  include_once "header.php";

//  ini_set('display_errors',1);
//  error_reporting(E_ALL|E_STRICT);

#---------------#

function start_table(){
   echo "<table  class='patron_table' style=\"border-collapse: collapse; border-spacing: 0px;\">\n";
} 

#---------------#

function print_section_header($col_count,$heading){
  if ($col_count == 0) {
    echo "<tr><td class='patron_header'>$heading</td></tr>\n";
  }
  else{
    echo "<tr><td class='patron_header' colspan=\"$col_count\">" . $heading ."</td></tr>\n";
  }
}

#---------------#

function print_one_image($link,$patron_image,$patron_title,$image_height,$image_width){
	  
  #<a href="http://clarkengineers.com/home/" target="_blank" rel="noopener noreferrer nofollow">
 
  if (strlen($link) !=0){
    echo "<a href=\"" . $link . "\"\n";
	echo "   target=\"_blank\"\n";
	echo "   rel=\"noopener noreferrer nofollow\">\n";
  }

  echo "  <img src=\"" . $patron_image . "\"\n";
  echo "       alt=\"" . $patron_title . "\"\n";
  echo "       title=\"" . $patron_title . "\"\n";
  echo "       style=\"vertical-align:top;\n";

  if ($image_height > 0 ){
    echo "               height:" . $image_height . "px;\n";
  }

  if ($image_width > 0 ){
    echo "               width:" . $image_width . "px;\n";
  }

  echo "               background-color: white;\n";
  echo "               border-radius: 10px;\n";
  echo "               border:8px solid white;\n";
  echo "               margin-top:8px;\">\n";  

  if (strlen($link) !=0){
    echo "</a>\n";
  }	
  echo "\n";
}
	
function print_table_body($number_of_rows,$column_2_differential,& $table_contents){

  ######################################
  # if the table information is images #
  ######################################

  #############################
  #  var_dump($table_contents);
  #  exit;
  ##############################
  
  if (strtoupper(substr($table_contents[0],0,2)) == "I|") {
	  $count_elements = count($table_contents);
      $image_count=0;
	  	  
	  for ($i=0;$i < $count_elements;$i++){
        $dummy = explode("|",$table_contents[$i]);
		
		$link=trim($dummy[1]);  # trim leading and trailing whitespace 
		$patron_image=$dummy[2];
		$patron_title=$dummy[3];
		$image_height=preg_replace('/\s+/',"",$dummy[4]); # strip all whitespace ( spaces, tabs, etc)
		$image_width=preg_replace('/\s+/',"",$dummy[5]);  # strip all whitespace ( spaces, tabs, etc)

		# a. if string length $image_height is 0, there was no data for image height in 
		# the data file. Set $image_height to 0

		# b. if $image_height is less than 0 from the data file, set $image_height to 0
	
	    # c. value is OK...assign $image_height to itself ( the syntax requires that last parm)		
	
		# Then repeat that logic for $image_width
		
		$image_height = strlen($image_height == 0 ) ? 0 : ($image_height < 0 ? 0 :$image_height);
		$image_width = strlen($image_width == 0 ) ? 0 : ($image_width < 0 ? 0 : $image_width);
		
  	    if ($image_count == 0){
    	      echo "      <tr style=\"vertical-align:top;\">\n";
    	      echo "        <td style=\"text-align:center;\">\n";
   	    }
		
	    print_one_image($link,$patron_image,$patron_title,$image_height,$image_width);
		
  	    $image_count++;		
	  } # end of 'for loop'

        echo "      </td>\n";
        echo "    </tr>\n";
	return;
  } #end of if ( for dealing with images for table entries )	 
	 
  ####################################
  # if the table information is Text #
  ####################################
  	
  for ($i=0;$i < $number_of_rows;$i++){
    if ($column_2_differential  != 0) {
      $j=$i+$column_2_differential;
      echo "      <tr style=\"vertical-align:top;\">\n";
      echo "        <td style=\"text-align:left;\">" . $table_contents[$i] . "</td>";
      echo "<td style=\"text-align:right;padding:0px;\">" . $table_contents[$j] . "</td>\n";
    }
    else{
      echo "      <tr style=\"vertical-align:top;\">\n";
      echo "        <td style=\"text-align:center;padding:0px\">" . $table_contents[$i] . "</td>\n";
    }
    echo "      </tr>\n";
  }
}

#---------------#

function end_table(){
  echo "    </table>\n";
  echo "    <br/>\n";
} 

#---------------#

function dump_data_from_memory($count_elements,$table_heading,&$table_contents)                    
{	 
  if ($count_elements ==  0) {
    return;
  }

  #################################################################################
  # Intercept image data for PRODUCTION SPONSORS and CORPORATE SPONSORS           #
  # for alternate processing one note: PRODUCTION SPONSORS and CORPORATE SPONSORS #
  # must be all test or all images ( not a mix )                                  #
  #################################################################################
  
  if (strtoupper(substr($table_contents[0],0,2)) == "I|") {  
      $number_of_rows = $count_elements;
      $heading_colspan = 0;
      $column_2_differential=0;
      
      ##############
      # print info #
      ##############
  
      start_table();   
      print_section_header($heading_colspan,$table_heading);
      print_table_body($number_of_rows,$column_2_differential,$table_contents);
      end_table();
      return;
  }

  #########################################################################
  # Process list of names ( as text ) and split the list into two columns #
  # of names in a table                                                   #  
  #########################################################################
 
  # make the table contents and even number of elements
  
  if ($count_elements >  3) {
    $heading_colspan = 2;
  
    if ( $count_elements % 2 != 0) {
      array_push($table_contents, " ");
      $count_elements = $count_elements + 1;
    }
  
    # where is the column 1 / column 2 split ?
  
    $number_of_rows = ($count_elements / 2);
    $column_2_differential=$number_of_rows;
  }
  else{
    $heading_colspan = 0;
    $number_of_rows = $count_elements;
    $column_2_differential=0;
  } 
  
  if ($number_of_rows < 1 ){
    $number_of_rows = 1;
    $column_2_differential=0;
  }
  
  ##############
  # print info #
  ##############
  
  start_table();   
  print_section_header($heading_colspan,$table_heading);
  print_table_body($number_of_rows,$column_2_differential,$table_contents);
  end_table();
}


#---------------#

function clean_input($string_data) {
   return htmlentities(stripslashes($string_data), ENT_QUOTES, 'utf-8'); #sanitize 'tainted' input
}

#--------------------#
# End of subroutines #
#--------------------#

############################
# Main Progrm Starts Here  #
############################

  # get the file names for the patrons files

  $patrons_php_file=basename($_SERVER['SCRIPT_FILENAME']);
  $data_files_patrons=$_SESSION['data_dir'] . '/patrons';

  $patrons = scandir ( $data_files_patrons,1);	
  $count=count($patrons);
  
  # drop out all files we don't want 

  for ($i=0; $i<$count; $i++){
 	  if (strlen($patrons[$i]) < 5){
	    unset($patrons[$i]);
	    continue;
	  }
	
      if (substr($patrons[$i],-5) != '.data'){
	    unset($patrons[$i]);
      }
  }

# compress the array to only the remaining data

  $patrons=array_values($patrons);
  
  if (isset($_GET['years'])){
     $file_name=strtolower(clean_input(substr($_GET['years'],0,4)) . 'patron.data');
  }
  else{
    $file_name=strtolower($patrons[0]);	
  }

  $unix_file = $data_files_patrons . '/' . $file_name;
    
  if ( ! file_exists($unix_file)){
    $file_name=strtolower($patrons[0]);		
    $unix_file = $data_files_patrons . '/' . $file_name;
  }
  
  $first_year=substr($file_name,0,4);
  $years_numbers=substr($file_name,0,4);
  
 #print_r($patrons_php_file);
 #print_r($first_year);
 ?>

<!---HTML - from Bart -->
     
<div class='page group'>            
    <!-- 
        Build Pulldown menu from patrons/pulldown.data 
    -->   
        
  <h1 style="text-align:center;">Past Season's Patrons Lists:
    <select name="whatyear" 
      onchange="location=this.options[this.selectedIndex].value;">
      <?php
        $header_file="";
      
        foreach ($patrons as $key => $value){
          $start_year=substr($value,0,4);
          $end_year=$start_year + 1;
          $pulldown_text=$start_year . " - " . $end_year;
          echo '  <option value="' . $patrons_php_file . '?years=' . substr($value,0,4) . '"';
               
          if ($value == $file_name){
            echo ' selected="selected"';
            $header_file=$data_files_patrons . '/'. $start_year . "patron_header.php";
            
            if ((int)substr($value,0,4) < 2016){
              $heading = "LLT PATRONS: " . $pulldown_text;
            }
            else{
              $heading = "LLT&nbsp;&nbsp;GOLD&nbsp;&nbsp;PATRONS: " . $pulldown_text;
            }
          }
            
          if ($key == 0){
            $pulldown_text="Current Patrons";
          }
                           
          echo ">" . $pulldown_text . "</option>\n";
        }
      ?>
    </select>
  </h1>
  <br />
  <div class="sidebar"> 
    <div class='sBox'>
      <?php include_once "../functions/add_to_mailing_list.php";?>
    </div>
  </div>   

    <div class='main group'>
        <div class='headBanner'><?php echo $heading?> SEASON</div>
           <div class='main_content padMe'>
                
                <!-- Place header info header file here -->

                    <?php
                        if (file_exists($header_file)){
                          include_once($header_file);
                          echo "    <br/><br />\n";
                        }

		                echo "\n<!-- read the data file and create the table XXXXX -->\n\n";
                     
                        $file_read_handle = fopen($unix_file, "r");
                        $table_contents = array();
                        $count_elements = count($table_contents);
                        $table_heading="--";
        
                    	while (! feof($file_read_handle)) {
                    	   $line = chop(fgets($file_read_handle));
                           $line=trim($line);
           
                    	   if (strlen($line) < 1){
                    		   continue;
                    		}
							
						    if (strtoupper(substr($line,0,1)) == "#" ) {
						     continue;
						    }
            
                    	   # if a Heading line is detected, dump table information, if any exists

                    	   if (strtoupper(substr($line,0,2)) == "H|") {
                               $count_elements = count($table_contents);

                               # Dump anything left in memory ( Heading / Section Break )

                               if ($count_elements > 0 ){
                                 dump_data_from_memory($count_elements,$table_heading, $table_contents);
                               }
                               
                              ######################################################         
                              # set up for the heading the triggered the data dump #
                              ######################################################         
              
                              $table_contents = array();
                              $dummy = explode("|",$line);
							  $column_count=count($dummy);
                              $table_heading = $dummy[1];

                    	  	  continue;
                       	   }
                           else{ # add to data in memory
                             array_push($table_contents,$line);
                             $count_elements = count($table_contents);
                             continue;
                           }           
                   	}   # end of 'while'

                    # Dump anything left in memory ( end of file )
                    
                    if ($count_elements > 0){
                      dump_data_from_memory($count_elements,$table_heading,$table_contents);
                    }

                  	fclose($file_read_handle);
                   ?>	
     </div><!-- Close main content div -->
    </div><!-- Close Main -->

</div> <!-- Close page -->
<div style='clear:both'></div>
<!-- <br clear='all'><br /> -->
<?php include_once "footer.php"; ?>
</body>
</html>




