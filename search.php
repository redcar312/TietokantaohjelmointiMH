<?php
require_once('config.php');
if(isset($_GET['submit'])){
$search = filter_var($_GET['search'], FILTER_SANITIZE_STRING);
/* hakee inputin ja sanitoi inputin sisällön*/
try{
$sql = "SELECT DISTINCT primary_title FROM titles WHERE primary_title LIKE '$search%' LIMIT 25 ";
$prep = $dbcon->prepare($sql);
$prep->execute();
$rows = $prep->fetchAll();
// valmistelee ja suorittaa kyselyn


foreach($rows as $row){
echo $html = '<li>'.$row["primary_title"].'</li>';

}
// näyttää tulokset listana

}catch(PDOException $e){
    echo '<br>'.$e->getMessage();
}

}


?>