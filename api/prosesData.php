<?php
    require '../connect.php';

    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $no_telp = $_POST['no_telp'];

    $qry = "INSERT INTO data_pembeli SET nama = ?, alamat = ?, no_telp = ?";
    $stmt = $pdo->prepare($qry);
    $stmt->execute([$nama, $alamat, $no_telp]);

    $qry2 = "SELECT * FROM data_pembeli WHERE nama = ? AND alamat = ? ";
    $stmt2 = $pdo->prepare($qry2);
    $stmt2->execute([$nama, $alamat]);

    foreach($stmt2 as $row){
        $id = $row['id'];
    }

    $stmt3 = $pdo->query("SELECT * FROM keranjang")->fetchAll();

    foreach($stmt3 as $row){
        $name = $row['name'];
        $qty = $row['quantity'];
        $price = $row['price'];

        $qry3 = "INSERT INTO orders SET p_name = ?, quantity = ?, price = ?, buyer_id = ?";
        $stmt4 = $pdo->prepare($qry3);
        $stmt4->execute([$name, $qty, $price, $id]);

        $qry8 = "INSERT INTO orders_data SET nama_produk = ?, quantity = ?, price = ?";
        $stmt8 = $pdo->prepare($qry8);
        $stmt8->execute([$name, $qty, $price]);
    }

    $qry4 = "DELETE FROM keranjang";
    $stmt5 = $pdo->prepare($qry4);
    $stmt5->execute([]);

    $result = 1;

    echo $result;

?>