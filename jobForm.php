<?php
    require 'connect.php';

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Sweet Alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.js"></script>
    <style>
        body{
            background-color: #222636;
            color: white;
        }

        .navbar {
        background-color: #D8D8D8;
        box-shadow: 0 2px 4px 0 rgba(0, 0, 0, .2);
        }

        .nav-link{
            /* font-family: 'Lemon/Milk light', sans-serif; */
            font-family: "Poppins", sans-serif;
            font-style: normal;
            font-size: 16px;
            text-align: center;
            padding: 10px;
        }

        .active:hover {
        font-weight: bold;
        }
    </style>
  </head>
  <body>
    <?php include 'navbar.php' ?>
    <div class="container-fluid w-100 vh-100 d-flex flex-column justify-content-center align-items-center" style="margin-top: 50px;" >
        <h2 class="text-center ">Job Application</h2>
        <h5 class="text-center">Please complete the form below to apply for position with us.</h5>
        <hr>
        <div class ="row ">
            <div class = "col-lg-4 col-1"></div>
            <div class = "col-lg-4 col-10">
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                    <input type="text" class="form-control" id="name" placeholder="Full Name" required>
                </div>
            </div>
            <div class = "col-lg-4 col-1"></div>
            <div class = "col-lg-4 col-1"></div>

            <div class = "col-lg-4 col-10">
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fa-solid fa-calendar-days"></i></span>
                    <input type="date" class="form-control" id="date" placeholder="Birth Date" required>
                </div>
            </div>

            <div class = "col-lg-4 col-1"></div>
            <div class = "col-lg-4 col-1"></div>
            <div class = "col-lg-4 col-10">
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fa-solid fa-location-dot"></i></span>
                    <input type="text" class="form-control" id="address" placeholder="Address" required>
                </div>
            </div>

            <div class = "col-lg-4 col-1"></div>
            <div class = "col-lg-4 col-1"></div>
            <div class = "col-lg-4 col-10">
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fa-solid fa-phone"></i></span>
                    <input type="text" class="form-control" id="number" placeholder="Phone Number" required>
                </div>
            </div>

            <div class = "col-lg-4 col-1"></div>
            <div class = "col-lg-4 col-1"></div>
            <div class = "col-lg-4 col-10">
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
                    <input type="text" class="form-control" id="email" placeholder="Email Address" required>
                </div>
            </div>

            <div class = "col-lg-4 col-1"></div>
            <div class = "col-lg-4 col-1"></div>
            <div class = "col-lg-4 col-10">
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fa-solid fa-briefcase"></i></span>
                    <select class="form-select" id="jobs" required>
                        <option value="">Applying for Position</option>
                        <?php 
                            $qry = "SELECT * FROM jobs_position";
                            $stmt = $pdo->query($qry);
                            foreach($stmt->fetchAll() as $row)
                             {?>
                                <option value="<?php echo $row['namaJobs']?>">
                            <?php  echo $row['namaJobs'] ?>
                                </option>
                            <?php
                            }
                            ?>
                    </select>
                </div>
            </div>
            
            <div class = "col-lg-4 col-1"></div>
            <div class = "col-lg-4 col-1"></div>
            <div class = "col-lg-4 col-10">
                <div class="input-group mb-1">
                    <label for="">Upload Foto Diri</label>
                </div>
                <div class="input-group">
                    <input type="file" class="form-control" name="pic" id="pic" placeholder="Upload Foto Diri" required>
                </div>
                <div id="notif" class="form-text mb-1">Max File Size 10MB</div>
            </div>

            <div class = "col-lg-4 col-1"></div>
            <div class = "col-lg-4 col-1"></div>
            <div class = "col-lg-4 col-10">
                <div class="input-group mb-1">
                    <label for="">Upload CV</label>
                </div>
                <div class="input-group">
                    <input type="file" class="form-control" name="file" id="file" placeholder="Upload CV" required>
                    
                </div>
                <div id="notif" class="form-text mb-1">Max File Size 10MB</div>
            </div>

            <div class = "col-lg-4 col-1"></div>
            <div class = "col-lg-4 col-1"></div>
            <div class = "col-lg-4 col-10">
                <button class="btn btn-primary mb-3" id="btn-upload" type="submit">Upload</button>
            </div>
        </div>  

    </div>
            </div>
    <script>
        $(document).ready(function(){

            $("#btn-upload").on("click", function(){
                var nama = document.getElementById("name").value;
                var dates = document.getElementById("date").value;
                var address = document.getElementById("address").value;
                var number = document.getElementById("number").value;
                var email = document.getElementById("email").value;
                var jobs = document.getElementById("jobs").value;
                var pic = $("#pic")[0].files;
                var file = $('#file')[0].files;

                console.log(pic);

                let fd = new FormData();
                fd.append("nama", nama);
                fd.append("dates", dates);
                fd.append("address", address);
                fd.append("number", number);
                fd.append("email", email);
                fd.append("jobs", jobs);
                fd.append("pic", pic[0]);
                fd.append("file", file[0]);


                $.ajax({
                    type: "POST",
                    url: "admin/api/jobProses.php",
                    data: fd,
                    processData: false,
                    contentType: false,
                    cache: false,
                    enctype: 'multipart/form-data',
                    success:function(result){
                        if(result.result_code == 1){
                            Swal.fire({
                            icon: 'success',
                            title: result.message,
                            showConfirmButton: true,
                            timer: 1500
                        })
                        } else if(result.result_code == 0){
                            Swal.fire({
                            icon: 'error',
                            title: result.message,
                            showConfirmButton: true
                        })
                        }
                    }
                })

                // location.reload();
            })

        })
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>