<?php
  # The Boxes below will rotate color highlight as programmed in decide_class.php file.
  # The function is in memory as the index.php loads it and it can be used here.
  #
  # You must use ++$box_number.  NOT $box_number++.  One works. The other doesn't.
  # I Think it is because the ++$box_number has the increment happen BEFORE the call
  # and $box_number++ will happen AFTER the call
?>
<div class="<?php print decide_class_name(++$box_number,3)?>">
    <h2>REMEMBER LLT IN YOUR GIFT GIVING</h2>
    <br />           
    As a non-profit organization, LLT has always depended upon "the kindness of strangers." 
    We survived and thrived for almost six decades thanks to the great support of everyone 
    in the community.
    <br /><br />
    We're very proud of our historic 1927 Arabian Theatre, but we have to constantly work at keeping the 
    facility maintained, and we have big plans to add the new Pinehurst Room extension in the next year or so.  
    That addition will run along the south side of the Arabian exactly where the old Pinehurst Hotel stood.  
    And, YES, ladies, there will be brand new restrooms so you won't have to stand in that long line anymore!
    <br /><br />
    We'll need the help of our friends and families and even strangers to raise the funds to complete 
    this.  Remember us in your annual gift giving and in your wills and estate planning.  So many of our 
    beautiful old buildings in Downtown Laurel have disappeared - help us to ensure this one continues to 
    thrive.  We're planning a Wall of Honor in the new Pinehurst Room that will memorialize your name or 
    the name of those you'd like to remember. Mail to  
    <?php echo "<a href=\"mailto:" . $_SESSION['llt_email'] . "\">" . $_SESSION['llt_email'] . "</a>" ?>
    for more info.
    <br /><br />
 </div> <!-- Close of popBox -->
 