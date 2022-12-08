<?php
    require "connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
    crossorigin="anonymous"></script>
    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" 
    integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Sweet Alert -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" id="theme-styles">
 

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;700');
        @import url('https://fonts.cdnfonts.com/css/lemonmilk');
        .head{
            background-color: #4A5358;
            padding: 30px;
           
        }

        .text{
            color: white;
            font-size: 50px;
            text-align: center;
            font-family: "Poppins", sans-serif;
            /* font-family: 'Lemon/Milk light', sans-serif; */
            font-weight: bold;
        }

        label{
            font-family: "Poppins", sans-serif;
            /* margin-left: 10px; */
        }

        .btn{
            width: 400px;
        }
    </style>
</head>
<body> 
    <div class="head">
        <h2 class="text">CONTACT US</h2>
    </div>
    
    <div class="container mt-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-7 ">
                <form name="form-contact" id="form-contact" action="">
                    <div class="form-group mt-3">
                        <label class="form-label">FULL NAME</label>
                        <input id="name" name="name" type="text" class="form-control input"style="background-color:#D9D9D9">
                    </div>
                    
                    <div class="form-group mt-3">
                        <label class="form-label">EMAIL</label>
                        <input id="email" name="email" type="text" class="form-control input"style="background-color:#D9D9D9;">
                    </div>

                    <div class="form-group mt-3">
                        <label class="form-label">MESSAGE</label>
                        <input id="msg" name="msg" type="text" class="form-control input"style="background-color:#D9D9D9;">
                    </div>            
                    
                    <div class="d-flex justify-content-center">
                        <button id="submit" name="submit" type="submit" class="btn mt-5 form-control" style="background-color:#4A5358;"><span style="color:white">SEND MESSAGE</span></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

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

</html>

