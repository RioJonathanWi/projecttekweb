<?php
require "../connect.php";
$user = $pdo->query("SELECT * FROM stock")->fetchAll();

$tabel = "";
$tabel .='<table class="table table-striped table-dark w-100 text-center" id="logTable" >
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama Produk</th>
            <th>Quantity</th>
            <th>Price</th>
        </tr>
    </thead>
    <tbody>';

    foreach($user as $row){
        $tabel .= '<tr>
            <td>'.$row['id'].'</td>
            <td>'.$row['nama'].'</td>
            <td>'.$row['quantity'].'</td>
            <td>'.$row['harga'].'</td>
        </tr>';
    } 
    $tabel .= '</tbody>
    </table>';

    echo $tabel;
?>


