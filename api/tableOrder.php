<?php 
    require '../connect.php';

    $stmt = $pdo->query("SELECT * FROM orders")->fetchAll();

    $output ="";
    $output .='<table id="logTable" class="table table-striped table-light py-3 w-100 text-center">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Produk</th>
                <th>Quantity</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>';
    
    foreach($stmt as $row){
        $output .= '
        <tr>
            <td>'.$row['id'].'</td>
            <td>'.$row['nama_produk'].'</td>
            <td>'.$row['quantity'].'</td>
            <td>'.$row['price'].'</td>
        </tr>
        ';
    }

    $output .= '</tbody>
                </table>';

    echo $output;
?>