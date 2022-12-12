<?php 
    require '../connect.php';

    $ids = $_POST['id_order'];

    $stats = 2;
    
    $sql = "UPDATE accepted_order SET status=? WHERE id_order=?";
    $stmt= $pdo->prepare($sql);
    $stmt->execute([$stats, $ids]);

    $status = 1;

    echo $status;
?>