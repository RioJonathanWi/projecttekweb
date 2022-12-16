<?php
    require '../connect.php';

    $output = "";

    $id = $_POST['id'];

    $stmt2 = $pdo->query("SELECT * FROM keranjang WHERE id = '$id'")->fetchAll();

    foreach($stmt2 as $row){
        $qty = $row['quantity'];
        if ($qty > 1) {
            $qry = "UPDATE keranjang SET quantity=quantity-1 WHERE id = ?"; 
            $stmt = $pdo->prepare($qry);
            $stmt->execute([$id]);
            
        } else if ($qty == 1) {
            $qry = "DELETE FROM keranjang WHERE id = ?"; 
            $stmt = $pdo->prepare($qry);
            $stmt->execute([$id]);
        }
    }

    $stmt3 = $pdo->query("SELECT * FROM keranjang")->fetchAll();

    foreach($stmt3 as $row){
        $output .='
            <tr>
                <td><button type="button" class="btn-close" onclick="deleteKeranjang('.$row['id'].')" aria-label="Close"></button></td>
                <td>'.$row['name'].'</td>
                <td>'.$row['quantity'].'</td> 
                <td>'.$row['price'].'</td> 
                <td>'.$row['price']*$row['quantity'].'</td> 
            </tr>
        ';
    }
    echo $output;
?>