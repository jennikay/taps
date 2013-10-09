<?php

include_once 'datafeedconnection.php';

while ($con->hasFrame()) {
    $msg = $con->readFrame();
    foreach (json_decode($msg->body) as $event) { 
        echo $event->body->variation_status . '<br>';
    }
    $con->ack($msg);
}

?>
