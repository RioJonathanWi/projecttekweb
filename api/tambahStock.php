<?php 
require "../connect.php";

$nama = $_POST['namaProduk'];
$jumlah = $_POST['quantity'];
$harga = $_POST['price'];

$stmt = $pdo->prepare("INSERT INTO stock SET nama = ?, quantity=?, harga=?");
if($stmt->execute([$nama, $jumlah, $harga])){
    $result = 1;
}else{
    $result = 2;
}
echo $result;

?>