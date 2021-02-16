<?php

	function get_relative_path()
	{
		$dirname = dirname(__DIR__);
		$script_path = dirname($_SERVER['SCRIPT_FILENAME']);

/*
	If the current directory is  the same as the path where the script is located, then we know we are
	inside the 2nd level pages, and thus, we need to climb up a level to get the correct paths for the show includes.
	Otherwise, we are calling this script from the homepage, and in that case we don't need to add anything 
	to the path - thus we set it to an empty string: ''.
*/

		// This is a ternary operator that replaces an if then else structure
	    // If we're calling this script from a 2nd level page, then we climb back out one level ('../').
	    // otherwise, we don't need to - so we set the $path string to be empty ('').

		$path = ($dirname == $script_path ? '../' : '');

		return $path;

	}
?>
