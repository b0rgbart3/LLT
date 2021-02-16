<?php 
#$showImage = $_SESSION['website_home']/data/shows/nn/images/xxxxxxx.xxx
$showImage = dirname($_SESSION['website_home'] . substr(__FILE__,strlen($_SESSION['root'])));
$showImage = $showImage . "/images/littlewomenlogo.png";
?>
    <div id="women" class='show'>
        <img style="width:255px; float:right; margin-left:10px"
        <?php echo 'src="' . $showImage . '"'; ?> 
             alt="Little Women Logo"
             title="Little Women Logo"/>
             <br />   
        <h2>LITTLE WOMEN</h2>
        <h3>The New Musical</h3>
        <br />
        <h4>December 4-7, 2014</h4>
        <p class='reservation_line'>       
          <?php
            $temp=explode(".",basename(__FILE__));
            $the_show=$temp[0];  
    
            reservation_print_yes_no($the_show,$years_numbers,$date_array);
          ?>
        </p>
        <br />
        <h5>Directed by Lacy Cockrell</h5>
        <p>
            Louisa May Alcott's classic 1869 novel, <span class='showTitle'>LITTLE WOMEN</span>, finally came
            to life on stage as a delightful new Broadway musical just a couple of years ago.
        </p>
        <p>
            Follow the adventures of the four March family sisters - Jo, Meg, Beth, and Amy - as their mother, 
            Marmee, tries to keep the home and her daughters in good running order while their father is off 
            serving as a Union Army chaplain in the Civil War.
        </p>
        <p>
            The beautiful musical score of this play is a perfect touch to this age-old story - and what a great 
            way to kick off the Christmas season.<br />
            <span class="blurb_highlight">Six generations have read the story. This generation will sing it!</span>
        </p>
        <a class='call_to_action' 
           href="<?php echo "$relative_path" ?>pages/casts.php?years=<?php echo "$years_numbers";?>#women">
           Click here for our <em>Little Women</em> cast list.
        </a>
        
    </div><!-- close of 'show' div -->
