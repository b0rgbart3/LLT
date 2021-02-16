<!-- Sixth Box -->
<?php
  # The Boxes below will rotate color highlight as programmed in decide_class.php file.
  # The function is in memory as the index.php loads it and it can be used here.
  #
  # You must use ++$box_number.  NOT $box_number++.  One works. The other doesn't.
  # I Think it is because the ++$box_number has the increment happen BEFORE the call
  # and $box_number++ will happen AFTER the call
?>

<div class="<?php print decide_class_name(++$box_number,2)?>">
    <span style="color:#ffffff;">
        The Smithsonian<br />
        Museum picks Laurel<br />
        as one of the nation's
    </span>
    <br /><br />
    <h1>TOP TWENTY SMALL TOWNS TO VISIT</h1>
    <br />
    <span style="color:#ffffff;">
        with a shout-out to LLT, as well as to theatre character, Blanche DuBois.
        <a href="https://www.smithsonianmag.com/travel/20-best-small-towns-visit-2018-180969125/" 
           target="_blank" rel="noopener noreferrer nofollow">
          <br />Click here
        </a>
        <br />
        for the full story.
    </span>
</div>

<!-- Close of Sixth Box -->
