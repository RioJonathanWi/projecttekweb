<?php
    require 'connect.php';
    session_start();
    $name = $_SESSION['name'];
    if(isset($_SESSION['login'])){
        
    }else{
        header('location: login.php');
    }

    $data = $pdo->query("SELECT COUNT(*) as total FROM orders");
    $stmt = $data->fetch();
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
    <link rel="stylesheet" href="styles/styles.css">
    <title>Mimin</title>
  </head>
  <body>
    
<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="home.php" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-5 d-none d-sm-inline mt-4">Menu</span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
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
                        <a href="stock.php" class="nav-link px-0 align-middle">
                        <i class="fa-solid fa-floppy-disk"></i> <span class="ms-1 d-none d-sm-inline">Stock</span> </a>
                    </li>
                    <li class="nav-item">
                        <a href="message.php" class="nav-link px-0 align-middle">
                        <i class="fa-solid fa-message"></i><span class="ms-1 d-none d-sm-inline"></span>Message</a>
                    </li>
                </ul>
                <hr>
                <div class="dropdown pb-4">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-square-user"></i>
                        <span class="d-none d-sm-inline mx-1"><?php echo $name ?></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="logout.php">Sign out</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col py-3">
        <div class="mx-0 row row-cols-2 line-1">
            <div class="col">
                <div class="container item px-2">
                    <div class="row p-3">
                        <div class="box order-lg-2 col-12 col-lg-6 col-xl-2 d-flex justify-content-center align-items-center"
                            style="background-color:#B6F0B0; border-radius: 15px;">
                            <i class="fas fa-user fa-2xl"></i>
                        </div>
                        <div
                            class="box-2 mt-3 mt-lg-0 order-lg-1 col-12 col-lg-6 col-xl-10 d-flex flex-column  justify-content-around">
                            <h6 class="item-name">Welcome back</h6>
                            <h3 class="item-qty mt-3" id='name'><?php echo $name?></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="container item px-2">
                    <div class="row p-3">
                        <div class="box order-lg-2 col-12 col-lg-6 col-xl-2 d-flex justify-content-center align-items-center"
                            style="background-color:#3C7B8E; border-radius: 15px;">
                            <i class="fa-solid fa-cart-shopping fa-2xl"></i>
                        </div>
                        <div
                            class="box-2 mt-3 mt-lg-0 order-lg-1 col-12 col-lg-6 col-xl-10 d-flex flex-column  justify-content-around">
                            <h6 class="item-name">Order</h6>
                            <h3 class="item-qty mt-3" id='Order'><?php echo $stmt['total']?></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end of line-1 -->
                
        </div>
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>