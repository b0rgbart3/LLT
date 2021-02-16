<?php session_start();
  include_once "../functions/set_session_vars.php"; 
/*
    ini_set('display_errors',1);
    error_reporting(E_ALL|E_STRICT);
 */

function clean_input($string_data) 
{
 return htmlentities(stripslashes($string_data), ENT_QUOTES, 'utf-8');
}

#--------------------------------------------------------------------

# when a Cast List is broken up into individual files inside a directory for a 
# single season, sort the directory appropriately and display the individual html or php files
# when the cast is the current season ( position 0 on earlier sort of cast list directories )
# sort the individual files in reverse order... otherwise for files in forward order.

function directory_display($directory,$sort_order)
{
  $casts = scandir ( $directory,$sort_order);  # $sort_order = 0 -> forward / $sort_order = 1 -> reverse 
  $count=count($casts);

# keep only html and php files  

  for ($i=0; $i<$count; $i++){
     if ((substr($casts[$i],-5) != '.html') && (substr($casts[$i],-4) != '.php')){
       unset($casts[$i]);
       continue;
     }

     if ((basename($casts[$i]) == 'index.html') || (basename($casts[$i]) == 'index.php')){
       unset($casts[$i]);
       continue;
     }
  }
 
# compress the array to only the remaining data

  $casts=array_values($casts);
  $count=count($casts);

# display all the casts lists for this season in appropriate sort order
# the current season is in reverse order.  All others are in forward 
# (chronological) order

  print '  <div id="shows" style="text-align:center;">' . "\n";

  print "\n<!-- start including html/php documents for cast lists -->\n\n";
  
 for ($i=0; $i<$count; $i++){
   print '     <div class="show group">';
   print "\n";

   print "\n<!-- including: $casts[$i] -->\n\n";

   include("$directory/$casts[$i]");
   # print "<br />\n";
   print "\n  <!-- end of: $casts[$i] -->";
   print "\n    </div> <!-- Close show div -->\n\n";       
  }
  
  print "\n\n<!-- End includes of html/php documents for cast lists -->\n\n";
  print "  </div> <!-- Close shows div -->\n";
}

#--------------------------------------------------------------------
# End of subroutines
#--------------------------------------------------------------------
# Start of main logic for page
#--------------------------------------------------------------------

  $casts_php_file=basename($_SERVER['SCRIPT_FILENAME']);
  $data_files_casts=$_SESSION['data_dir'] . '/casts';
  $casts = scandir ($data_files_casts,1);
  $count=count($casts);
  
  # drop out all files we don't want 

  for ($i=0; $i<$count; $i++){
    if (strlen($casts[$i]) < 4){
      unset($casts[$i]);
      continue;
    }
    
    # look in the casts directory keep only subdirectories and .html files in
    # $casts array
    
    if (! is_dir($data_files_casts . '/' . $casts[$i])) {
        if (substr($casts[$i],-5) != '.html') {
          unset($casts[$i]);
        }
    }
  }

# compress the array to only the remaining data

  $casts=array_values($casts);
  $count=count($casts);
  
  if (isset($_GET['years'])){
    $file_name=strtolower(clean_input(substr($_GET['years'],0,4)));
  }
  else{    
    $file_name=strtolower($casts[0]); 
  }
    
  # At this point there is no '.html' extension on the array entry,
  # so test for a for a directory name
  
  $unix_file = $data_files_casts . '/' . $file_name;

  # Test user inputted string for valid DIRECTORY
  
  if ( ! file_exists($unix_file)){
    $unix_file = $unix_file . 'cast.html';      

    # user input was NOT a directory.  Test for html file
    
    if ( ! file_exists($unix_file)){
    
        # user input was not found.  Default to 0 index on casts array
        
      $file_name=strtolower($casts[0]);   
      $unix_file = $data_files_casts . '/' . $file_name;

      # if 0 index is not a directory, add cast.html to the file name and proceed 
      
      if (! is_dir($unix_file)){
          $unix_file = $unix_file . 'cast.html';                
      }
    }
  }
   
  $pulldown_file = $data_files_casts . '/pulldown.data';
  $heading = $file_name . " - ";
  $end_year = $file_name + 1;
  $heading = $heading . $end_year;
  $years_numbers=$file_name;
  
  if ($years_numbers == ""){
      $first_years=date('Y');
  }
  else{
    $first_year=$file_name;
  }

# print_r($casts_php_file);
# var_dump($casts);
# print_r($first_year);
# print_r("<br />");
# print_r($unix_file);
# print_r("<br />");
# print_r($pulldown_file);
# print_r("<br />");
# print_r("$file_name");
# exit;
?>

<!---HTML - from Bart -->

<?php include_once "header.php"; ?>

<div class='page group'>
 <!-- 
        Build Pulldown menu from seasons/pulldown.data 
    -->   
    <h1 style="text-align:center;">Past Season's Cast Lists:<br />
            <select name="whatyear" 
                       onchange="location=this.options[this.selectedIndex].value;">
            <?php
                $pulldown_handle = fopen($pulldown_file, "r");
            
                $ln = 0;
            
                while ($line = chop(fgets($pulldown_handle))) {
                  ++$ln;
                  if (strlen($line) > 0 ){
                    $info_parts=explode("|",$line);
                    $first_year=$info_parts[0];
                    
                     print "<option value=\"casts.php?years=$info_parts[0]\"";

                    # if the pulldown menu item match the year's info that is being displayed,
                    # mark this pulldown menu items as 'selected'
                    
                    if (stristr($info_parts[0],$years_numbers)) {
                      print " selected=\"selected\"";
                    }
                    
                    print ">$info_parts[1]</option> \n";
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
        <div class='headBanner'>Our <?php echo $heading?> Cast Lists</div>
            <div class='main_content'>

<?php 
    
# if file name is an html or php file, just do an include on that document 

if ((substr($unix_file,-5) == '.html') || (substr($unix_file,-4) == '.php')){
  include($unix_file);
}
else # the file refers to a directory... sort the filenames in the directory accordingly and display material
{
  # if the array search finds selected season in arrary position 0,
  # set sort order to be reverse order ( sort_order = 1).
  # otherwise set sort_order to be forward ( sort_order = 0)
   
  #  value    = expression ? true value : false value ;

  $sort_order=array_search( basename($unix_file), $casts) == 0 ? 1 : 0 ; #  1 = reverse / 0 = forward
 
  directory_display($unix_file,$sort_order);
}
?>
     </div><!-- Close main content div -->
    </div><!-- Close Main -->

</div> <!-- Close page -->
<div style='clear:both'></div>
<!-- <br clear='all'><br /> -->
<?php include_once "footer.php"; ?>
</body>
</html>


