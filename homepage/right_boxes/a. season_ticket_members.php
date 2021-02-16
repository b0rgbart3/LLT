
<?php
  # The Boxes below will rotate color highlight as programmed in decide_class.php file.
  # The function is in memory as the index.php loads it and it can be used here.
  #
  # You must use ++$box_number.  NOT $box_number++.  One works. The other doesn't.
  # I Think it is because the ++$box_number has the increment happen BEFORE the call
  # and $box_number++ will happen AFTER the call
?>
<div class="<?php print decide_class_name(++$box_number,3)?> season_ticket_members">
	<h2>SEASON TICKET MEMBERS <br />
	<span class='standout'>SAVE 10%-28% !!!!!!</span></h2>
	<br />
	A regular single ticket runs $17, but get an LLT 4-Punch Season Ticket at either $50 (<i>seniors or students</i>), 
    $55 (<i>adults</i>), $100 (<i>two season tickets for a couple) or $190 (four season tickets for a family of four</i>).
	<br /><br />
	You get <b>four</b> punches on each season ticket - allowing you to punch 
	once per show, or you can even use up to two of your punches on any one production and bring someone with you.   
	<!-- <i>And, our new annual Silent Movie Night is also included FREE on top of the four show punches!</i> -->
	<br /><br />
	Join now as an LLT season-ticket holder - you'll see all four regular season shows 
	<!-- AND the silent movie  -->
	for an average price that's as low as ten dollars per punch - <i><b>live theatre for less than 
	the cost of a movie!</b></i>

</div>
