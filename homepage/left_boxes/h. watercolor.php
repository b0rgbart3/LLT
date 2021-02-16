<!-- Fifth Box -->
<?php
  # The Boxes below will rotate color highlight as programmed in decide_class.php file.
  # The function is in memory as the index.php loads it and it can be used here.
  #
  # You must use ++$box_number.  NOT $box_number++.  One works. The other doesn't.
  # I Think it is because the ++$box_number has the increment happen BEFORE the call
  # and $box_number++ will happen AFTER the call
?>

<div class='<?php print decide_class_name(++$box_number,2)?>' style="font-size:0.9em;">
    <h1>
        Arabian<br />Watercolor
    </h1>
    <br />
    <a href="photos/Arabian%20-%20Pinehurst/slides/2019%20Varian%20Fortunak%20Watercolor.jpeg">
    <img src="images/2019_watercolor_small.png" style="width:140px;" alt="" title="">
    </a>
    <br />
    <p class="caption">Click image to enlarge.</p>
    <br />
    Rick Youngblood was presented this beautiful watercolor of LLT's Arabian 
    Theatre for his three spectacular years as LLT board President.  The 
    original art piece is by award-winning Northeast Jones High senior,<br />
    Varian Fortunak!
</div> 

<!-- Close of Fifth Box -->
