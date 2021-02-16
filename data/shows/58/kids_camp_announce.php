<?php
if (is_time_now_less_than("2019-06-02_14:00")){
  if ( is_time_now_less_than("2019-04-16_00:00")){
    echo<<<SKC
        <div class='show group'>
    <p>
    <h2>
       <a class='call_to_action' href="https://form.jotform.com/90547055095157" target="_blank" rel="noopener noreferrer nofollow"> 
           <span style="color:#7efa0b;"> 
             KIDS' CAMP REGISTRATION HAS JUST OPENED.<br />  
             SPACE IS LIMITED TO ONLY THE<br />
             FIRST 100 REGISTERED STUDENTS!<br />
             
             <span style="color:#ffc832;font-weight:bold">Camp is now {$_SESSION['camp_percent']}% FULL</span><br />
             
             CLICK HERE FOR THE ONLINE SIGN-UP FORM
<!--
        	CLICK HERE to be ADDED TO our wait list. A few wait-listers each year get to move up taking cancellations!
-->
            </span>
          </a>
    </h2>
    </p>
    </div>
    
SKC;
  }
}
?>
