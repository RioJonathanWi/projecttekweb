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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous">
    </script>

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
            margin-left: 10px;
        }

        .container{
            background-color: cornsilk;
            height: auto;
            padding: 20px;  
            /* text-align: center; */
                    
        }

        .input{
            margin: 10px;
            /* width: 1000px; */
        }

        .btn{
            align-items: center;
            margin-left: 10px;
        }
    </style>
</head>
<body> 
    <div class="head">
        <h2 class="text">CONTACT US</h2>
    </div>
    
    <div class="row">

    </div>
    <div class="container mt-5">
        
        <label for="" >FULL NAME</label>
        <input type="text" class="form-control input"style="background-color:#D9D9D9">

        <label for="" >EMAIL</label>
        <input type="text" class="form-control input"style="background-color:#D9D9D9;">

        <label for="" >MESSAGE</label>
        <input type="text" class="form-control input"style="background-color:#D9D9D9;">

        <button type="submit" class="btn mt-2 " style="background-color:#4A5358;"><span style="color:white">SEND MESSAGE</span></button>
        
    </div>
    
</body>
</html>
