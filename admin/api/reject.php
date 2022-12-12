<?php 
require "../connect.php";

$id = $_POST['data_id'];

try{
    $sql = "DELETE FROM jobs WHERE id=$id";
    $pdo->exec($sql);
    echo true;
} catch(PDOException $e){
    echo false;
}


?>