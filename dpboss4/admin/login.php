<?php  require_once('../connect.php'); ?>
<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <style>
    html,
    body {
        height: 100%;
    }

    body {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
    }
    </style>
</head>

<body>

    <?php
    session_start();

    if (isset($_POST['adminlogin'])) {
        $admin_email = $_POST['admin_email'];
        $admin_password = $_POST['admin_password'];
       
       
            $sql="SELECT * FROM admin WHERE admin_email='$admin_email' && admin_password='$admin_password'";
            $sql_id="SELECT admin_id FROM admin WHERE admin_email ='$admin_email'";

             $res=mysqli_query($db,$sql) or die(mysqli_error($db));
            $result = mysqli_query($db,$sql_id) or die(mysqli_error($db));
             if (mysqli_num_rows($res) > 0) {
                
                $row =$result->fetch_assoc();
                // echo $row['admin_id'];
                $_SESSION['admin_id']=$row['admin_id'];
                

                header("Location: dashboard.php"); 
             }else{
                 echo ' 
  <span style="position:absolute;top:0;left:50%;transform:translateX(-50%);color:red"><span class="" onclick="this.parentElement.style.display="none";></span> 
  <strong>Invalid!  Username Or Password.</strong></span>
';
             }

        }


    ?>
    <!-- ============================================================== -->
    <!-- login page  -->
    <!-- ============================================================== -->
    <div class="splash-container">
        <div class="card ">
            <div class="card-header text-center"><a href="../index.html"><img class="logo-img" src="assets/images/logo.png" alt="logo"></a><span class="splash-description">Please enter your user information.</span></div>
            <div class="card-body">
                <form action="login.php" method="post">
                    <div class="form-group">
                        <input class="form-control form-control-lg" id="username" name="admin_email" type="text" placeholder="Username" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" id="password" name="admin_password" type="password" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox"><span class="custom-control-label">Remember Me</span>
                        </label>
                    </div>
                    <button type="submit" name="adminlogin" class="btn btn-primary btn-lg btn-block">Sign in</button>
                </form>
            </div>
            <div class="card-footer bg-white p-0  ">
              <!--   <div class="card-footer-item card-footer-item-bordered">
                    <a href="#" class="footer-link">Create An Account</a></div> -->
                <div class="card-footer-item card-footer-item-bordered">
                    <a href="#" class="footer-link">Forgot Password</a>
                </div>
            </div>
        </div>
    </div>
  
    <!-- ============================================================== -->
    <!-- end login page  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
</body>
 
</html>