<?php
$towns = unserialize(file_get_contents('./towns.txt'));
$townsLen = count($towns);
sort($towns);

$tab = array();
for($i=0;$i<$townsLen && count($tab) < 10 ;$i++){
    if(stripos($towns[$i],$_GET['s'] ===0)){
        array_push($tab, $towns[$i]);
    }
}
echo implode('|', $tab);
?>