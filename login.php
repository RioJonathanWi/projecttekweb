
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <!-- Sweet Alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.js"></script>

    <title>Hello, world!</title>

    <link rel="stylesheet" href="styles/style.css">
  </head>
  <body>
    <div class="login-card">
        <h2>Login</h2>
        <h3>Enter your credentials</h3>
        <div class="login-form">
            <input type="text" id="email" placeholder="Username">
            <input type="password" id="password"  placeholder="Password">
            <a href="home.php">
                Forgot you password?
            </a>
            <button type="button" class="btn login-btn container-fluid btn-light" id="Login" style="background:black;color:white">Login</button>
        </div>
    </div>
    <script>

        function windowRedirectHome()
            {
                window.location.href = "home.php";
            }

            function scaleCaptcha() {
                // Width of the reCAPTCHA element, in pixels
                var reCaptchaWidth = 200;
                // Get the containing element's width
                var containerWidth = $('.capt').width();
                // Only scale the reCAPTCHA if it won't fit
                // inside the container
                if(reCaptchaWidth > containerWidth) {
                    // Calculate the scale
                    var captchaScale = containerWidth / reCaptchaWidth;
                    captchaScale = captchaScale - (0.5 * captchaScale);
                    // Apply the transformation
                    $('.g-recaptcha').css({
                    'transform':'scale('+captchaScale+')'
                    });
                }
            }

        $('#Login').on('click', function () {
                var email=$('#email').val();
                var password=$('#password').val();
                // var rrf = grecaptcha.getResponse();
                // if (rrf!="")
                if (true)
                {
                    if(typeof(email) != "undefined" && email != null && email != "" && typeof(password) != "undefined" && password != null && password != "")
                    {
                        if($('#password').val().length < 8){
                            Swal.fire({
                                title: 'Login Failed !',
                                text: 'Password too short (Minimum 8 Characters)',
                                icon: 'error',
                                confirmButtonText: 'Close'
                            })
                        }
                        else {
                            $.ajax({
                                url: "api/loginProses.php",
                                method: "POST",
                                data: {
                                    email: email,
                                    password: password
                                },
                                success: function (result) {
                                    //angka kedua adalah verify
                                    if (result == 1) {
                                        Swal.fire({
                                            title: 'Success',
                                            text: '',
                                            icon: 'success',
                                            confirmButtonText: 'Close',
                                            willClose: windowRedirectHome,
                                            timer: 1500,
                                            timerProgressBar: true
                                        })
                                    }
                                    else if (result == 2) {
                                        Swal.fire({
                                            title: 'Login Failed !',
                                            text: 'Email or Password is wrong',
                                            icon: 'error',
                                            confirmButtonText: 'Close'
                                        })
                                    }
                                    else if (result == 0) {
                                        Swal.fire({
                                            title: 'Login Failed !',
                                            text: 'Incomplete Data',
                                            icon: 'error',
                                            confirmButtonText: 'Ok'
                                        })
                                    }
                                },
                                error: function () {
                                    Swal.fire({
                                        title: 'Login Failed !',
                                        text: 'Server Down, Please Try Again',
                                        icon: 'error',
                                        confirmButtonText: 'Close'
                                    })
                                }
                            });
                        }
                    }
                    else {
                        Swal.fire({
                            title: 'Login Failed !',
                            text: 'Incomplete Data',
                            icon: 'error',
                            confirmButtonText: 'Ok'
                        })
                    }
                }else
                {
                    Swal.fire({
                            title: 'Failed !',
                            text: 'Please Fill Out The Captcha!',
                            icon: 'warning',
                            confirmButtonText: 'Ok'
                        })
                }
            });
    </script>
    <script>

    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>