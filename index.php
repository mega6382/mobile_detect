<?php

include "mobile_detect.php";

$mobdect = new mobile_detect();
//Check to see of the device is a tabelt
$isTablet = $mobdect->isTablet();
//Check to see if the device is a Mobile
$isMobile = $mobdect->isMobile();
//Get all the predefined properties
$properties = $mobdect->getproperties();
var_dump($mobdect);
var_dump($isTablet);
var_dump($isTablet);
var_dump($properties);
foreach($properties as $key => $value)
{
	//Check to see what are the versions of the properties
	var_dump("$key =>",$mobdect->version($key));
}