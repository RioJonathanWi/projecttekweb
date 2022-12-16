<?php 
require '../connect.php';

$user = $pdo->query("SELECT * FROM stock")->fetchAll();
$card = "";
    foreach($user as $row){
        $card .= '<div class="col-4 mt-3">
        <div class="card h-100 mb-3" id="produk">
          <img src="assets/'.$row['nama'].'.jpg" class="card-img-top mx-auto d-block" alt="...">
          <div class="card-body">
            <h5 class="card-title" id="nama">'.$row['nama'].'</h5>
            <p class="card-text">Rp '.number_format($row['harga']).'</p>
            <h2 class="price-hidden d-none" id="harga">100000</h2>
          </div>
        </div>
      </div>';
    } 
    echo $card;




?>