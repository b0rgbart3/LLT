<?php
if (is_time_now_less_than("2020-06-02_14:00")){
  if ( ! is_time_now_less_than("2020-02-28_00:00")){
    echo<<<SKC
        <div class='show group'>
    <h3 style="font-size:1.5em;line-height:25px;">
       <a class='call_to_action' href=" https://form.jotform.com/200561226847151" target="_blank" rel="noopener noreferrer nofollow"> 
           <span style="color:#7efa0b;"> 
             2020 SUMMER KIDS' CAMP<br />
             <span style="color:#C6008E;">
               WILLY WONKA JR.</span><br />
               REGISTRATION HAS JUST OPENED.
             </span>
             <br /><br />
             We <u>are</u> continuing the registration process for camp, but if the 
             COVID-19 regulations continue into late May and we have to cancel camp,
             all registration fees WILL be refunded.
             <br /><br />
             <span style="color:#7efa0b;">
               <span style="font-size:.85em;">
                 Space is limited to only the first 100 students, so sign-up right away before it fills!  
                 Camp runs the end of May.  Auditions will be in April (only for the registered campers).
               </span>              
               <br />

               <span style="color:#C6008E;font-weight:bold">Camp is now {$_SESSION['camp_percent']}% FULL</span><br />

               <span style="color:#ffc40c;font-weight:bold">CLICK HERE FOR THE ONLINE SIGN-UP FORM</span>
<!--
        	   CLICK HERE quickly to be ADDED TO our wait list. A few wait-listers each year get to move up taking cancellations!
-->
             </span>
          </a>
    </h3>
    </div>
    
SKC;
  }
}
?>
