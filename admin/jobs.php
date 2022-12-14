<?php
    require 'connect.php';  
    session_start();
    $name = $_SESSION['name'];
    $status = $_SESSION['status'];
    if(isset($_SESSION['login'])){
        
    }else{
        header('location: login.php');
    };
    
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/styleJobs.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Datatable -->
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css" rel="stylesheet">

    <!-- Sweet Alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.js"></script>

    <title>Admin</title>
    <style>
        @media screen and (max-width: 575px){
            .nav-item{
                margin: 10px;
            }
        }
    </style>
  </head>
  <body>
    
  <div class="container-fluid overflow-hidden">
    <div class="row vh-100 overflow-auto">
        <div class="col-12 col-sm-3 col-xl-2 px-sm-2 px-0 bg-dark d-flex sticky-top">
            <div class="d-flex flex-sm-column flex-row flex-grow-1 align-items-center align-items-sm-start px-3 pt-2 text-white">
                <a href="/" class="d-flex align-items-center pb-sm-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-5">Menu</span>
                </a>
                <ul class="nav nav-pills flex-sm-column flex-row flex-nowrap flex-shrink-1 flex-sm-grow-0 flex-grow-1 mb-sm-auto mb-0 justify-content-center align-items-center align-items-sm-start" id="menu">
                <li class="nav-item">
                        <a href="home.php" class="nav-link align-middle px-0">
                        <i class="fas fa-house"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="order.php" class="nav-link px-0 align-middle">
                        <i class="fa-solid fa-cart-shopping"></i><span class="ms-1 d-none d-sm-inline">Orders</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="jobs.php" class="nav-link px-0 align-middle">
                        <i class="fa-solid fa-note-sticky"></i> <span class="ms-1 d-none d-sm-inline">Jobs</span> </a>
                    </li>
                    <li class="nav-item">
                        <a href="stockBarang.php" class="nav-link px-0 align-middle">
                        <i class="fa-solid fa-floppy-disk"></i> <span class="ms-1 d-none d-sm-inline">Stock</span> </a>
                    </li>
                    <li class="nav-item">
                        <a href="message.php" class="nav-link px-0 align-middle">
                        <i class="fa-solid fa-message"></i><span class="ms-1 d-none d-sm-inline"></span>Message</a>
                    </li>
                    <li class="nav-item">
                        <a href="applied.php" class="nav-link px-0 align-middle">
                        <i class="fa-solid fa-square-check"></i><span class="ms-1 d-none d-sm-inline"></span>Accepted Applicants</a>
                    </li>
                    <li class="nav-item">
                        <a href="acceptedOrder.php" class="nav-link px-0 align-middle">
                        <i class="fa-solid fa-cart-plus"></i><span class="ms-1 d-none d-sm-inline"></span>Accepted Orders</a>
                    </li>
                </ul>
                <div class="dropdown py-sm-4 mt-sm-auto ms-auto ms-sm-0 flex-shrink-1">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="d-none d-sm-inline mx-1"><?php echo $name ?></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                        <?php if ($status == 'keyadmin'){?>
                            <li><a class="dropdown-item" href="newAdmin.php">Add Admin</a></li>
                       <?php } ?>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="logout.php">Sign out</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col d-flex flex-column h-sm-100 content">
            <main class="row overflow-auto">
                <div class="col pt-4">
                    <h2 style="color: white">New Jobs Application</h2>
                    <div class="card-container" id="card-cont"></div>
                </div>
            </main>
        </div>
    </div>
    <?php
    $stmt = $pdo->query("SELECT * FROM jobs")->fetchAll();
    
    foreach($stmt as $row){?>
        <div class="modal fade" id="<?php echo str_replace(' ', '', $row['nama']);?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Applicants</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="foto">
                <img class="" src="uploads/FotoDiri<?php echo $row['foto_diri']?>" alt="" width="354" height="472">
                </div>
                <div class="info">
                    <h4 class="mt-2">Nama</h4>
                    <p class="mt-2"><?php echo $row['nama']?></p>
                    <h4 class="mt-2">Tanggal Lahir</h4>
                    <p class="mt-2"><?php echo $row['tanggal_lahir']?></p>
                    <h4 class="mt-2">Alamat</h4>
                    <p class="mt-2"><?php echo $row['alamat']?></p>
                    <h4 class="mt-2">Nomor Telepon</h4>
                    <p class="mt-2"><?php echo $row['nomor_telepon']?></p>
                    <h4 class="mt-2">Email</h4>
                    <p class="mt-2"><?php echo $row['email']?></p>
                    <h4 class="mt-2">Job Position yang Diinginkan</h4>
                    <p class="mt-2"><?php echo $row['job_id']?></p>
                <a class="mt-2" href="uploads/CV<?php echo $row['fileCV']?>">Curriculum Vitae</a>
                <div id="emailHelp" class="form-text">Klik untuk melihat CV!</div>
                </div>
                <br>
                
                <select class="form-select mt-2" id="tgl_interview" onfocus='this.size=5;' onblur='this.size=1;' onchange='this.size=1; this.blur();' required>
                    <option value="">Pilih Tanggal Interview yang Tersedia</option>
                    <?php 
                        $qry3 = "SELECT * FROM aval_interview";
                        $stmt3 = $pdo->query($qry3);
                        foreach($stmt3 as $row3){
                            ?>
                            <option value="<?php echo $string = str_replace(' ', '', $row3['tanggal_interview']);?>"><?php echo $row3['tanggal_interview']?></option>
                        <?php
                        }
                    ?>
                </select>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger" onclick="reject(<?php echo $row['id']?>)" >Reject</button>
                <button type="button" class="btn btn-success" onclick="apply(<?php echo $row['id']?>)">Apply</button>
            </div>
            </div>
        </div>
        </div>

    <?php }?>


    
