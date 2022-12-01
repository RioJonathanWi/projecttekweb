<?php 
    require '../connect.php';

    $id = $_POST['id_jobs'];
    $tanggal = $_POST['tanggal_interview'];

    $stmt = $pdo->prepare("INSERT INTO apply_jobs SET id_apply = ?, tanggal_interview=?");
    if($stmt->execute([$id,$tanggal])){
        $result = 1;
        $qry = $pdo->prepare("DELETE FROM jobs WHERE id=?");
        $qry->execute([$id]);
    }else{
        $result = 0;
    }

    echo $result;





?>