<!-- Nineth Box -->
<?php
  # The Boxes below will rotate color highlight as programmed in decide_class.php file.
  # The function is in memory as the index.php loads it and it can be used here.
  #
  # You must use ++$box_number.  NOT $box_number++.  One works. The other doesn't.
  # I Think it is because the ++$box_number has the increment happen BEFORE the call
  # and $box_number++ will happen AFTER the call
?>

<div class='<?php print decide_class_name(++$box_number,2)?>' style="font-size:0.9em;">
    <h1>Our Brand New<br />Neon LLT Sign<br />Lights Up<br />Downtown Laurel
    </h1>
    <br />
    <a href="photos/Arabian%20-%20Pinehurst/llt_neon_2017.jpg">
    <img src="homepage/images/llt_neon_2017_small.jpg" style="width:140px;" alt="" title="">
    </a>
    <br />
    <p class="caption">Click image to enlarge.</p>
    <br />
</div> 

<!-- Close of Nineth Box -->
