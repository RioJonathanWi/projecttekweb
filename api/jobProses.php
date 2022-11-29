<?php
require '../connect.php';

$message = "";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    header('Content-type: application/json');

    $nama = $_POST['nama'];
    $date = $_POST['date'];
    $address = $_POST['address'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $jobs = $_POST['jobs'];
    $file = $_POST['file'];

    $insert_data = $pdo->prepare("INSERT INTO `jobs` SET  nama = ?, tanggal_lahir = ?, alamat = ?, nomor_telepon = ?, email = ?, job_id = ?, fileCV = ?");
    $insert_data->execute([$nama, $date, $address, $number, $email, $jobs, $file]);

    if($insert_data){
        $message = 'Data berhasil dimasukkan!';
    }else{
        $message = 'Terjadi kesalahan saat memasukkan data, silahkan mengulangi kembali!';
    }
    
    echo json_encode(['message' => $message]);
}


?>