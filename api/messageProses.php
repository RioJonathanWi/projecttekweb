<?php
require "../connect.php";
$user = $pdo->query("SELECT * FROM contactus")->fetchAll();

$card = "";
    foreach($user as $row){
        $card .= '<div class="card col-4 mx-3 mt-3" style="width: 18rem;">
        <div class="card-body">
        <h5 class="card-title">'.$row['nama'].'</h5>
        <h6 class="card-subtitle mb-2 text-muted">'.$row['email'].'</h6>
        <p class="card-text">'.$row['message'].'</p>
        </div>
        </div>';
    } 
    echo $card;
?>

