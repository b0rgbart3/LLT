<!-- Third Box -->
<?php
  # The Boxes below will rotate color highlight as programmed in decide_class.php file.
  # The function is in memory as the index.php loads it and it can be used here.
  #
  # You must use ++$box_number.  NOT $box_number++.  One works. The other doesn't.
  # I Think it is because the ++$box_number has the increment happen BEFORE the call
  # and $box_number++ will happen AFTER the call
?>

<div class="<?php print decide_class_name(++$box_number,2)?>">
    <a href="homepage/brochures/brochure60.pdf" 
       target="_blank" 
       rel="noopener noreferrer nofollow">
       <img src="homepage/brochures/brochure60.jpg"
            alt="60th Season Brochure" 
            title="60th Season Brochure" 
	        style="width:140px;">
       <br />Click Here to Download<br />2021 Brochure<br />To Your Desktop</a>
   <p class='scarab group'>
       &nbsp;
   </p>
    <p style="font-size:80%"><a href="pages/tickets.php">Click here for season ticket info.</a></p>
</div>

<!-- Close of Third Box -->
