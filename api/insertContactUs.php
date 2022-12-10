<?php
    require "../connect.php";

    $name = $_POST['name'];
    $email = $_POST['email'];
    $msg = $_POST['msg'];

    $query = "INSERT INTO contactus (name, email, msg) VALUES ('$name', '$email', '$msg')";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
?>
