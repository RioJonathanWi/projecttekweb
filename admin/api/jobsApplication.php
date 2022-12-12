<?php 
    require '../connect.php';

    $stmt = $pdo->query("SELECT * FROM jobs")->fetchAll();
    
    
    $output ='<div class="row">';

    foreach($stmt as $row){
        $nametrim = str_replace(' ', '', $row['nama']);
        $output .= '
        <div class="col-md-4">
            <div class="card p-3 mb-2" data-bs-toggle="modal" data-bs-target="#'.$nametrim.'">
                <div class="d-flex justify-content-between">
                    <div class="d-flex flex-row align-items-center">
                        <div class="icon"> <i class="fa-solid fa-user"></i> </div>
                        <div class="ms-2 c-details">
                            <h6 class="mb-0">'.$row['nama'].'</h6> <span>'.$row['tanggal_submit'].'</span>
                        </div>
                    </div>
                    <div class="badge"> <span>'.$row['job_id'].'</span> </div>
                </div>
                <div class="mt-5">
                    <h3 class="heading">'.$row['nama'].'</h3>
                </div>
            </div>
        </div>

        
        ';
    }

    $output .= '</div>';

    echo $output;
?>