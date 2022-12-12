<?php 
    require '../connect.php';

    $stmt = $pdo->query("SELECT * FROM accepted_order a JOIN orders_data o ON o.id = a.id_order")->fetchAll();

    $output ="";
    $output .='<div class="mx-0 row mt-4 grid" style="color:black;">
    <div class="col-sm-12 col-lg-12 mb-4">

        <div class="applied card px-lg-2" style="color:white; background: #293041">
            <div class="card-body">
            ' ;
    
    foreach($stmt as $row){
        $status = $row['status'];
        if($status == 1){
            $stats = "Packing";
            $output .= '
            <div class="row">
                <div class="col-12 col-lg-12">
                    <i class="fa-solid fa-briefcase"></i>
                    <h6 class="d-inline item-name ms-lg-2">'.$row['nama_produk'].'</h6>
                    <h6 class="d-inline item-name ms-lg-2">Total Price: '.$row['price'].'</h6>
                    <h6 class="d-inline item-name ms-lg-2" style="color: green;">Status: '.$stats.'</h6>
                    <button class="btn btn-primary mx-3" onclick="changeStatus('.$row['id'].')">Change Status</button>
                    <hr style="height:2px;border-width:0;color:gray;background-color:gray">
                </div>
            </div>
            ';
        }else if($status == 2){
            $stats = "Delivered";
            $output .= '
            <div class="row">
                <div class="col-12 col-lg-12">
                    <i class="fa-solid fa-briefcase"></i>
                    <h6 class="d-inline item-name ms-lg-2">'.$row['nama_produk'].'</h6>
                    <h6 class="d-inline item-name ms-lg-2">Total Price: '.$row['price'].'</h6>
                    <h6 class="d-inline item-name ms-lg-2" style="color: red;">Status: '.$stats.'</h6>
                    <hr style="height:2px;border-width:0;color:gray;background-color:gray">
                </div>
            </div>
            ';
        }
    }

    $output .= '</div>
                    </div>
                </div>';

    echo $output;
?>