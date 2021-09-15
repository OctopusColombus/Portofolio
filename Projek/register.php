<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Register</title>

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

        <div class="card o-hidden border-0 shadow-lg my-5">    
                <div class="row">
                    <div class="col-lg-7" style="width:400; margin:0 auto;">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form method="POST" >
                
                <div class="form-group">
                  <label>Nama Lengkap</label>
                  <input type="text" name="nama" placeholder="Masukkan Nama Anda" class="form-control">
                </div>

                <div class="form-group">
                  <label>Email</label>
                  <input type="email" name="email" class="form-control form-control-user"
                    id="exampleInputEmail" aria-describedby="emailHelp"
                    placeholder="Masukkan Email">
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" name="pass" class="form-control"
                    placeholder="Masukkan Password">
                </div>
                <div class="form-group">
                  <label>Konfirmasi Password</label>
                  <input type="password" name="passcek" class="form-control"
                    placeholder="Konfirmasi Password">
                </div>
                <div class="form-group">
                          <label>Nama Jurusan</label>
                          <select name="jurusan" class="form-control">
                            <option disabled selected> Pilih </option>
                            <?php 
                            include('services/config.php');
                            $select="SELECT * FROM jurusan";
                            $sql=mysqli_query($conn,$select);
                            while ($data=mysqli_fetch_array($sql)) {
                            ?>
                            <option value="<?=$data['jurusan']?>"><?=$data['jurusan']?></option> 
                            <?php
                            }
                            ?>
                            </select>
                </div>
                <button type="submit" name="submit" class="btn btn-success">SIMPAN</button>
                <button type="reset" class="btn btn-warning">RESET</button>
                <a class="btn btn-danger" href="index.php">Kembali</a>

              </form>
                          </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <?php
      include('services/config.php');
    if(isset($_POST['submit'])){
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $passcek = $_POST['passcek'];
        $jurusan = $_POST['jurusan'];
        $sql="select id from jurusan where jurusan='$jurusan'";
        $a=mysqli_query($conn,$sql);
        while($b=mysqli_fetch_array($a)){
            $idjur=$b['id'];
        }
        $query="SELECT * from user where email = '$email'";
        $run = mysqli_query($conn,$query);
        $fetch = mysqli_fetch_assoc($run);
        $cek = $fetch['email'];

        if ($cek == $email){
            echo "<script>alert('Email telah terdaftar, Silahkan Login');</script>"; 
            echo "<script>window.open('index.php','_self')</script>";  
        }
        elseif ($pass !== $passcek){
            echo "<script>alert('Password harus sama!');</script>"; 
        }
        else{
            $sql = "INSERT INTO user (id_jurusan, nama_user, password, email) values ('$idjur','$nama','$pass','$email') ";
            $insert = mysqli_query($conn,$sql);
            echo "<script>window.open('index.php','_self')</script>";  
        }


    }


    ?>

</body>

</html>