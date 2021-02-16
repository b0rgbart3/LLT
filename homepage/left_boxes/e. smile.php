<!-- Amazon Smile -->
<?php
  # The Boxes below will rotate color highlight as programmed in decide_class.php file.
  # The function is in memory as the index.php loads it and it can be used here.
  #
  # You must use ++$box_number.  NOT $box_number++.  One works. The other doesn't.
  # I Think it is because the ++$box_number has the increment happen BEFORE the call
  # and $box_number++ will happen AFTER the call
?>

<div class='<?php print decide_class_name(++$box_number,2)?>'>
  <br />
    <h2>Are you an Amazon.com shopper?</h2>
        You can<br />help LLT out!
    <br /><br />
  <p>
    <a href="https://smile.amazon.com"
       target="_blank" rel="noopener noreferrer nofollow">
       <img src="homepage/images/LLT_smile_logo.jpg"
            alt="Amazon Smile"
            title="Amazon Smile"
            style="vertical-align:top;
                   background-color: white;
                   border-radius: 10px;
	               border:8px solid white;
	               margin-top:8px;
				   width:115px">
    </a>
  </p>
  <br />
  Amazon has a program that contributes a portion of every purchase you make to charitable 
  organizations - at NO extra cost to you.
  <br /><br />Just go to 
  <a href="https://smile.amazon.com"
     style="color:#ffc832"
     target="_blank" 
     rel="noopener noreferrer nofollow">
     smile.amazon.com
  </a>
  <br />
  and set up Laurel Little Theatre as your choice for contributions, and then 
  you log in to smile.amazon.com each time you go to order things, and 
  we’ll build up a nice little donation to LLT.
  <br /><br />
  Thanks for supporting your local community theatre!        
  <br/>
</div>  

<!-- Close of Tenth Box -->
