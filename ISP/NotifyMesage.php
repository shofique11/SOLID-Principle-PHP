<?php
require_once 'MessageInterface.php';
 class NotifyMessage implements MessageInterface{
    public function messageSend(){
        echo  "Every employee get the performance bonus";
    }
 }
 $notify = new NotifyMessage();
 $notify->messageSend();
?>