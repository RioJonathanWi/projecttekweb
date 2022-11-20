<?php
require '../connect.php';
session_start();

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    // NNTI DI UNCOMMENT SETELAH SIMUL
    
    $email = test_input($_POST["email"]);

    // email format not valid
    // if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    //     $result = 3;
    // }
    // else {
        //cek email password
        if(isset($_POST['email']) && isset($_POST['password'])){
            $email = $_POST['email'];
            $password = $_POST['password'];
            $query = "SELECT * FROM logindata WHERE email = '$email' AND password = '$password'";
            $loginstmt = $pdo->prepare($query);
            $loginstmt->execute();

            //cek apakah punya account
            if($loginstmt->rowCount() == 1) {
                $data = $loginstmt->fetch();
                $_SESSION['name'] = $data['name'];
                $result = 1;
            } else if ($loginstmt->rowCount() == 0) {
                    //email or password is wrong
                    $result = 0;
                }
            }           
        }
        else{
            $result = 0;
        }
    // }
    echo $result;
?>