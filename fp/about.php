<?php include "includes/header.php";?>
<div class="about-grid">
    <div class="about-bunni">
        <img src="images/image-ph1.png" alt="Placeholder image for Bunni's about me image"/>
        <p id="about">sneezy is a collection of illustrations, home goods, & wearable art made with magic that seek to create a genderless space for self exploration and love.</p>
    </div>

    <div class="contact-form">
        <h3>Contact Bunni</h3>
        <?php
            /*
            * Below are 2 different forms to be re-used       
            * 
            * Only use one at a time, comment out the other!       
            *
            */

            include 'includes/contact_include.php'; #site keys & code here
        
            $toAddress = "kathleen.a.baker@seattlecolleges.edu";  //place your/your client's email address here
            $toName = "Bunni Young"; //place your client's name here
            $website = "SneezyWear's Contact Form";  //place NAME of your client's website

            echo loadContact('simple.php');#demonstrates a simple contact form
            //echo loadContact('multiple.php');#demonstrates multiple form elements

        ?>

    </div>
</div>

   </section>


<?php include "includes/footer.php";?>
