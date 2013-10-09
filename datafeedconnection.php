<?php 
error_reporting(E_ALL);
$server = "tcp://datafeeds.networkrail.co.uk:61618"; 
$user = "jennikay@gmail.com"; 
$password = "DjenniD1991D!"; 
$channel = "TRAIN_MVT_ALL_TOC";
 
$con = new Stomp($server, $user, $password); 
if (!$con) {
    die('Connection failed: ' . stomp_connect_error());
}
 
$con->subscribe("/topic/" . $channel);

 
?>
