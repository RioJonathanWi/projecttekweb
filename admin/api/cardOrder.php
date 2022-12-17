<?php 
    require '../connect.php';

    $stmt = $pdo->query("SELECT * FROM orders o JOIN data_pembeli dp ON dp.id = o.buyer_id")->fetchAll();
    
    
    $output ='<div class="row">';

    foreach($stmt as $row){
        $nametrim = str_replace(' ', '', $row['nama']);
        $total = $row['quantity'] * $row['price'];
        $output .= '
        <div class="card-wrapper mt-3 col-4 mx-5 mb-2" data-bs-toggle="modal" data-bs-target="#'.$nametrim.'">
        <i class="fa-solid fa-exclamation fa-7x logo" style="color: red; margin-bottom: 20px; margin-top: 10px;"></i>
        <hr style="width:100%;text-align:left;margin-left:0; height: 3px;">
        <div class="text">
            <h3>'.$row['p_name'].'</h3>
            <h5>Quantity: '.$row['quantity'].'</h5>
            <h5>Price per Item: '.$row['price'].'</h5>
            <h5>Total Price: IDR '.$total.'</h5>
        </div>
        <div class="btn-wrapper">
            <button class="btn" id="btn-accept" value="'.$row['id'].'"onclick="apply('.$row['id'].')">Accept</button>
            <button class="btn" id="btn-delete" value="'.$row['id'].'" onclick="deleteData('.$row['id'].')">Delete</button>
        </div>
        </div>
        ';
    }

    $output .= '</div>';

    echo $output;
?>