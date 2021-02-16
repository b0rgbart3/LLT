<?php session_start();
  include_once "../functions/set_session_vars.php"; 

/*
    ini_set('display_errors',1);
    error_reporting(E_ALL|E_STRICT);
 */

function clean_input($string_data) {
  return htmlentities(stripslashes($string_data), ENT_QUOTES, 'utf-8'); #sanitize 'tainted' input
}

#-----------#

function start_table(){
  print "<table class='directors' style='margin-right:auto;margin-left:auto;'>\n";            
}

#-----------#

function close_table(){
    print "</table>\n";
}  

#-----------#

function build_table($unix_file){
  $file_read_handle = fopen($unix_file, "r");

  while (! feof($file_read_handle)) {
    $line = chop(fgets($file_read_handle));
    
    if (strlen($line) < 1){
	  continue;
	}
	
	# Line contains HTML that we just want to push to output unchanged
		
	if (substr($line,0,2) == "**"){
	  echo substr($line,2);
	  continue;
   	}

	$curr_pos = strpos($line,'|');	
       
    if ($curr_pos){
      # put in column separation and then pre-pend the beginning of the row
 	
	  $line = str_replace('|','</td><td style="vertical-align:top;text-align:right;width:50%;" class="director_name">',$line);
      $line = '<tr><td style="vertical-align:top;text-align:left;width:50%;" class="director_cell">' . $line;
	}
    else{
      $line = '<tr><td style="vertical-align:top;text-align:center;" colspan="2" >' . $line;
    }

	echo $line . "</td></tr>\n";  # end of the row
  }

  fclose($file_read_handle);
}

#-----------#

# get the file names for the board of directors files

$boards_php_file=basename($_SERVER['SCRIPT_FILENAME']);
$data_files_boards=$_SESSION['data_dir'] . '/boards';

$boards = scandir ($data_files_boards,1);	
$count=count($boards);
  
# drop out all files we don't want 

for ($i=0; $i<$count; $i++){
  if (strlen($boards[$i]) < 5){
    unset($boards[$i]);
    continue;
  }
	
  if (substr($boards[$i],-5) != '.data'){
    unset($boards[$i]);
  }
}

# compress the array to only the remiinding data

$boards=array_values($boards);
#print_r($boards);

if (isset($_GET['years'])){
  $file_name=strtolower(clean_input($_GET['years']) . 'board.data');
}
else{
  $file_name=strtolower($boards[0]);	
}

$unix_file = $data_files_boards . '/' . $file_name;

if ( ! file_exists($unix_file)){
  $file_name=strtolower($boards[0]);		
  $unix_file = $data_files_boards . '/' . $file_name;
}

$years_numbers=substr($file_name,0,4);
?>

<!---HTML - from Bart -->

<?php include_once "header.php"; ?>
     
<div class='page group'>
    <h1 style="text-align:center;">Past Season's Board Lists:
      <select name="whatyear" 
        onchange="location=this.options[this.selectedIndex].value;">
        <?php
          foreach ($boards as $key => $value){
            $start_year=substr($value,0,4);
            $end_year=$start_year + 1;
                          
            if ($start_year == 1961){
              $end_year=$end_year + 1;
            }
                          
            $pulldown_text=$start_year . " - " . $end_year  . " Season";
            echo "  <option value=\"" . $boards_php_file . "?years=" . substr($value,0,4) . 
                                            "\"";
                                                       
            if ($value == $file_name){
              echo " selected=\"selected\"";
              $heading = $pulldown_text;
            }
                           
            if ($key == 0){
              $pulldown_text="Current Board";
            }
                           
            echo ">"  . $pulldown_text . "</option>\n";
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
        <div class='headBanner'>LLT Board of Directors: <?php echo $heading?></div>
        <div class='main_content'>

<!--style="margin-left:auto;margin-right:auto;" -->
 <?php
   start_table();
   build_table($unix_file);
   close_table();
?>

     </div><!-- Close main content div -->
    </div><!-- Close Main -->
</div> <!-- Close page -->
<div style='clear:both'></div>
<!-- <br clear='all'><br /> -->
<?php include_once "footer.php"; ?>
</body>
</html>
