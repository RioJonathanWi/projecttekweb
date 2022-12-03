<?php
require "../connect.php";
$user = $pdo->query("SELECT * FROM stock")->fetchAll();

$tabel = "";
$tabel .='<table id="logTable" class="table table-striped table-light w-100 text-center">
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


