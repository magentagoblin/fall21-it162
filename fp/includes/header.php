<?php include 'portal-config.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
<title><?=$title?></title>
<meta name="viewport" content="width=device-width" />
<meta name="robots" content="noindex,nofollow" />
<meta charset="utf-8">
<!-- <script src="https://use.fontawesome.com/6a71565c22.js"></script> -->
<!-- <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script> -->
<script src="https://use.fontawesome.com/d584deb88f.js"></script>

<!-- CSS --> 
<link rel="stylesheet" href="css/nav.css" />
<link rel="stylesheet" href="css/portal.css" />
<link rel="stylesheet" href="css/shop.css" />
<link rel="stylesheet" href="css/about.css" />

<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">

</head>

<body>
    <!--START WRAPPER-->
<main class="wrapper">
<header>
    <h1><a href="index.php"><i class="logo fa <?=$logo?>"<?=$logo_color?>></i>sneezywear</a></h1>
    <nav>
    <ul class="topnav" id="myTopnav">
    <?=makeLinks($nav1)?>
        <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
    </ul>
    </nav>
</header>

<section class="welcome">
<h2 class="pageID"><?=$pageID?></h2>
<!--header ends here-->