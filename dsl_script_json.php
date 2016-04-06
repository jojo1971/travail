<?php
header('content-type : text/javascript');
echo '
var objTab = {
"parent1": ["enfant1","enfant2","enfant3",],
"pays1" : ["ville1","ville2","ville3"],
"village" : ["maison1","maison2","maison3"]
};
';
?>
receiveMessage(objTab);