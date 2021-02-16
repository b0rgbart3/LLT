<?php 
#$showImage = $_SESSION['website_home']/data/shows/nn/images/xxxxxxx.xxx
$showImage = dirname($_SESSION['website_home'] . substr(__FILE__,strlen($_SESSION['root'])));
$showImage = $showImage . "/images/crucible.jpg";
?>
    <div id="crucible" class='show group'>
        <h1>Arthur Miller’s</h1>
        <h2>THE CRUCIBLE</h2>
         <h3>A little bit of drama...but what a POWERFUL drama!</h3>
         <h4>MARCH 30 - APRIL 2, 2017</h4>
         <p class='reservation_line'>       
           <?php
            $temp=explode(".",basename(__FILE__));
            $the_show=$temp[0];  
    
            reservation_print_yes_no($the_show,$years_numbers,$date_array);
           ?>
         </p>  
         
         <h5>Directed by Sam Buchanan</h5>

         <?php echo "<img src=" . $showImage . ' class="floater"' . 
         ' title="The Crucible" alt="The Crucible">'; 
         ?>
                     
         <p>The time: 1692.  The place: Salem, Massachusetts.  The problem: Witches!</p>
                     
         <p>
            What happened back then to the women of Salem?  Or maybe the real question is, what happened to 
            ALL the people of Salem?  What could lead an entire town to turn on their own?
        </p>
                     
        <p>
           Based on the chillingly true-life stories of Salem’s hysterical trials, this powerful drama first 
           appeared on Broadway in 1953 and won the Tony Award for Best Play.
        </p>
                       
        <p>
           Arthur Miller wrote it as a comment on the <i>real-life witch-hunts</i> and blacklisting that the despicable 
           U.S. Senator Joe McCarthy was leading in our Congress that decade.
        </p>
                     
        <p>
           A ‘crucible’ is a container used to hold metal or glass substances while they’re subjected to super 
           high temperatures – and explosively high heat is exactly what happened in both Salem in the 1690s 
           and the U.S. Congress in the 1950s.
        </p>
                     
        <p>Miller is considered to be one of America’s very best playwrights and was a Pulitzer Prize winner for Drama.</p>
                     
        <p>
           <span class='showTitle'>THE CRUCIBLE</span> is one of the most produced dramas of all time
            and is currently running on Broadway.  That production just received four Tony Award nominations, 
            including Best Revival of a Play.
        </p>
                     
        <p>
           The LLT reservation line for <span class='showTitle'>THE CRUCIBLE</span> opens on March 23rd and will 
           answer 24 hours a day at <?php print $_SESSION['llt_phone']?>.
        </p>
       <p>
        <a class='call_to_action' 
           href="<?php echo "$relative_path" ?>pages/casts.php?years=<?php echo "$years_numbers";?>#crucible">
           Click here for our <em>The Crucible</em> cast list.
         </a>
     </p>
    </div><!-- close of 'show' div -->
    