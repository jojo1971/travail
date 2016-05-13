<?php
// Exemple 1
$fichier  = "tchat.txt";
$fichier_a_ouvrir = fopen($fichier, 'r');
$contenu = fgets($fichier_a_ouvrir, 1040);
$pieces = explode(":", $contenu);
$piecesLen = count($pieces);
for($i=0;$i<$piecesLen;$i++) {
 $pieces2 = explode(">", $pieces[$i]);
    var_dump($pieces2);
}



echo '</br>';

// Exemple 2
$data = "foo:*:1023:1000::/home/foo:/bin/sh";
list($user, $pass, $uid, $gid, $gecos, $home, $shell) = explode(":", $data);
echo $user; // foo
echo $pass; // *

?> 