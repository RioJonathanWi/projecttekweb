<?php
require '../connect.php';

$message = "";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    header('Content-type: application/json');

    $nama = $_POST['nama'];
    $dates = $_POST['dates'];
    $address = $_POST['address'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $jobs = $_POST['jobs'];
    $pic = ($_FILES['pic']['name']);
    $file = ($_FILES['file']['name']);

    //Foto Diri
    $fotopic_name = $_FILES['pic']['name'];
    $picExt = explode('.', $fotopic_name);
    $filetype1 = strtolower(end($picExt));
    $tmpPic = $_FILES['pic']['tmp_name'];

    //File CV
    $cv_name = $_FILES['file']['name'];
    $cvExt = explode('.', $cv_name);
    $filetype2 = strtolower(end($cvExt));
    $tmpCV = $_FILES['file']['tmp_name'];
    
    $pics = basename($pic);
    $files = basename($file);

    $allowed = array('jpg','png','jpeg', 'pdf', 'docx');

    $fileDestination = 'D:\xampp\htdocs\projecttekweb\uploads\fotoDiri';
    $fileDestination2 = 'D:\xampp\htdocs\projecttekweb\uploads\CV';

    if(!in_array($filetype1, $allowed) || !in_array($filetype2, $allowed)){
        $message = 'Tipe file yang dapat digunakan adalah (.jpg, .png, .jpeg, .pdf, .docx)';
        $result = 0;
    }
    else{
        //Foto
        $filenamenew1 = $nama.'.'.$filetype1;
        $targetDir1 = $fileDestination.$filenamenew1;
        $moveLD1 = move_uploaded_file($tmpPic, $targetDir1);

        //CV
        $filenamenew2 = $nama.'.'.$filetype2;
        $targetDir2 = $fileDestination2.$filenamenew2;
        $moveLD2 = move_uploaded_file($tmpCV, $targetDir2);

        $date = date("Y/m/d");
        $insert_data = $pdo->prepare("INSERT INTO `jobs` SET  nama = ?, tanggal_lahir = ?, alamat = ?, nomor_telepon = ?, email = ?, job_id = ?, foto_diri = ?, fileCV = ?, tanggal_submit = ?");
        $insert_data->execute([$nama, $dates, $address, $number, $email, $jobs, $filenamenew1 ,$filenamenew2, $date]);

        $insert_data2 = $pdo->prepare("INSERT INTO `jobs_data` SET  nama = ?, tanggal_lahir = ?, alamat = ?, nomor_telepon = ?, email = ?, job_id = ?, foto_diri = ?, fileCV = ?, tanggal_submit = ?");
        $insert_data2->execute([$nama, $dates, $address, $number, $email, $jobs, $filenamenew1 ,$filenamenew2, $date]);

        if($insert_data){
            $message = 'Data berhasil dimasukkan!';
            $result = 1;
        }else{
            $message = 'Terjadi kesalahan saat memasukkan data, silahkan mengulangi kembali!';
            $result = 0;
        }
        
        
        }

        echo json_encode(['message' => $message,
        'result_code' => $result]);
}


?>