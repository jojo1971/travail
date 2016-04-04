<?php header('Content-type : text/javascript'); ?>
var string = 'bonjour <? $_GET['nick'] ?> ! ';

receiveMessage(string);