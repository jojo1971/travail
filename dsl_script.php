<?php header('Content-type : text/javascript');?>

var string = 'bonjour <?php echo $_GET['nick']?> ! ';
receiveMessage(string);