<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <section class="vh-100" style="background-color: #9A616D;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
                <div class="card" style="border-radius: 1rem;">
                <div class="row g-0">
                    <div class="col-md-6 col-lg-3 d-none d-md-block">
                    
                    </div>
                    <div class="col-md-6 col-lg-7 d-flex align-items-center">
                    <div class="card-body p-4 p-lg-5 text-black">

                        <form action="" method="POST" class="login-email">
                            <div class="d-flex align-items-center mb-3 pb-1">
                                <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                                <span class="h1 fw-bold mb-0">
                                    <a href="/">
                                        <i class='bx bxl-shopify login-icon'></i>
                                    </a>
                                </span>
                            </div>

                            <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Register your account</h5>

                            <div class="form-outline mb-4">
                                <input type="text" id="form2Example7" class="form-control form-control-lg" placeholder="User Name" name="username" value="<?php echo $username;?>" />
                                <label class="form-label" for="form2Example7">Username</label>
                            </div>

                            <div class="form-outline mb-4">
                                <input type="email" id="form2Example17" class="form-control form-control-lg" placeholder="Email" name="email" value="<?php echo $email;?>" required/>
                                <label class="form-label" for="form2Example17">Email address</label>
                            </div>

                            <div class="form-outline mb-4">
                                <input type="password" id="form2Example27" class="form-control form-control-lg" placeholder="Password" name="password" value="<?php $_POST["password"]?>" required/>
                                <label class="form-label" for="form2Example27">Password</label>
                            </div>

                            <div class="form-outline mb-4">
                                <input type="password" id="form2Example37" class="form-control form-control-lg" placeholder="Retype Password" name="repassword" value="<?php $_POST["repassword"]?>" required/>
                                <label class="form-label" for="form2Example37">Retype Password</label>
                            </div>

                            <div class="pt-1 mb-4">
                                <button class="btn btn-dark btn-lg btn-block" type="button" name="submit">Register</button>
                            </div>

                            <p class="mb-5 pb-lg-2" style="color: #393f81;">have an account? <a href="#!"
                                style="color: #393f81;">Login here</a></p>
                            <a href="#!" class="small text-muted">Terms of use.</a>
                            <a href="#!" class="small text-muted">Privacy policy</a>
                        </form>

                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>