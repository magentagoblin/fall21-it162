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
    $nav1['index.php'] = " home ";
    $nav1['shop.php'] = "jewelry / wearables ";
    $nav1['art.php'] = " art / sketches ";
    $nav1['about.php'] = " about sneezy ";
    

switch(THIS_PAGE){

    case 'index.php':
        $title = "sneezywear";
        $pageID = "> home ";
        $logo = 'fa-home';
        $logo_color = ' style="color:#C6DDF0"';
    break;

    case 'shop.php':
        $title = "sneezywear - jewelry / wearables ";
        $pageID = "> jewelry / wearables ";
        $logo = "fa-shopping-basket";
        $logo_color = ' style="color:#C6DDF0"';
    break;

    case 'art.php':
        $title = "sneezywear - art / sketches ";
        $pageID = "> art / sketches ";
        $logo = "fa-paint-brush";
        $logo_color = ' style="color:#C6DDF0"';
    break;

    case 'about.php':
        $title = "sneezywear - about sneezy ";
        $pageID = "> about sneezy ";
        $logo = "fa-paper-plane-o";
        $logo_color = ' style="color:#C6DDF0"';
    break;

    case 'example-product.php':
        $title = "sneezywear - example product ";
        $pageID = "> product details ";
        $logo = "fa-shopping-basket";
        $logo_color = ' style="color:#C6DDF0"';
    break;

    default:
        $title = THIS_PAGE;
        $logo = '';//no icon by default
        $logo_color = ''; //make logo_color an empty string by default

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