</div>
    <script>
        $(document).ready(function(){
            // var xmlhttp = new xXMLHttpRequest();
            // xmlhttp.onreadystatechange = function(){
            //     if(this.readyState == 4 && this.status == 200){
            //         $("#card-cont").html(this.responseText);
            //     }
            // };

            // xmlhttp.open("POST", "api/cardOrder.php", true);
            // xmlhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            // xmlhttp.send(null);

            var updateTable = setInterval(function(){
            $.ajax({
                type: "POST",
                url: "api/jobsApplication.php",
                success: function(table){
                    document.getElementById("card-cont").innerHTML = table;
                    
                }
            })
            
        }, 2000);

        

        });
        
        function reject(id){
            $.ajax({
                type:"POST",
                url: "api/reject.php",
                data:{
                    data_id: id
                },
                success: function(result){
                    if(result == true){
                        Swal.fire({
                            icon: 'success',
                            title: 'Applicants has been rejected',
                            showConfirmButton: true,
                            timer: 1500
                        })
                    }
                }
            })
            
        }
        

        function apply(id){
            $tgl = $("#tgl_interview").val();
            $.ajax({
                type:"POST",
                url: "api/applyJobs.php",
                data:{
                    id_jobs: id,
                    tanggal_interview: $tgl
                },
                success: function(result){
                    if(result == 1){
                        Swal.fire({
                            icon: 'success',
                            title: 'Applicants has been applied',
                            showConfirmButton: true,
                            timer: 1500
                        })
                    }else if(result == 2){
                        Swal.fire({
                            icon: 'error',
                            title: 'There has been an error',
                            showConfirmButton: true,
                            timer: 1500
                        }) 
                    } else if(result == 0){
                        Swal.fire({
                            icon: 'error',
                            title: 'Set Interview Schedule',
                            showConfirmButton: true,
                            timer: 1500
                        })
                    }
                }
            })
            
        }

        

    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>