<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<?php
    // 6. Put a comment at the top of the code with your identifying information and 
    // use all 3 types of comment characters.
    
    //  Course: CS130A
    # Author: Edward A. Caruso
    /* Assignment: Lab 1 
    Due Date: September 10, 2009 */

    // 7. Print the Course, Assignment, Username, and Date at the top of the page, as in the example 
    // shown at http://hills.ccsf.edu/~dputnam/labs/lab1.php.

    /* fix for having original index.php moved above cs130a Directory */

    $status=preg_match("/^..\w+\/?/",$_SERVER['REQUEST_URI'],$matched_text);
    $home_dir=chop($matched_text[0],"/");
    $base_dir="";   
    $backing_up="../";
    $status = strpos($home_dir,"~eddie");

    if ($status !== false ){
        $base_dir="cs130a/";
        $backing_up = "../../";
    }

    $course_number='CS130A';
    $class_name='PHP Programming';
    $my_name='Edward A. Caruso';
    $assignment_number='Lab 1';
    $todays_date=date('M d, Y  g:i:s a');
    # date('M') . ' ' . date('d') . ',' . ' ' . date('Y') . ' '. date ('g') . ':'. date('i') . ':' . date ('s') . ' ' . date ('a');
    date_default_timezone_set('America/Chicago'); // CDT
	$current_date = date('m/d/Y  g:i:s a');
?>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

<!-- Include the assignment name in the window bar -->

<?php print "<title>CS130A PHP " . $assignment_number . " Page </title>\n"; ?>	
</head>
    <body style="background-color:#AEFFAD;font-family:Futura,Lucida Sans, Arial, Helvetica, sans-serif;">
        <h1> Lab 1 for CS 130A PHP Programming - Play with Super Globals</h1>

         <!-- item 10 put up a link back to the home page.  -->

        <div>
            <?php print "<a href=\"{$backing_up}index_cs130a.php\">Back to PHP Home Page</a><br /><br />"; ?>
        </div>
 
<?php

/*1. Create variables for the class name, your name, the assignment 
number, and the date. Print these variables at the top of the script. 
You may format them however you wish, as long as you use valid XHTML. 
*/

    print '    <!-- 1. Create variables for the class name, your name, the assignment 
    number, and the date. Print these variables at the top of the script. 
    You may format them however you wish, as long as you use valid XHTML. 
    -->' . "\n\n";
    
    print "\n" . '<div style="font-size:1.1em;">' . "\n";
    print '    Course Number: ' . $course_number . "<br />\n";
    print '    Course Name: ' . $class_name . "<br />\n";
    print '    Name: ' . $my_name . "<br />\n";
    print '    Lab: ' . $assignment_number . "<br />\n";
    print '    Date: ' . $todays_date . "<br />\n";
    print '    Server Date/Time: ' . $current_date . "<br />\n";
    print '</div>' . "\n";

    // 2. Create a variables named $demo. Set the value of $demo to 'DEMO'.

    print '   <!-- 2. Create a variables named $demo. Set the value of $demo to \'DEMO\'. -->' . "\n\n";
    
    $demo = 'DEMO';

    print '<h3>$_SERVER Keys and Values</h3>' . "\n\n";

    // 3. Dump the data from the $_SERVER super-global.
    print '   <!-- 3. Dump the data from the $_SERVER super-global. -->' . "\n\n";

    print '<table style="padding: 1.5em;
                         border: 1px solid #000000;
                         margin-right: auto;
                         font-size:1.1em;
                         background-color:#FFFEDE">'  . "\n";
    print '    <tr>' . "\n";
    print '        <td> ' . "\n";   
     
    foreach($_SERVER as $key => $value){
        if (gettype($value) == "string") // elimiate argv and argc key values on MAC OS X where value is an ARRAY not a string
          {
    	    echo $key . "=&gt;".  htmlentities($value) . "<br />\n";
    	  }
    }
    
    print '        </td> ' . "\n";    
    print '    </tr>' . "\n";
    print '</table>'  . "\n\n";
    
    // 5a. Print these strings using single-quotes: 

    print '<h3>Print strings using single-quotes:</h3>' . "\n\n";
    print '<table style="padding: 1.5em;
                         border: 1px solid #000000;
                         margin-right: auto;
                         font-size:1.1em;
                         background-color:#FFFEDE">'  . "\n";
    print '    <tr>' . "\n";
    print '        <td> ' . "\n";    
    print '            All PHP variables begin with a "$" character.' . "<br />\n";
    print '            We\'re learning about proper quoting using double quotes (") and single quotes (\').' . "<br />\n"; 
    print '            We can print variables inside of double-quoted strings. For example: $demo.'  . "<br />\n";
    print '        </td> ' . "\n";    
    print '    </tr>' . "\n";
    print '</table>' . "\n\n";

    // 5b. Now print the same strings using double-quotes.

    print '<h3>Print strings using double-quotes:</h3>' . "\n\n";
    print '<table style="padding: 1.5em;
                         border: 1px solid #000000;
                         margin-right: auto;
                         font-size:1.1em;
                         background-color:#FFFEDE">'  . "\n";
    print '    <tr>' . "\n";
    print '        <td> ' . "\n";    
    print "            All PHP variables begin with a \"\$\" character.<br />\n";
    print "            We're learning about proper quoting using double quotes (\") and single quotes (').<br />\n"; 
    print "            We can print variables inside of double-quoted strings. For example: $demo.<br />\n";
    print '        </td> ' . "\n";    
    print '    </tr>' . "\n";
    print '</table>' . "\n\n";

    /* 8. Find the variable in the $_SERVER array that tells us the name of the user's web browser. 
    Assign the name of the browser to a variable named $browser and print the name in this double 
    quoted string: 
    Hello, I see that you are using $browser.
    */
    print '<h3>Isolate the Browser information in $_SERVER and assign it to $browser, then print it</h3>' . "\n\n";
    $browser=$_SERVER['HTTP_USER_AGENT'];

    print '    <table style="padding: 1.5em;
                             border: 1px solid #000000;
                             margin-right: auto;
                             font-size:1.1em;
                             background-color:#FFFEDE">'  . "\n";
    print '    <tr>' . "\n";
    print '        <td> ' . "\n";    
    print "            Hello, I see that you are using $browser.<br />\n";
    print '        </td> ' . "\n";    
    print '    </tr>' . "\n";
    print '</table>' . "\n";
?>

<div>
    <br />
    <cite>
        <br />
        Last Updated: September 5, 2009
    </cite>
</div>
<p>
    <a href="http://validator.w3.org/check?uri=referer">
        <img src="http://www.w3.org/Icons/valid-xhtml10-blue"
        alt="Valid XHTML 1.0 Strict" 
        title="Valid XHTML 1.0 Strict"
        height="31" width="88"
        style="border-style: none"/>
    </a>
    <a href="http://jigsaw.w3.org/css-validator/check/referer">
        <img src="http://jigsaw.w3.org/css-validator/images/vcss-blue"
        alt="Valid CSS!"
        title="Valid CSS!"
        height="31" width="88"
        style="border-style: none"/>
    </a>

 </p>
    </body>
</html>
