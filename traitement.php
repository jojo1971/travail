<?php
//Vérification des données
$pseudo = (isset($_POST["pseudo"])) ? $_POST["pseudo"] : NULL;
$message = (isset($_POST["message"])) ? $_POST["message"] : NULL;
 
//On créé une variable pour donner un nom au fichier
$fichier = "tchat.txt";
 
//On ouvre le fichier. Si il n'existe pas il sera créé automatiquement
$fichier_a_ouvrir = fopen ($fichier, "a+");
//On écrit dans le fichier
fwrite($fichier_a_ouvrir, '<div class="bordure">'.$pseudo.' : '.$message.'</div>');
//On ferme la connexion
fclose ($fichier_a_ouvrir);
 
 //On ouvre le fichier en lecture 
$fichier_a_ouvrir = fopen ($fichier, "r"); 
//On lit son contenu 
$contenu_du_fichier = fgets($fichier_a_ouvrir, 1024); 
//On affiche son contenu 
echo $contenu_du_fichier; 
//On ferme la connexion 
fclose ($fichier_a_ouvrir);
?>