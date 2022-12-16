<?php 
    require 'connect.php'
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="style/styles.css">
    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" 
    integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Sweet Alert -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" id="theme-styles">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <?php include 'navbar.php'?>

    <div class="bg mr-auto ml-auto">
        <div class="container-fluid">
            <div class="title containerr">
                <h2 class="text ">THE MANTAB GAN BACKPACK</h2> <br>
                <p class="text-2">THE MOST HYPE BACKPACK IN PETRA</p>
            </div>
            <div style="height: 20vh">
                <button class="button-title" style="margin-left: 100px;"><a class="get" href="shop.php">GET YOUR OWN</a></button>
                <button class="button-title text2"><a class="get" href="#katalog">CATALOG</a></button>
            </div>
        </div>
    </div>
    <a href="#catalog" class="scroll-for-more">
                <h5 style="text-align: center;" id="scroll">SCROLL FOR MORE</h5>
                <svg xmlns="http://www.w3.org/2000/svg" width="50" fill="white" viewBox="0 0 16 16" style="display:block;margin:auto;">
                <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"></path>
                </svg>
            </a>
    <div class="catalog" id="catalog">
            <div class="container mt-5">
                <div class="row row-cols-4 g-4" id="katalog">
                    <div class="col-4">
                        <div class="card h-100 mb-3" id="produk">
                            <img src="assets/baju.jpg" class="card-img-top mx-auto d-block" alt="...">
                            <div class="card-body">
                                <h5 class="card-title" id="nama">Baju</h5>
                                <p class="card-text">Rp 30.000</p>
                                <h2 class="price-hidden d-none" id="harga">30000</h2>
                            </div>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="card h-100 mb-3" id="produk">
                            <img src="assets/celana.jpg" class="card-img-top mx-auto d-block" alt="...">
                            <div class="card-body">
                                <h5 class="card-title" id="nama">Celana</h5>
                                <p class="card-text">Rp 20.000</p>
                                <h2 class="price-hidden d-none" id="harga">20000</h2>
                            </div>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="card h-100 mb-3" id="produk">
                            <img src="assets/tenda.jpg" class="card-img-top mx-auto d-block" alt="...">
                            <div class="card-body">
                                <h5 class="card-title" id="nama">Tenda</h5>
                                <p class="card-text">Rp 25.000</p>
                                <h2 class="price-hidden d-none" id="harga">25000</h2>
                            </div>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="card h-100 mb-3" id="produk">
                            <img src="assets/tas.jpg" class="card-img-top mx-auto d-block" alt="...">
                            <div class="card-body">
                                <h5 class="card-title" id="nama">Tas</h5>
                                <p class="card-text">Rp 15.000</p>
                                <h2 class="price-hidden d-none" id="harga">15000</h2>
                            </div>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="card h-100 mb-3" id="produk">
                            <img src="assets/sepatu.jpg" class="card-img-top mx-auto d-block" alt="...">
                            <div class="card-body">
                                <h5 class="card-title" id="nama">Sepatu</h5>
                                <p class="card-text">Rp 20.333</p>
                                <h2 class="price-hidden d-none" id="harga">20333</h2>
                            </div>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="card h-100 mb-3" id="produk">
                            <img src="assets/botol.jpg" class="card-img-top mx-auto d-block" alt="...">
                            <div class="card-body">
                                <h5 class="card-title" id="nama">Botol</h5>
                                <p class="card-text">Rp 15.000</p>
                                <h2 class="price-hidden d-none" id="harga">15000</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="contactus mt-5">
                <div class="head">
                    <h2 class="text3">CONTACT US</h2>
                </div>
    
                <div class="container mt-5">
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-7 ">
                            <form name="form-contact" id="form-contact" action="">
                                <div class="form-group mt-3">
                                    <label class="form-label">FULL NAME</label>
                                    <input id="name" name="name" type="text" class="form-control input"style="background-color:#white">
                                </div>
                                
                                <div class="form-group mt-3">
                                    <label class="form-label">EMAIL</label>
                                    <input id="email" name="email" type="text" class="form-control input"style="background-color:#white;">
                                </div>

                                <div class="form-group mt-3">
                                    <label class="form-label">MESSAGE</label>
                                    <input id="msg" name="msg" type="text" class="form-control input"style="background-color:#white;">
                                </div>            
                                
                                <div class="d-flex justify-content-center">
                                    <button id="submit" name="submit" type="submit" class="btn mt-5 form-control" style="background-color:#4A5358; width: 100%"><span style="color:white">SEND MESSAGE</span></button>
                                </div>
                                <div class="social-media" style="text-align: center; margin-bottom: 20px; margin-top: 25px;">
                                    <i class="fa-brands fa-instagram fa-2x icon"><a href=""></a></i>
                                    <i class="fa-brands fa-square-youtube fa-2x icon"></i>
                                    <i class="fa-sharp fa-solid fa-square-phone fa-2x icon"></i>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


            <script>
                $(document).ready(function(){
                    $('#submit').on('click', function(){
                        event.preventDefault();
                        var name = $('#name').val();
                        var email = $('#email').val();
                        var msg = $('#msg').val();

                        if(name != '' && email != '' && msg != ''){
                            $.ajax({
                                url: "api/insertContactUs.php",
                                type: "POST",
                                data: {
                                    name: name,
                                    email: email,
                                    msg: msg
                                },
                                success: function(result){
                                    Swal.fire({
                                        icon: 'success',
                                        title: 'Success',
                                        text: 'Message Berhasil Terkirim'
                                    })
                                    var form = document.getElementById('form-contact');
                                    form.reset();
                                }
                            })
                        }else{
                            Swal.fire({
                                icon: 'error',
                                title: 'Gagal',
                                text: 'Mohon isi kelengkapan data',
                            })
                        }
                    })
                })
            </script>
</body>

</html>