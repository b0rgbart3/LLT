<?php 
#$showImage = $_SESSION['website_home']/data/shows/nn/images/xxxxxxx.xxx
$showImage = dirname($_SESSION['website_home'] . substr(__FILE__,strlen($_SESSION['root'])));
$showImage = $showImage . "/images/running_mates.jpg";
?>
    <div id="running_mates" class='show group'>
        <h1>Beth Kander’s</h1>
        <h2>RUNNING MATES</h2>
        <h3>A little bit of comedy...actually, a TON of comedy!</h3>
        <h4>OCTOBER 20-23, 2016</h4>
        <p class='reservation_line'>       
          <?php
            $temp=explode(".",basename(__FILE__));
            $the_show=$temp[0];  
    
            reservation_print_yes_no($the_show,$years_numbers,$date_array);
          ?>
        </p>  
     
        <h5>Directed by Missy Sanderson</h5>
                     
        <?php echo "<img src=" . $showImage . ' class="floater"' .
                       ' title="Runnng Mates" alt="Runnng Mates">'; 
        ?>
          
        <p>
           Need a little diversion from Hillary and the Donald?  Well...here it is!  LLT’s annual Southern 
           comedy, only this time, a funny Southern <i>political</i> comedy – performed right in the very 
           middle of this year’s election season.
       </p>
                     
        <p>
           The mayor of a sleepy Georgia town is once again up for re-election.  For over twenty years, he’s 
           always run unopposed, but this time he has to duke it out with <i>his own wife</i> on the ballot.  
           Sparks fly and and everyone is thrown for a loop as they get down and dirty and duke it out with 
           their political fisticuffs.
       </p>
                     
        <p>
           All politics are local – but especially if you live with one of your opponents – so you can bet 
           that belly laughs will be abundant!
       </p>
                     
       <p>
          <span class='showTitle'>RUNNING MATES</span> was the 2013 winner of the Eudora Welty New Play Award 
          and LLT is proud to be one of the first theatre companies in the country to produce it.
      </p>
                     
        <p>Director Missy Sanderson has auditions set for August 22nd and 23rd.  Click here for audition info.</p>
                     
        <p>
           The LLT reservation line for <span class='showTitle'>RUNNING MATES</span> opens on October 13th and will 
           answer 24 hours a day at <?php print $_SESSION['llt_phone']?>.
       </p>
       <p>
        <a class='call_to_action' 
           href="<?php echo "$relative_path" ?>pages/casts.php?years=<?php echo "$years_numbers";?>#running">
            Click here for our <em>Running Mates</em> cast list.
         </a>
     </p>
    </div><!-- close of 'show' div -->
    