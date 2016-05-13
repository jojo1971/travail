<?php
$pseudo = isset($_POST['pseudo']) ? $_POST['pseudo'] : null;
$message = isset($_POST['message']) ? $_POST['message'] : null;

$fichier = 'tchat.txt';
$fichlen = count($fichier);


$fichier_a_ouvrir = fopen($fichier, 'a+');
fwrite($fichier_a_ouvrir, '<div class="bordure">'.$pseudo.' : '.$message.'</div>');
fclose($fichier_a_ouvrir);

$fichier_a_ouvrir = fopen($fichier, 'r');
$contenu = fgets($fichier_a_ouvrir, 1040);
echo $contenu;

fclose($fichier_a_ouvrir);

?>