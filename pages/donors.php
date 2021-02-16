<?php
session_start();
  include_once "../functions/set_session_vars.php"; 

// ini_set('display_errors',1);
// error_reporting(E_ALL|E_STRICT);

function start_table(){
   echo '<table  class="patron_table"' . "\n"; 
   echo '        style="border-collapse: collapse; border-spacing: 0px;">' . "\n";
} 

#-----------#

function print_section_header($col_count,$heading){
  if ($col_count == 0) {
    echo "<tr><td class='patron_header'>$heading</td></tr>\n";
  }
  else{
    echo "<tr><td class='patron_header' colspan=\"$col_count\">" . $heading ."</td></tr>\n";
  }
}

#-----------#

function print_table_body($number_of_rows,$column_2_differential,& $table_contents){                           
  for ($i=0;$i < $number_of_rows;$i++){
    if ($column_2_differential  != 0) {
      $j=$i+$column_2_differential;
      echo "      <tr style=\"vertical-align:top;\">\n";
      echo "        <td style=\"text-align:left;padding:0px;\">" . $table_contents[$i] . "</td>";
      echo "<td style=\"text-align:right;\">" . $table_contents[$j] . "</td>\n";
    }
    else{
      echo "      <tr style=\"vertical-align:top;\">\n";
      echo "        <td style=\"text-align:center;padding:0px;\">" . $table_contents[$i] . "</td>\n";
    }
    echo "      </tr>\n";
  }
}

#-----------#

function end_table(){
  echo "    </table>\n";
  echo "    <br/>\n";
}

#-----------#

function clean_input($string_data) 
  {
   return htmlentities(stripslashes($string_data), ENT_QUOTES, 'utf-8'); #sanitize 'tainted' input
  }

#-----------#

  # get the file names for the donors files

  $donors_php_file=basename($_SERVER['SCRIPT_FILENAME']);
  $data_files_donors=$_SESSION['data_dir'] . '/donors';
  
  $donors = scandir ( $data_files_donors,1);	
  $count=count($donors);
  
  # drop out all files we don't want 

  for ($i=0; $i<$count; $i++){
 	  if (strlen($donors[$i]) < 5){
	    unset($donors[$i]);
	    continue;
	  }
      if (substr($donors[$i],-5) != '.data'){
	    unset($donors[$i]);
        continue;
      }

      if (substr($donors[$i],0,8) == 'pulldown'){
	    unset($donors[$i]);
        continue;
      }
  }

# compress the array to only the remaining data

  $donors=array_values($donors);
  
 # print_r($donors);
  
  $pulldown_file = $data_files_donors . '/pulldown.data';
   
  # Retrieve first line of pulldown list 

  $pulldown_handle = fopen($pulldown_file, "r");
  $line = chop(fgets($pulldown_handle));
  fclose ($pulldown_handle);

  if (strlen($line) > 0 ){
     $info_parts=explode("|",$line);
     $file_name=strtolower($info_parts[0]) . 'donors.data';	
     $first_pulldown_name=$file_name;
  }
  else{
     $file_name=strtolower($donors[0]) . 'donors.data';	
  }

  if (isset($_GET['name'])){  
     $file_name=strtolower(clean_input($_GET['name']) . 'donors.data');
  }
  
  $unix_file = $data_files_donors . '/' . $file_name;

  if ( ! file_exists($unix_file)){
    $file_name=$first_pulldown_name;		
    $unix_file = $data_files_donors . '/' . $file_name;
  }

# print_r($unix_file);

# locate the word 'donors.data'
  
  $string_pos=strpos($file_name,'donors.data');
  $name=substr($file_name,0,$string_pos);  
         
# print("*$unix_file|$name*");

  #get page Title and Sub Title
  
  $title="";
  $pattern = "/^T\|/";
  $line = preg_grep($pattern, file($unix_file));
  
  if (count($line) > 0){
    $dummy = explode("|",$line[0]);
    $title = chop($dummy[1]);
  }
  
  $subtitle="";
  $pattern = "/^S\|/";
  $line = preg_grep($pattern, file($unix_file));

  if (count($line) > 0){
    $dummy = explode("|",$line[1]);
    $subtitle = chop($dummy[1]);
  }
?>

<!---HTML - from Bart -->

<?php include_once "header.php"; ?>

