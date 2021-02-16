<div class="<?php print decide_class_name(++$box_number,3)?> be_the_first">
    <h2><b>BE THE FIRST TO GET THE NEWS!!</b></h2>
	<br />
	<p style="text-align:left">
<?php 
   echo "<a href=\"mailto:" . $_SESSION['llt_email'] .
    "?subject=" . 
    "Add%20me%20to%20LLT's%20mailing%20list" . 
    "&amp;body=" . 
    "Hi%0d%0a%0d%0aPlease%20add%20me%20to%20LLT's%20mailing%20list.%0d%0a%0d%0aThank%20you.%0d%0a" .
    "\">";
?>
	Click here to get added to our mailing list to receive 
    our once a year brochure. 
    </a>
  </p>
</div> 
