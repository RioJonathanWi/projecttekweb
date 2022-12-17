<?php 
require "../connect.php";

$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$status = $_POST['status'];

$stmt = $pdo->prepare("INSERT INTO logindata SET email=?, password=?, name=?, status=?");
if($stmt->execute([$username, $password, $nama, $status])){
    $result = 1;
}else{
    $result = 2;
}
echo $result;

?>