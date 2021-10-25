<?php
/*
portal-config.php

Used to store all of our WEB120 configuration information

*/

//prevents data from being sent early
ob_start();

//this helps us avoid PHP date errors:
date_default_timezone_set('America/Los_Angeles');

//echo basename($_SERVER['PHP_SELF']);
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo $_SERVER['PHP_SELF'];
//die;
//echo THIS_PAGE;

//die;


//place URL & labels in the array here for navigation:
    $nav1['index.php'] = "Welcome";
    $nav1['big/index.php'] = "Big";
    $nav1['aia.php'] = "AIA";
    $nav1['flowchart.php'] = "Flowchart";
    $nav1['fp/index.php'] = "Final Project";
    $nav1['contactme.php'] = "Contact Katy";
//nav for Big subdirectory
    $nav2['../index.php'] = "Welcome";
    $nav2['index.php'] = "Big";
    $nav2['../aia.php'] = "AIA";
    $nav2['../flowchart.php'] = "Flowchart";
    $nav2['../fp/index.php'] = "Final Project";
    $nav2['../contactme.php'] = "Contact Katy";
//nav for Final Project subdirectory
    $nav3['../index.php'] = "Welcome";
    $nav3['../big/index.php'] = "Big";
    $nav3['../aia.php'] = "AIA";
    $nav3['../flowchart.php'] = "Flowchart";
    $nav3['index.php'] = "Final Project";
    $nav3['../contactme.php'] = "Contact Katy";
    

switch(THIS_PAGE){

    case 'index.php':
        $title = "Katy Baker's IT162 Portal Site";
        $pageID = "Welcome";
        $logo = 'fa-home';
        $logo_color = ' style="color:#f00"';
    break;

    case 'contactme.php':
        $title = "Katy Baker's Contact Page";
        $pageID = "Contact Katy";
        $logo = "fa-paper-plane-o";
        $logo_color = ' style="color:#fff"';
    break;

    case 'aia.php':
        $title = "Katy's Final Project AIA (Client work)";
        $pageID = "A/I/A";
        $logo = "fa-universal-access";
        $logo_color = ' style="color:#FFA500"';
    break;

    case 'flowchart.php':
        $title = "Katy Baker's Flowchart Page";
        $pageID = "Flowchart";
        $logo = "fa-pencil";
        $logo_color = ' style="color:#ff0"';
    break;

    // case 'big/index.php':
    //     $title = "Katy Baker's IT162 Big Project Page";
    //     $pageID = "Big Project";
    //     $logo = 'fa-home';
    //     $logo_color = ' style="color:#f0f"';
    // break;

    // case 'fp/index.php':
    //     $title = "Katy Baker's IT162 Final Project Page";
    //     $pageID = "Final Project";
    //     $logo = 'fa-home';
    //     $logo_color = ' style="color:#f0f"';
    // break;

    default:
        $title = THIS_PAGE;
        $logo = '';//no icon by default
        $logo_color = ''; //make logo_color an empty string by default

}
//using full url for pages inside subdirectories --basename function kept these pages from working correctly
switch($_SERVER['PHP_SELF']){
    case '/it162/big/index.php';
        $title = "Katy Baker's IT162 Big Project Page";
        $pageID = "Big Project";
        $logo = 'fa-expand';
        $logo_color = ' style="color:#f0f"';
    break;
    case '/it162/fp/index.php';
        $title = "Katy Baker's IT162 Final Project Page";
        $pageID = "Final Project";
        $logo = 'fa-code';
        $logo_color = ' style="color:#00f"';
    break;
}


/*
makeLinks function will create our dynamic nav when called.
Call like this:
echo makeLinks($nav1); #in which $nav1 is an associative array of links
*/
function makeLinks($linkArray)
{
    $myReturn = '';

    foreach($linkArray as $url => $text)
    {
        if($url == THIS_PAGE)
        {//selected page - add class reference
	    	$myReturn .= '<li><a class="selected" href="' . $url . '">' . $text . '</a></li>' . PHP_EOL;
    	}else{
	    	$myReturn .= '<li><a href="' . $url . '">' . $text . '</a></li>'  . PHP_EOL;
    	}    
    }
      
    return $myReturn;    
}

?>
