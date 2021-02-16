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

#-------------------#

function build_table($unix_file){
  echo "    <!-- Read the file of data -->\n\n";   
      
  $file_read_handle = fopen($unix_file, "r");
  $table_contents = array();
        $first_heading="Y";

    	while (! feof($file_read_handle)) {
    	   $line = chop(fgets($file_read_handle));
           $line=trim($line);
           
    	   if (strlen($line) < 1){
    		   continue;
    		}

           if (strtoupper(substr($line,0,1)) == "#" ) {
    		   continue;
    		}

    	   # if a Heading line is detected, print it.
           
    	   if (strtoupper(substr($line,0,2)) == "H|" ) {
               $dummy = explode("|",$line);
               $heading_text = $dummy[1];
               
    	       if ($first_heading == "N" ) {
                 echo "</table>\n";
               }
               echo "<table class=\"chart\">\n";
               echo "    <tr style=\"line-height:2;\">\n";
               echo "        <td colspan=\"5\" class='table_banner'>\n";
               echo "           <p>&nbsp;&nbsp;$heading_text</p>\n";
               echo "        </td>\n";
               echo "    </tr>\n";
               
               $first_heading="N";
               continue;
           }

           # If a Title line is desired
                      
    	   if (strtoupper(substr($line,0,2)) == "T|") {

               echo "  <tr>\n";
               // echo "    <th style=\"text-align:left;width:5px;\">&nbsp;</th>\n";
               echo "    <th style=\"text-align:left;width:37px;\">Year</th>\n";
               echo "    <th style=\"text-align:left;width:260px;\">Show</th>\n";
               echo "    <th style=\"text-align:left;width:200px;\">Director</th>\n";
               echo "    <th style=\"text-align:left;width:150px;\">Board President</th>\n";
               echo "    <th style=\"text-align:left;width:120px;\">Special Notes</th>\n";
               echo "  </tr>\n";
               
               continue;
           }

           # if it is an indented comment of info that needs to be printed  
           
    	   if (strtoupper(substr($line,0,2)) == "I|" ) {
               $dummy = explode("|",$line);
               $info_text = $dummy[1];
               echo "    <tr>\n";
               echo "      <td colspan=\"5\" class='info'>$info_text</td>\n";
               echo "    </tr>\n";

               continue;
           }
           
           # Table Break (get a horizontal line 'within' table)
           
    	   if (strtoupper(substr($line,0,2)) == "B|" ) {
               echo "</table>\n<div class='chartBreak'>\n</div>\n";
               echo "<table class=\"chart\">\n";
            
               continue;
           }
           
           # No Special handling Markers detected... the data is just info to be printed in a table row

           $dummy = explode("|",$line);
           $count_elements = count($dummy);
           
           $year = $dummy[0];
           $show = $dummy[1];
           $director = $dummy[2];
           $president = $dummy[3];
           
           if ($count_elements > 4){
             $notes = $dummy[4];
           }
           else{
             $notes = "&nbsp;";
           }

           if (strlen($notes) == 0 ){
             $notes = "&nbsp;";
           }

           echo "    <tr>\n";
           // echo "        <td style=\"text-align:left;width:5px;\">&nbsp;</td>\n";
           echo "        <td style=\"text-align:left;width:37px;\">$year</td>\n";
           echo "        <td style=\"text-align:left;width:260px;\">$show</td>\n";
           echo "        <td style=\"text-align:left;width:200px;\">$director</td>\n";
           echo "        <td style=\"text-align:left;width:150px;\">$president</td>\n";
           echo "        <td style=\"text-align:left;width:120px;\">$notes</td>\n";
           echo "    </tr>\n";

           continue;
        }    
        
        print "    </table>\n";

   	    fclose($file_read_handle);
}

#-------------------#

?>

<!-- Note - these style definitions overwrite the ones that are found in base.css -->
<!-- If you want to know why I'm doing it this way - ask me because there is a logical explanaation. -->

<?php 
  $past_php_file=basename($_SERVER['SCRIPT_FILENAME']);
  $data_files_past=$_SESSION['data_dir'] . '/past';
  $unix_file = $data_files_past . '/past.data';
  include_once "header.php"; 
?>

<!---HTML - from Bart -->
  
<div class='page group'>
  <div class="sidebar">
    <div class='sBox'> 
        <?php include_once "../functions/add_to_mailing_list.php";?>
    </div>
  </div>
     
  <div class='main group'>
    <div class='headBanner'><?php echo $_SESSION['how_many_years']?> Years of Shows at LLT</div>
    <div class='main_content'>            
      <img src='../images/old_pinehurst.png' alt="Old Pinehurst" title="Old Pinehurst">
      <br />
      <div class='padMe group'>
        <div style="font-size:0.8em;font-style:italic;line-height:95%;">
          The Pinehurst Hotel and Arabian Theatre in the 1970s.  You can see the big "A" on the marquee 
          of the Arabian right above the long entrance lobby patrons walked down to enter the auditorium 
          of the movie house.  The tall ARABIAN neon sign above that marquee was saved and is now hanging 
          on the side of our theatre.
        </div>
        <br />
        <p>
          Since LLT was founded in 1961, we've presented over 200 productions.<br /><br />
          Please note that we are missing copies of 21 of our show programs over the last five decades.<br />
        </p>
        <br />
        <p>
          * Denotes the programs we're missing.<br />If you happen to have any of these, please contact us at 

            <?php echo "<a href=\"mailto:" . $_SESSION['llt_email'] . "\">" . $_SESSION['llt_email'] . "</a>."
            ?>
        </p>        
      </div>
    </div>
  </div>

  <div style='clear:both'></div>
  <!-- <br clear='all'><br /> -->

  <!-- Start a Table to display past show info -->

  <div>   
<?php
  build_table($unix_file);
?>  
  </div>
</div> <!-- Close page -->
<div style='clear:both'></div>
<!-- <br clear='all'><br /> -->
<?php include_once "footer.php"; ?>
</body>
</html>


