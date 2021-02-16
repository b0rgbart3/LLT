<!-- Tenth Box -->
<?php
  # The Boxes below will rotate color highlight as programmed in decide_class.php file.
  # The function is in memory as the index.php loads it and it can be used here.
  #
  # You must use ++$box_number.  NOT $box_number++.  One works. The other doesn't.
  # I Think it is because the ++$box_number has the increment happen BEFORE the call
  # and $box_number++ will happen AFTER the call
?>

<div class='<?php print decide_class_name(++$box_number,2)?>'>
    <p>Would you like to receive our email newsletter and annual season brochure?</p><br />
    <hr>
    <br/>
<?php 
echo "<a href=\"mailto:" . $_SESSION['llt_email'] .
    "?subject=" . 
    "Add%20me%20to%20LLT's%20mailing%20list" . 
    "&amp;body=" . 
    "Hi%0d%0a%0d%0aPlease%20add%20me%20to%20LLT's%20mailing%20list.%0d%0a%0d%0aThank%20you.%0d%0a" .
    "\">" . 
    "Click here to be added to our mailing list" . 
     "</a>";
?>
</div>  

<!-- Close of Tenth Box -->
