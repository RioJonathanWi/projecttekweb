<?php
    session_start();
    $name = $_SESSION['name'];
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
    <link rel="stylesheet" href="styles/styleStock.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Datatable -->
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css" rel="stylesheet">

    <!-- Sweet Alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.js"></script>

    <title>Mimin</title>
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
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Sign out</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col d-flex flex-column h-sm-100 content">
            <main class="row overflow-auto">
                <div class="col pt-4">
                    <h2 style="color: white">Stock Barang</h2>
                    <div class="card-container mt-3" id="card-cont"></div>
                    <button class="btn btn-primary mx-2 mb-4 mt-3" style="padding: 5px;" data-bs-toggle="modal" data-bs-target="#tambahStock">Tambah Stock</button>
                </div>
            </main>
        </div>
    </div>
</div>
<div class="modal fade" id="tambahStock" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Stock</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="mb-3">
                <label for="namaProduk" class="form-label">Product Name</label>
                <input type="text" class="form-control" id="namaProduk" placeholder="Product Name">
            </div>
            <div class="mb-3">
                <label for="quantity" class="form-label">Quantity</label>
                <input type="text" class="form-control" id="quantity" placeholder="Quantity">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control" id="price" placeholder="Quantity">
            </div>
            
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" id="tambah">Tambah</button>
        </div>
        </div>
    </div>
    </div>

    <script>
        $(document).ready(function(){
            

            var updateTable = setInterval(function(){
            $.ajax({
                type: "POST",
                url: "api/stockProses.php",
                success: function(table){
                    document.getElementById("card-cont").innerHTML = table;
                    
                }
            })
            
        }, 1000);

        $('#logTable').DataTable();

        $("#tambah").on("click", function(){
            var namaProduk = $("#namaProduk").val();
            var quantity = $("#quantity").val();
            var price = $("#price").val();

            $.ajax({
                type:"POST",
                url: "api/tambahStock.php",
                data:{
                    namaProduk: namaProduk,
                    quantity: quantity,
                    price: price
                },
                success: function(result){
                    if(result == 1){
                        Swal.fire({
                            icon: 'success',
                            title: 'Stock has been added',
                            showConfirmButton: true,
                            timer: 1500
                        })
                    }else if(result == 2){
                        Swal.fire({
                            icon: 'error',
                            title: 'There has been an error. Try Again!',
                            showConfirmButton: true,
                            timer: 1500
                        })
                    }
                }


            })
        })
            
        });
        

    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>