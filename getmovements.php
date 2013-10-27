<?php

include_once 'datafeedconnection.php';
$activationfound = false;
while ($con->hasFrame()) {
    $msg = $con->readFrame();
    foreach (json_decode($msg->body) as $event) { 
        if($event->header->msg_type == '0001' && !$activationfound) {
            var_dump($event);
            $trainid = $event->body->train_id;
            $activationfound = true;
        }
        if($event->body->train_id == $trainid) {
            var_dump($event);
        }
    }
    $con->ack($msg);
}

?>
