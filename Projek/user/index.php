<?php  
session_start();  
  $userid=$_SESSION['userid'];
if(!$_SESSION['email'])  
{  
  
    header("Location: ../index.php");//redirect to the login page to secure the welcome page without login access.  
}  
  
?> 
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
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">

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
                          <label>Nama User</label>
                          <div>
                          <select name="user" id="user" class="form-control">
                            <option disabled selected> Pilih </option>
                            <?php 
                            include('../services/config.php');
                            $select="SELECT * FROM user where id='$userid'";
                            $sql=mysqli_query($conn,$select);
                            while ($data=mysqli_fetch_array($sql)) {
                            ?>
                            <option value="<?=$data['id']?>"><?=$data['nama_user']?></option> 
                            <?php
                            }
                            ?>
                            </select>
                        </div>
                    </div>
                                                
                        <div class="form-group">
                          <label>Nama Konsentrasi</label>
                          <div>
                          <select name="konsentrasi" id="konsentrasi" class="form-control">
                            <option disabled selected> Pilih </option>
                            <?php 
                            $select="SELECT konsentrasi.id, konsentrasi.nama_konsentrasi FROM konsentrasi,user, jurusan where user.id='$userid' and user.id_jurusan=jurusan.id and konsentrasi.id_jurusan=jurusan.id";
                            $sql=mysqli_query($conn,$select);
                            while ($data=mysqli_fetch_array($sql)) {
                            ?>
                            <option value="<?=$data['id']?>"><?=$data['nama_konsentrasi']?></option> 
                            <?php
                            }
                            ?>
                            </select>
                        </div>
                    </div>
                        <label>IPK</label>
                        <div>
                        <select name="ipk" class="form-control">
                          <option value="5">3,5 - <=4</option>
                          <option value="4">3 - <3,5</option>
                          <option value="3">2,5 - <3</option>
                          <option value="2">2 - <2,5</option>
                          <option value="1"><2</option>
                        </select>
                    </div>
                    <div>
                     <label>Keahlian</label>
                     </div>
                        <div>
                        <select name="keahlian" id="keahlian" class="form-control">
                          <option value="5">Sangat Baik</option>
                          <option value="4">Baik</option>
                          <option value="3">Cukup</option>
                          <option value="2">Kurang</option>
                          <option value="1">Sangat Kurang</option>
                        </select>
                    </div>
                    <div>
                     <label>Public Speaking</label>
                     </div>
                        <div>
                        <select name="speaking" id="speaking" class="form-control">
                          <option value="5">Sangat Baik</option>
                          <option value="4">Baik</option>
                          <option value="3">Cukup</option>
                          <option value="2">Kurang</option>
                          <option value="1">Sangat Kurang</option>
                        </select>
                    </div>
                    <div>
                     <label>Bahasa Inggris</label>
                     </div>
                        <div>
                        <select name="inggris" id="inggris" class="form-control">
                          <option value="5">Sangat Baik</option>
                          <option value="4">Baik</option>
                          <option value="3">Cukup</option>
                          <option value="2">Kurang</option>
                          <option value="1">Sangat Kurang</option>
                        </select>
                    </div>
                    <div>
                     <label>Leadership</label>
                     </div>
                        <div>
                        <select name="leadership" id="leadership" class="form-control">
                          <option value="5">Sangat Baik</option>
                          <option value="4">Baik</option>
                          <option value="3">Cukup</option>
                          <option value="2">Kurang</option>
                          <option value="1">Sangat Kurang</option>
                        </select>
                    </div>
                    <label>Pengalaman Kerja</label>
                        <div>
                        <select name="pengalaman" id="pengalaman" class="form-control">
                          <option value="1">0 - <1 Tahun</option>
                          <option value="2">>1 - <2 Tahun</option>
                          <option value="3">>2 - <3 Tahun</option>
                          <option value="4">>3 - <4 Tahun</option>
                          <option value="5">>4 Tahun</option>
                        </select>
                    </div>
                    <label>Pelatihan</label>
                        <div>
                        <select name="pelatihan" id="pelatihan" class="form-control">
                          <option value="1">0 - <2 Bulan</option>
                          <option value="2">>2 - <4 Bulan</option>
                          <option value="3">>4 - <6 Bulan</option>
                          <option value="4">>6 Bulan</option>
                        </select>
                    </div>
                        <div class="modal-footer">
                                <button type="submit" name="submit" class="btn btn-primary">Tambah Data</button>

                                <a class="btn btn-danger" href="../logout.php">Kembali</a>
                              </div>
              </form>
                          </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

    <?php
       include('../services\config.php');
                    if(isset($_POST['submit'])){
                        $user=$_POST['user'];
                        $idk=$_POST['konsentrasi'];
                        $ipk=$_POST['ipk'];
                        $keahlian=$_POST['keahlian'];
                        $pengalaman=$_POST['pengalaman'];
                        $pelatihan=$_POST['pelatihan'];
                        $speaking=$_POST['speaking'];
                        $inggris=$_POST['inggris'];
                        $leadership=$_POST['leadership'];
                        $sql="select * from bobot_user where id_user='$user'";
                        $run = mysqli_query($conn,$sql);
                        $fetch =mysqli_fetch_array($run);
                        $cek = $fetch['id_user'];
                        $_SESSION['user']=$user;           
                        if($user > 0 && $idk >0 && $cek !== $user){
                            $insert="insert into bobot_user(id_user,id_konsentrasi, ipk, keahlian,pengalaman, pelatihan, speaking, inggris, leadership) values ('$user','$idk','$ipk','$keahlian','$pengalaman','$pelatihan','$speaking','$inggris','$leadership')";
                            $ins=mysqli_query($conn,$insert);
                            echo '<script>alert("Data Berhasil Ditambahkan")</script>';

                            echo "<script>window.open('hasil.php','_self')</script>"; 
                        }
                        else{
                            echo '<script>alert("Data Gagal Ditambahkan")</script>';
                            echo "<script>window.open('index.php','_self')</script>"; 

                        }

                                                                                                                 }
                        ?>

</body>

</html>