<div class='page group'>      
    <!-- 
        Build Pulldown menu from donors/pulldown.data 
    -->
    <h1 style="text-align:center;">
            Past Donor Programs:
            <select name="whatyear" 
                   onchange="location=this.options[this.selectedIndex].value;">
            <?php
              $pulldown_handle = fopen($pulldown_file, "r");

              $ln = 0;
              $donor_program_text="";
              while ($line = chop(fgets($pulldown_handle))) {
                ++$ln;
                if (strlen($line) > 0 ){
                  $info_parts=explode("|",$line);
                  print "<option value=\"donors.php?name=$info_parts[0]";

                  if (strcasecmp($info_parts[0],$name) == 0) {
                    print "\" selected=\"selected";
                    $donor_program_text=$info_parts[1];
                  }
        
                  print "\">$info_parts[1]</option> \n";
                }
              }
    
            fclose ($pulldown_handle);
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
<div class='headBanner'>
    <?php print $donor_program_text ?>
</div>

 <div class='main_content padMe'>
<!--    <table class='directors'>   -->
        
<!-- read the data file and create the table XXXXX -->

<?php
    $file_read_handle = fopen($unix_file, "r");
    $table_contents = array();
    $table_heading="--";

	while (! feof($file_read_handle)) {
	   $line = chop(fgets($file_read_handle));
       $line=trim($line);
       
	   if (strlen($line) < 1){
		   continue;
		}

       if ((strtoupper(substr($line,0,2)) == "T|") || (strtoupper(substr($line,0,2)) == "S|")) {
    	   continue;
		}

	   # if a Heading line is detected, dump table information, if any exists

	   if (strtoupper(substr($line,0,2)) == "H|") {
           $count_elements = count($table_contents);

           if ( $count_elements == 0 ) {
             $dummy = explode("|",$line);
             $column_count = $dummy[1];   # How many columns for this sections ( only 1 or 2 will work )
             $table_heading = $dummy[2];
             continue;
           }
          
           # make the table contents and even number of elements
          
           if (( $count_elements > 3) && ($column_count !=  1 )){
             $heading_colspan = 2;
             
             if ( $count_elements % 2 != 0) {
               array_push($table_contents, " ");
               $count_elements = $count_elements + 1;
             }
             
             $number_of_rows = ($count_elements / 2);
             $column_2_differential=$number_of_rows;
           }
           else{
             $heading_colspan = 0;
             $number_of_rows = $count_elements;
             $column_2_differential=0;
           } 
               
           # where is the column 1 / column 2 split ?
               
           if ($number_of_rows < 1 ){
             $number_of_rows = 1;
             $column_2_differential=0;
             
           }
               
           # Start dumping info ( Section Change Detected )

           start_table();   
           print_section_header($heading_colspan,$table_heading);
           print_table_body($number_of_rows,$column_2_differential, $table_contents);
           end_table();
 
          # set up for next heading  
          
          $table_contents = array();
          $dummy = explode("|",$line);
          $column_count = $dummy[1];
          $table_heading = $dummy[2];
	  	  continue;
   	   }
       else{
         array_push($table_contents,$line);
         $count_elements = count($table_contents);
         continue;
       }           

  	}   # end of 'while'
    
    # Dump anything left in memory
    
    if ( $count_elements == 0 ) {
      $dummy = explode("|",$line);
      $column_count = $dummy[1];
      $table_heading = $dummy[2];
    }
    else{

    # make the table contents and even number of elements
   
    if (( $count_elements > 3) && ($column_count !=  1 )){
        $heading_colspan = 2;
      
         if ( $count_elements % 2 != 0) {
             array_push($table_contents, " ");
             $count_elements = $count_elements + 1;
         }
      
         $number_of_rows = ($count_elements / 2);
         $column_2_differential=$number_of_rows;
    }
    else{
      $heading_colspan = 0;
      $number_of_rows = $count_elements;
      $column_2_differential=0;
    } 
        
    # where is the column 1 / column 2 split ?
        
    if ($number_of_rows < 1 ){
      $number_of_rows = 1;
      $column_2_differential=0;
   }
}        
    # Start dumping info

    start_table();   
    print_section_header($heading_colspan,$table_heading);
    print_table_body($number_of_rows,$column_2_differential,$table_contents);
    end_table();
                    
    fclose($file_read_handle);
    
    $string_pos=strpos($unix_file,'donors.data');
    $name_part=substr($unix_file,0,$string_pos);  
    $update_file=$name_part . "_update.html";

    if (file_exists($update_file)){
      echo "    <br/><br />\n";
      include($update_file);
    }

   ?>	 
   
   <!--</table> -->
     </div><!-- Close main content div -->
    </div> <!-- end of div main --> 
</div> <!-- Close page -->

<?php include_once "footer.php"; ?>
</body>
</html>
