<?php
    require "connect.php";

    if (isset($_POST["submit"])){
        if(isset($_POST['name'])){
            $name = $_POST['name'];
            if(isset($_POST['email'])){
                $email = $_POST['email'];
                if(isset($_POST['msg'])) {
                    $msg = $_POST['msg'];
                    if(empty($msg)){
                        echo "<script> alert('Data masih kosong') </script>";
                    }else{
                        $query = "INSERT INTO contactus (nama, email, msg) VALUES ('$name', '$email', '$msg')";
                        $result = $pdo->query($query);
                    }
                    
                }
            }
        }
    }else{
        echo "<script> alert('Data masih kosong') </script>";
    }
    
    header("locations: 'contactus.php'");
    // if (mysqli_query($conn, $sql)) {
	// 	echo json_encode(array("statusCode"=>200));
	// } 
	// else {
	// 	echo json_encode(array("statusCode"=>201));
	// }
	// mysqli_close($conn);
?>
