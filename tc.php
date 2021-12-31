<?php
require_once("config.php");
/*Matias Hurtamo 
sql Queryt -> Querys.sql */

$sql = "SELECT * FROM V1";
$prep = $dbcon->prepare($sql);
//valmistelu
$prep->execute(); //kyselyn suoritus

$rows = $prep->fetchAll();

$html = "<h1>10 Tom Cruise Elokuvaa </h1>";
$html .= '<ul>';

foreach($rows as $row){
    $html .= '<li> Nimi: ' .$row['primary_title']. ' ' .'Rooli: '. $row['role_'] . '</li>';
} 
$html .= '</ul>';

echo $html;
/*hakee kyselyn tulokset riveinä, ja näyttää erilliset rivit listana*/

?>