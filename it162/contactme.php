<?php include "includes/header.php";?>

    <img class="contact-photo" src="images/tablet.png" alt="Drawing of a person holding a carrot like an umbrella by Katy."/>
    <!-- <h2 class="pageID">Contact Me</h2> -->
    <?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "kathleen.a.baker@seattlecolleges.edu";  //place your/your client's email address here
        $toName = "Kathleen (Katy) Baker"; //place your client's name here
        $website = "KatyWebDev's Contact Form";  //place NAME of your client's website

        echo loadContact('simple.php');#demonstrates a simple contact form
        //echo loadContact('multiple.php');#demonstrates multiple form elements

	?>

   </section>


<?php include "includes/footer.php";?>
