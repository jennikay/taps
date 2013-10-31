<?php
require_once('datafeedconnection.php');
require_once('parissetup.php');

// Read in each frame, decode and deal with it
while ($con->hasFrame()) {
    $msg = $con->readFrame();
    foreach (json_decode($msg->body) as $event) {
        switch ($event->header->msg_type) {
            case '0001':
                // deal with activation
                break;
            case '0002':
                // deal with canellation
                break;
            case '0003':
                // deal with movement
                break;
            case '0005':
                // deal with reinstatement
                break;
            case '0006':
                // deal with change of origin
                break;
            case '0007':
                // deal with change of identity
                break;
            default:
                die ('invalid message received');
        } //switch
    } //foreach
} //while


?>
