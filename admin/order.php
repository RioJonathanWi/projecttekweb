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
    <link rel="stylesheet" href="styles/styleOrder.css">

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
                    <h2 style="color: white">New Orders</h2>
                    <div class="card-container" id="card-cont"></div>
                </div>
            </main>
        </div>
    </div>
</div>

<?php
    $stmt = $pdo->query("SELECT * FROM orders o JOIN data_pembeli dp ON dp.id = o.buyer_id ")->fetchAll();
    
    foreach($stmt as $row){?>
        <div class="modal fade" id="<?php echo str_replace(' ', '', $row['nama']);?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Orders Detail</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="info" style="text-align: center;">
                    <h4 class="mt-2">Nama</h4>
                    <p class="mt-2"><?php echo $row['nama']?></p>
                    <h4 class="mt-2">Alamat</h4>   
                    <p class="mt-2"><?php echo $row['alamat']?></p>
                    <h4 class="mt-2">Nomor Telepon Pelanggan</h4>
                    <p class="mt-2"><?php echo $row['no_telp']?></p>
                </div>
                <br>
            </div>
            </div>
        </div>
        </div>

    <?php }?>


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
                url: "api/cardOrder.php",
                success: function(table){
                    document.getElementById("card-cont").innerHTML = table;
                    
                }
            })
            
        }, 1000);

        

        });
        
        function deleteData(id){
            $.ajax({
                type:"POST",
                url: "api/deleteData.php",
                data:{
                    data_id: id
                },
                success: function(result){
                    if(result == true){
                        Swal.fire({
                            icon: 'success',
                            title: 'Data has been deleted',
                            showConfirmButton: true,
                            timer: 1500
                        })
                    }
                }
            })
            
        }

        function apply(id){
            $.ajax({
                type:"POST",
                url: "api/applyOrder.php",
                data:{
                    id_order: id,
                },
                success: function(result){
                    if(result == 1){
                        Swal.fire({
                            icon: 'success',
                            title: 'Order has been applied',
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