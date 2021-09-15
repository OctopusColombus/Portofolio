<?php  
session_start();//session starts here  
  
?>  
  
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 bg-info" style="width:400; margin:0 auto;">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-light mb-4">Selamat Datang di Aplikasi SPK Pemilihan Pekerjaan</h1>
                                        <h1 class="h4 text-light mb-4">Silahkan Login</h1>
                                    </div>
                                    <form class="user" method="POST">
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Masukkan alamat email">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="pass" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password">
                                        </div>
                                        
                                        <input type="submit" name="login" value="Login" class="btn btn-primary btn-user btn-block"> 
                                        <hr>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="text-light" href="register.php">Buat Akun</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
    <?php  
  
    include("services/config.php");  
  
if(isset($_POST['login']))  
{  
    $user_email=$_POST['email'];  
    $user_pass=$_POST['pass'];  
  
    $check_user="select * from user WHERE email='$user_email'AND password='$user_pass'";  
  
    $query=mysqli_query($conn,$check_user);  
    $user = mysqli_fetch_array($query);
    $_SESSION['userid']=$user['id'];
    $uid=$user['id'];
    $sql="select * from bobot_user where id_user='$uid'";
    $run = mysqli_query($conn,$sql);
    $fetch =mysqli_fetch_array($run);
    $cek = $fetch['id_user'];
    if($user['nama_user'] == "admin")  
    {  
        echo "<script>window.open('admin/index.php','_self')</script>";  
  
        $_SESSION['email']=$user_email;
        $_SESSION['admin']=$user['nama_user'];
    }  
    elseif ($user['nama_user'] !== "admin" && !is_null($user['nama_user'])) {
        
        if ($cek == $uid) {
        echo "<script>window.open('user/hasil.php','_self')</script>";  
        $_SESSION['email']=$user_email;
        $_SESSION['admin']=$user['nama_user'];

        }
        else{
            echo "<script>window.open('user/index.php','_self')</script>";  
        $_SESSION['email']=$user_email;
        $_SESSION['admin']=$user['nama_user'];
        }
        
    }
    
    else  
    {  
      echo "<script>alert('Email or password is incorrect!')</script>";  
    }  
}  
?> 

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>