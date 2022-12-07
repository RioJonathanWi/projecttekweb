<?php
require "../connect.php";
$user = $pdo->query("SELECT * FROM messagee")->fetchAll();

$tabel = "";
$tabel .='<div class="card" style="width: 18rem;">
        <div class="card-body">
        <h5 class="card-title">Nama</h5>
        <h6 class="card-subtitle mb-2 text-muted">Email</h6>
        <p class="card-text">Message</p>
        </div>
        </div>';

    foreach($user as $row){
        $tabel .= '<div class="card" style="width: 18rem;">
        <div class="card-body">
        <h5 class="card-title">'.$row.['nama']'</h5>
        <h6 class="card-subtitle mb-2 text-muted">'.$row.['email']'</h6>
        <p class="card-text">'.$row.['Message']'</p>
        </div>
        </div>';
    } 
    $tabel .= '</tbody>
    </table>';

    echo $tabel;
?>

