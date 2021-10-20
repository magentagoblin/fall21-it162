<?php include '../includes/portal-config.php'?>
<!DOCTYPE html>
<html>
<head>
<title><?=$title?></title>
<meta name="viewport" content="width=device-width" />
<meta name="robots" content="noindex,nofollow" />
<meta charset="utf-8">
<!-- <script src="https://use.fontawesome.com/6a71565c22.js"></script> -->
<!-- <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script> -->
<script src="https://use.fontawesome.com/d584deb88f.js"></script>
<link rel="stylesheet" href="../css/nav.css" />
<link rel="stylesheet" href="../css/portal.css" />
<link rel="stylesheet" href="../css/form.css" />

<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">

</head>

<body>
    <!--START WRAPPER-->
<main class="wrapper">
<header>
    <h1><a href="index.php"><i class="logo fa <?=$logo?>"<?=$logo_color?>></i>Katy Baker's IT162 Portal Site</a></h1>
    <nav>
    <ul class="topnav" id="myTopnav">
    <?=makeLinks($nav3)?> 
        <!-- <li><a href="index.php" class="selected">Home</a></li>
        <li><a href="big/index.php">Big</a></li>
        <li><a href="aia.php">AIA</a></li>
        <li><a href="flowchart.php">Flowchart</a></li>
        <li><a href="fp/index.php">Final Project</a></li>
        <li><a href="contactme.php">Contact Katy</li>
        <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li> -->
    </ul>
    </nav>
</header>

<section class="welcome">
<h2 class="pageID"><?=$pageID?></h2>
<!--header ends here-->
<!--header ends here-->

    
    <p>This page is coming soon :0)</p>


   </section>


<?php include "../includes/footer.php";?>
