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
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="user.php">
                
                <div class="sidebar-brand-text mx-3">SPK Pemilihan Pekerjaan</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="user.php">
                    <span>Data User</span></a>
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
                    <h1 class="h3 mb-2 text-gray-800">Data User</h1>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <a href="hasil.php" class="btn btn-primary btn-icon-split">
                                        <span class="text">Lihat Hasil Perhitungan</span></a>
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
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <?php 
                                      include ('../services/config.php');
                                      $sql="SELECT user.id, bobot_user.ipk, bobot_user.keahlian, bobot_user.pengalaman, bobot_user.pelatihan, bobot_user.speaking, bobot_user.inggris, bobot_user.leadership, konsentrasi.nama_konsentrasi, user.nama_user, jurusan.jurusan FROM bobot_user, konsentrasi, user, jurusan where user.id='$userid' AND bobot_user.id_user=user.id AND jurusan.id=user.id_jurusan and konsentrasi.id = bobot_user.id_konsentrasi";
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