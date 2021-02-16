<?php 
#$showImage = $_SESSION['website_home']/data/shows/nn/images/xxxxxxx.xxx
$showImage = dirname($_SESSION['website_home'] . substr(__FILE__,strlen($_SESSION['root'])));
$showImage = $showImage . "/images/gold_rush.jpg";
?>
 <div id="gold_rush" class='show group'>

    <h1>Charlie Chaplin's</h1>
    <p class='spectacular'>SILENT MOVIE SPECTACLE!!!</p>
    <h2>THE GOLD RUSH</h2>
    <h4>
	    Cocktail and Costume Party<br />
		Saturday, April 7th<br /><br />
		Cocktail Hour Begins at 6:30pm<br /> 
		The Movie Rolls at 7:30pm<br />
	</h4>

 <p class='reservation_line'>
   <?php
     reservation_print_yes_no(__FILE__,$years_numbers,$date_array);
   ?>
</p> 

   <!--  <h5>Directed by Sam Buchanan</h5> -->
     
    <?php echo "<img src=" . $showImage . " title=\"Gold Rush\" alt=\"Gold Rush\"/>"; ?>

    <p>
	Laurel's Arabian Theatre had its grand opening day in April 1927.  It 
	operated as a movie house for 50 years, and then after closing, Laurel 
	Little Theatre bought the building and saved it to become our own 
	performing arts theatre.
    </p>

    <p>
	To celebrate the 91st Birthday of the last remaining downtown movie 
	palace, LLT will have a one-night-only 1920's costume party (costumes 
    optional) showing Charlie Chaplin's masterful silent movie comedy 
    <span class='showTitle'>THE GOLD RUSH</span> on April 7th at 730PM.
    </p>

    <p>
	Chaplin's hilariously famous "Little Tramp" is a gold prospector that 
	becomes trapped in a deserted cabin during a snow storm, and the movie
	features the comedian's most beloved bits and silliest moments. 
    </p>

    <p>
	It received several Academy Award nominations, and it’s on the American 
	Film Institute's "100 Greatest Movies" list. <span class='showTitle'>THE GOLD RUSH</span> was the number one movie 
	of the 1926-27 movie season, and the film is 
	still in the Top Five of the highest-grossing silent films of all time.
    </p>

    <p>
	Admission is free for LLT season ticket holders (no punch will be 
	taken, you just show your season ticket) - or single admission is 
	$10 for adults and $5 for students.   
    </p>

    <p>
	The movie runs just an hour and a half, and this silent film features a 
	lush musical score.  Wear your favorite 1920's look if you'd like - 
	and join in.  WHAT A FUN NIGHT!
    </p>

    <p>
	LLT's reservation line only answers the week of each show - 24 hours a day at <?php print $_SESSION['llt_phone']?>.
</p>
</div><!-- close of 'show' div -->