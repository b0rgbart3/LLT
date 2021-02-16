<!-- Second Box -->
<?php
  # The Boxes below will rotate color highlight as programmed in decide_class.php file.
  # The function is in memory as the index.php loads it and it can be used here.
  #
  # You must use ++$box_number.  NOT $box_number++.  One works. The other doesn't.
  # I Think it is because the ++$box_number has the increment happen BEFORE the call
  # and $box_number++ will happen AFTER the call
?>

<div class="<?php print decide_class_name(++$box_number,2)?>">
    <a href="https://www.facebook.com/laurellittletheatre/" target="_blank" rel="nofollow noopener noreferrer">
    <div class='socialIcon fb' title="facebook"></div>
    </a>
    
    <a href="https://www.instagram.com/lltarabian/" target="_blank" rel="nofollow noopener noreferrer">
    <div class='socialIcon instagram' title="instagram"></div>
    </a>
</div>

<!-- Close of Second Box -->
