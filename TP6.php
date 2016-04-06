<?php header("content-type: text/javascript");
$tab = file_get_contents('./towns.txt');
$tab = unserialize($tab);
for($i=0;$i<count($tab);$i++){
    $string = $tab[i];
    echo $string;
    echo '<br />';
}


?>

var lettre = '<?php echo $_GET['lettre']; ?>';

receiveMessage(lettre);