<?php
/*
Example: [[BrowserMessage]]

#$version = "6"; - This is were we put the browser version.
#$browser = "MSIE"; - Browser Name
#$platform = "Windows"; - Platform
#$message = "Please update your browser!";

*/

$version = isset($version)? $version : "6";
$browser = isset($browser)? $browser : "MSIE";
$platform = isset($platform)? $platform : "Windows";
$message = isset($message)? $message : "Please update your browser!";

if ( eregi("$browser $version", getenv( "HTTP_USER_AGENT" ) ) & eregi("$version", getenv("HTTP_USER_AGENT" ) ) & eregi("$platform", getenv("HTTP_USER_AGENT" ) ) ) {
	echo $message;
}
?>