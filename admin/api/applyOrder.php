<?php 
    require '../connect.php';

    $id = $_POST['id_order'];

    $stmt = $pdo->prepare("INSERT INTO accepted_order SET id_order = ?, status=1");
    if($id == ''){
        $result = 0;
    }else{
        if($stmt->execute([$id])){
            $result = 1;
            $qry = $pdo->prepare("DELETE FROM orders WHERE id=?");
            $qry->execute([$id]);
        }else{
            $result = 2;
        }
    }
    

    echo $result;





?>