<?php
/**
* CmsEasy Live http://www.cmseasy.cn 				  			 
* by CmsEasy Live Team 							  						
**
* Software Version: CmsEasy Live v 1.2.0 					  				  		      
* Copyright 2009 by: CmsEasy, (http://www.cmseasy.cn) 	  
* Support, News, Updates at: http://www.cmseasy.cn 			  			  
**
* This program is not free software; you can't may redistribute it and modify it under	  
**
* This file contains configuration settings that need to altered                  
* in order for CE Live to work, and other settings that            
**/

session_start();
include('../include/config.inc.php');
include(CE_ROOT.'/include/celive.class.php');
$login = new celive();
$login->auth();
$login->template();

$GLOBALS['auth']->logout();
if ($GLOBALS['auth']->check_logout()) {
    header('Location: '.CE_ROOT.'/admin/login.php');
}
?>