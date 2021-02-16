<?php
  # The Boxes below will rotate color highlight as programmed in decide_class.php file.
  # The function is in memory as the index.php loads it and it can be used here.
  #
  # You must use ++$box_number.  NOT $box_number++.  One works. The other doesn't.
  # I Think it is because the ++$box_number has the increment happen BEFORE the call
  # and $box_number++ will happen AFTER the call
?>
<div class="<?php print decide_class_name(++$box_number,3)?>">
    <h2>BACKSTAGE VOLUNTEERS</h2>
    <br />
<?php
echo<<<MLR
    We're always looking for folks that would like to help 
    backstage on sets, props and costumes. Do you sew ?  
    Like to help slap some paint on a wall?  Do a little
    hammering?  Drop us a line at <a href="mailto:{$_SESSION['llt_email']}">{$_SESSION['llt_email']}</a>. 
MLR;
?>
    <br /><br />
</div> <!-- Close of popBox -->
