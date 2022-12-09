<?php
    require '../connect.php';

    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $no_telp = $_POST['no_telp'];

    $qry = "INSERT INTO data_pembeli SET nama = ?, alamat = ?, no_telp = ?";
    $stmt = $conn->prepare($qry);
    $stmt->execute([$nama, $alamat, $no_telp]);

    $qry2 = "SELECT * FROM data_pembeli WHERE nama = ? AND alamat = ? ";
    $stmt2 = $conn->prepare($qry2);
    $stmt2->execute([$nama, $alamat]);

    foreach($stmt2 as $row){
        $id = $row['id'];
    }

    $stmt3 = $conn->query("SELECT * FROM keranjang")->fetchAll();

    foreach($stmt3 as $row){
        $name = $row['name'];
        $qty = $row['quantity'];
        $price = $row['price'];

        $qry3 = "INSERT INTO orders SET p_name = ?, quantity = ?, price = ?, buyer_id = ?";
        $stmt4 = $conn->prepare($qry3);
        $stmt4->execute([$name, $qty, $price, $id]);
    }

    $qry4 = "DELETE FROM keranjang";
    $stmt5 = $conn->prepare($qry4);
    $stmt5->execute([]);

?>