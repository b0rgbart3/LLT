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
######################
# End of Subroutines #
######################

  include_once $_SESSION['root'] . "/functions/pathfinder.php"; 
  include_once $_SESSION['root'] . "/functions/dates.php"; 
  include_once $_SESSION['root'] . "/functions/is_time_now_less_than.php";
  include_once $_SESSION['root'] . "/functions/reservation.php";
  
  $relative_path = get_relative_path();
  
  # get the file names for the seasons list files
  
  //$seasons_php_file=basename($_SERVER['SCRIPT_FILENAME']);
  
  $data_files_seasons=$_SESSION['data_dir'] . '/seasons';

  $seasons = scandir ( $data_files_seasons,1);	
  $count=count($seasons);
  
  # drop out all files we don't want 

  for ($i=0; $i<$count; $i++){
 	  if (strlen($seasons[$i]) != 14){
	    unset($seasons[$i]);
	    continue;
	  }

    // The season files are now .php files, so I'm dropping any files that 
    // don't have the word 'season' in them.

    if (strpos($seasons[$i], 'season') == false)
    {
      unset($seasons[$i]);
      continue;
    }
	
    // Note: changed this line to look for the .php extension.

      if (substr($seasons[$i],-4) != '.php'){
	    unset($seasons[$i]);
        continue;
       }
  }
  
  # print_r($seasons);
  # var_dump($seasons);

# compress the array to only the remiinding data

  $seasons=array_values($seasons);

  if (isset($_GET['years'])){
     $file_name=  strtolower(clean_input(substr($_GET['years'],0,4)) . 'season.php');
  }
  else{
    $file_name=strtolower($seasons[0]);	
  }

  $unix_file = $data_files_seasons . '/' . $file_name;
    
  if ( ! file_exists($unix_file)){
    $file_name=strtolower($seasons[0]);	
    $unix_file = $data_files_seasons . '/' . $file_name;
  }

  $pulldown_file = $data_files_seasons . '/pulldown.data';
  $years_numbers=substr($file_name,0,4);
  $start_year = $years_numbers;
  $end_year = $start_year + 1;
  $heading = $start_year . " - " . $end_year;
?>

<!---HTML - from Bart -->

<?php include_once "header.php"; ?>

<div class='page group'>            
    <!-- 
        Build Pulldown menu from seasons/pulldown.data 
    -->
               <h1 style="text-align:center;">Past Season's Shows:<br />
                 <select name="whatyear" 
                       onchange="location=this.options[this.selectedIndex].value;">
            <?php
                $pulldown_handle = fopen($pulldown_file, "r");
            
                $ln = 0;
            
                while ($line = chop(fgets($pulldown_handle))) {
                  ++$ln;
                  if (strlen($line) > 0 ){
                    $info_parts=explode("|",$line);
                    print "<option value=\"seasons.php?years=$info_parts[0]";
                    
                    # if the pulldown menu item match the year's info that is being displayed,
                    # mark this pulldown menu items as 'selected'
                    
                    if (stristr($info_parts[0],$years_numbers)) {
                      print "\" selected=\"selected";
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
<div class='headBanner'>OUR <?php echo $heading?> SEASON</div>
<div class='main_content'> 

<!-- ###################################### -->

<?php include($unix_file); ?>

<!-- ###################################### -->


     </div><!-- Close main content div -->
    </div> <!-- end of div main --> 
</div> <!-- Close page -->

<?php include_once "footer.php"; ?>
</body>
</html>
