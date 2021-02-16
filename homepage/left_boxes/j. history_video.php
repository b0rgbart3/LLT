<!-- Seventh Box -->
<?php
  # The Boxes below will rotate color highlight as programmed in decide_class.php file.
  # The function is in memory as the index.php loads it and it can be used here.
  #
  # You must use ++$box_number.  NOT $box_number++.  One works. The other doesn't.
  # I Think it is because the ++$box_number has the increment happen BEFORE the call
  # and $box_number++ will happen AFTER the call
?>

<div class="<?php print decide_class_name(++$box_number,2)?>">
    <a href="https://www.youtube.com/watch?v=fczIe9Jj870&feature=youtu.be" target="_blank" rel="noopener noreferrer nofollow">
      <img src="homepage/images/LLT_History_small.png" style="width:160px;" alt="" title="">
      <br />Click here
    </a>
    <br />
    to view the new short film by Wess Hughes and Laura Cooley on the history 
    of all of Laurel's old movie theatres since 1907. 
</div>

<!-- Close of Seventh Box -->
