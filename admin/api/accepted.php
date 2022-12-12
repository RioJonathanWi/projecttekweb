<?php 
    require '../connect.php';

    $stmt = $pdo->query("SELECT * FROM apply_jobs a JOIN jobs_data j ON j.id = a.id_apply")->fetchAll();

    $output ="";
    $output .='<div class="mx-0 row mt-4 grid" style="color:black;">
    <div class="col-sm-12 col-lg-12 mb-4">

        <div class="applied card px-lg-2" style="color:white; background: #293041">
            <div class="card-body">
            ' ;
    
    foreach($stmt as $row){
        $output .= '
        <div class="row">
            <div class="col-12 col-lg-12">
                <i class="fa-solid fa-briefcase"></i>
                <h6 class="d-inline item-name ms-lg-2">'.$row['nama'].'</h6>
                <h6 class="d-inline item-name ms-lg-2">Tanggal Interview: '.$row['tanggal_interview'].'</h6>
                <hr style="height:2px;border-width:0;color:gray;background-color:gray">
            </div>
        </div>
        ';
    }

    $output .= '</div>
                    </div>
                </div>';

    echo $output;
?>