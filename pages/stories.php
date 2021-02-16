<?php session_start();
  include_once "../functions/set_session_vars.php"; 

/*
    ini_set('display_errors',1);
    error_reporting(E_ALL|E_STRICT);
 */

    function clean_input($string_data) 
      {
          return htmlentities(stripslashes($string_data), ENT_QUOTES, 'utf-8'); #sanitize 'tainted' input
      }

      #--------------------------------------------------------------------

  # get the file names for the donors files

  $stories_php_file=basename($_SERVER['SCRIPT_FILENAME']);
  $data_files_stories=$_SESSION['data_dir'] . '/stories';

  $stories = scandir ( $data_files_stories,1);	
  $count=count($stories);
  
  # drop out all files we don't want 

  for ($i=0; $i<$count; $i++){
 	  if (strlen($stories[$i]) < 5){
	    unset($stories[$i]);
	    continue;
	  }
      if (substr($stories[$i],-5) != '.html'){
	    unset($stories[$i]);
        continue;
      }

      if (substr($stories[$i],0,8) == 'pulldown'){
	    unset($stories[$i]);
        continue;
      }
  }

# compress the array to only the remaining data

  $stories=array_values($stories);
  
#  print_r($stories);
  
  $pulldown_file = $data_files_stories . '/pulldown.data';
   
  # Retrieve first line of pulldown list 

  $pulldown_handle = fopen($pulldown_file, "r");
  $line = chop(fgets($pulldown_handle));
  fclose ($pulldown_handle);

  if (strlen($line) > 0 ){
     $info_parts=explode("|",$line);
     $file_name=strtolower($info_parts[0]) . '_stories.html';	
     $first_pulldown_name=$file_name;
     $first_pulldown_title=$info_parts[1];
  }
  else{
     $file_name=strtolower($stories[0]) . '_stories.html';	
     $title=$info_parts[1];
  }

  if (isset($_GET['name'])){  
     $file_name=strtolower(clean_input($_GET['name']) . '_stories.html');
  }
  
  $unix_file = $data_files_stories . '/' . $file_name;

  if ( ! file_exists($unix_file)){
    $file_name=$first_pulldown_name;		
    $unix_file = $data_files_stories . '/' . $file_name;
    $title = $first_pulldown_title;
    
  }

# print_r($unix_file);

  #locate the word '_stories.html'
  
  $string_pos=strpos($file_name,'_stories.html');
  $name=substr($file_name,0,$string_pos);  
         
# print("*$unix_file|$name*");
?>


<!---HTML - from Bart -->

<?php include_once "header.php"; ?>
     
<div class='page group'>
           
<!-- 
        Build Pulldown menu from donors/pulldown.data 
    -->
    <h1 style="text-align:center;">LLT/Arabian Theatre Stories:
        <select name="whatyear" 
                onchange="location=this.options[this.selectedIndex].value;">
                <?php
                    $pulldown_handle = fopen($pulldown_file, "r");
            
                    $ln = 0;
                    while ($line = chop(fgets($pulldown_handle))) {
                      ++$ln;

                      if (strlen($line) > 0 ){
                        $info_parts=explode("|",$line);
                        print "<option value=\"stories.php?name=$info_parts[0]";

                        if (strcasecmp($info_parts[0],$name) == 0) {
                          print "\" selected=\"selected";
                          $title=$info_parts[1];
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
        <div class='headBanner'><?php print $title?></div>
            <div class='main_content padMe'>

        <?php 
          include_once($unix_file);

          $string_pos=strpos($unix_file,'_stories.html');
          $name_part=substr($unix_file,0,$string_pos);  
          $trailer_file=$name_part . "_trailer.html";
 
          if (file_exists($trailer_file)){
            include_once($trailer_file);
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
