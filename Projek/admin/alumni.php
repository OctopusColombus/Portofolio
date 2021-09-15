<?php  
session_start();  
  
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

    <title>Data Jurusan</title>

    <!-- Custom fonts for this template -->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>
<style>
.center {
    margin: auto;
    width: 60%;
    padding: 20px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

.hideform {
    display: none;
}
table tr {
  counter-increment: row-num;
}
table tr td:first-child::before {
    content: counter(row-num) " ";
}
}
</style>
<body id="page-top">

    <!-- Page Wrapper -->
     <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                
                <div class="sidebar-brand-text mx-3">SPK Pemilihan Pekerjaan</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="pekerjaan.php">
                    <span>Data Pekerjaan</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="jurusan.php">
                    <span>Data Jurusan</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="aspek.php">
                    <span>Data Aspek</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <span>Data Kriteria</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="akademik.php">Akademik</a>
                        <a class="collapse-item" href="pengalaman.php">Pengalaman Kerja</a>
                        <a class="collapse-item" href="personal.php">Personal Skill</a>
                    </div>
                </div>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="bobot.php">
                    <span>Data Sub Kriteria</span></a>
            </li>
            
            <li class="nav-item active">
                <a class="nav-link" href="alumni.php">
                    <span>Data Alumni</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="spk.php">
                    <span>Data SPK</span></a>
            </li>
            <li class="nav-item active">
                <a class="btn btn-danger btn-icon-split nav-link" href="../logout.php" >
                    Logout</a>
            </li>
            <!-- Nav Item - Pages Collapse Menu -->
            

        </ul>
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                </nav>
        <!-- End of Content Wrapper -->
 <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Data Alumni</h1>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <a href="#" class="btn btn-primary btn-icon-split" data-toggle="modal" data-target="#jurusan">
                                        <span class="text">Tambah Data</span></a>
                        </div>
<!-- Modal -->
<div class="modal fade" id="jurusan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <span>Tambah Data Pekerjaan</span>
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
      </div>
              <div class="modal-body">
                <form method="POST" id="reset" >
                           <div class="form-group">
                          <label>Nama User</label>
                          <div>
                          <select name="user" id="user" class="form-control">
                            <option disabled selected> Pilih </option>
                            <?php 
                            include('../services/config.php');
                            $select="SELECT * FROM user";
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
                            $select="SELECT * FROM konsentrasi";
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
                                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                                <button type="submit" name="submit" class="btn btn-primary">Tambah Data</button>
                              </div>
                      </form>
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
                                              
                        if($user > 0 && $idk >0){
                            $insert="insert into bobot_user(id_user,id_konsentrasi, ipk, keahlian,pengalaman, pelatihan, speaking, inggris, leadership) values ('$user','$idk','$ipk','$keahlian','$pengalaman','$pelatihan','$speaking','$inggris','$leadership')";
                            $ins=mysqli_query($conn,$insert);
                            echo '<script>alert("Data Berhasil Ditambahkan")</script>';
                        }
                        else{
                            echo '<script>alert("Data Gagal Ditambahkan")</script>';

                        }

                                                                                                                 }
                        ?>
                    </div>
                              
                            </div>
                          </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Jurusan</th>
                                            <th>Konsentrasi</th>
                                            <th>IPK</th>
                                            <th>Keahlian</th>
                                            <th>Pengalaman</th>
                                            <th>Pelatihan</th>
                                            <th>Public Speaking</th>
                                            <th>Bahasa Inggris</th>
                                            <th>Leadership</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <?php 
                                      $sql="SELECT bobot_user.id, bobot_user.ipk, bobot_user.keahlian, bobot_user.pengalaman, bobot_user.pelatihan, bobot_user.speaking, bobot_user.inggris, bobot_user.leadership, konsentrasi.nama_konsentrasi, user.nama_user, jurusan.jurusan FROM bobot_user, konsentrasi, user, jurusan where bobot_user.id_user=user.id and user.id_jurusan=jurusan.id and konsentrasi.id=bobot_user.id_konsentrasi";
                                      $query = mysqli_query($conn, $sql);
                                      while($row = mysqli_fetch_array($query)){

                                  ?>    
                                   <tr>
                                        <td></td>
                                        <td><?php echo $row['nama_user'] ?></td>
                                        <td><?php echo $row['jurusan'] ?></td>
                                        <td><?php echo $row['nama_konsentrasi'] ?></td>
                                        <td><?php echo $row['ipk'] ?></td>
                                        <td><?php echo $row['keahlian'] ?></td>
                                        <td><?php echo $row['pengalaman'] ?></td>
                                        <td><?php echo $row['pelatihan'] ?></td>
                                        <td><?php echo $row['speaking'] ?></td>
                                        <td><?php echo $row['inggris'] ?></td>
                                        <td><?php echo $row['leadership'] ?></td>
                                        <td><a href="hapusalumni.php?id=<?php echo $row['id'] ?>" class="btn btn-danger btn-circle btn-sm" onclick="return confirm('Anda yakin mau menghapus data ini ?')"><i class="fas fa-trash"></i></a>
                                        
                                    </td>
                                   </tr>
                                   <?php 
                               }
                                   ?>
                             </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
        <!-- End of Sidebar -->
                <!-- Begin Page Content -->
               

       <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../js/demo/datatables-demo.js"></script>
    <script type="text/javascript">
    $('#jurusan').on('hidden.bs.modal', function () {
    $('#jurusan form')[0].reset();
    });
    </script>
</body>

</html>