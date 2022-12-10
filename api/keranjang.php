<?php
    require '../connect.php';

    $output = "";

    $name = $_POST['name'];
    $price = $_POST['price'];

    $query = "SELECT * FROM keranjang WHERE name = ?";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$name]); 

    if($stmt->rowCount()==1){
        $qry = "UPDATE keranjang SET quantity = quantity+1 WHERE name = ?";
        $stmt2 = $pdo->prepare($qry);
        $stmt2->execute([$name]); 

    } else if ($stmt->rowCount()==0){
        $qry = "INSERT INTO keranjang SET name = ? , quantity = ? , price = ?";
        $stmt2 = $pdo->prepare($qry);
        $stmt2->execute([$name, 1, $price]);
    }

    $data = $pdo->query("SELECT * FROM keranjang")->fetchAll();
        foreach ($data as $row){
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