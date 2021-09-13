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
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

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
</style>
<body id="page-top">

    <!-- Page Wrapper -->
     <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                
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
                    <h1 class="h3 mb-2 text-gray-800">Data Jurusan</h1>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nama Pekerjaan</th>
                                            <th>Nilai Core Factor</th>
                                            <th>Nilai Sub Factor</th>
                                            <th>Nilai Aspek</th>
                                            <th>Nilai Akhir</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <?php
                    include('services\config.php');
                    if(isset($_POST['submit'])){
                        $a=$_GET['id'];                                                    
                        if($a > 0){
                            $sqluser="SELECT * from bobot_user where id_user='$a'";
                            $queryuser=mysqli_query($conn,$sqluser);
                            $user=mysqli_fetch_array($queryuser);
                            $idk=$user['id_konsentrasi'];
                            $sqlk="SELECT * FROM konsentrasi where id='$idk'";
                            $queryk=mysqli_query($conn,$sqlk);
                            $k=mysqli_fetch_array($queryk);
                            $bobotk=$k['bobot'];
                            $idj=$k['id_jurusan'];
                            $sqlpk= "SELECT * from pekerjaan where id_jurusan='$idj'";
                            $querypk=mysqli_query($conn,$sqlpk);
                            
                            while($pekerjaan=mysqli_fetch_array($querypk)){
                                $idpekerjaan=$pekerjaan['id'];
                                $namapekerjaan=$pekerjaan['nama_pekerjaan'];
                                $konsentrasi=$pekerjaan['konsentrasi']-$bobotk;
                                    if ($konsentrasi == 0) {
                                        $konsentrasi= 5;
                                    }
                                    elseif ($konsentrasi > 0 ) {
                                        $konsentrasi= 5 - $konsentrasi + 0.5;
                                    }
                                    elseif ($konsentrasi < 0) {
                                        $konsentrasi= 5 + $konsentrasi;
                                    }
                                $ipk=$pekerjaan['ipk'] - $user['ipk'];
                                if ($ipk == 0) {
                                        $ipk= 5;
                                    }
                                    elseif ($ipk > 0 ) {
                                        $ipk= 5 - $ipk + 0.5;
                                    }
                                    elseif ($ipk < 0) {
                                        $ipk= 5 + $ipk;
                                    }
                                $keahlian=$pekerjaan['keahlian'] - $user['keahlian'];
                                if ($keahlian == 0) {
                                        $keahlian= 5;
                                    }
                                    elseif ($keahlian > 0 ) {
                                        $keahlian= 5 - $keahlian + 0.5;
                                    }
                                    elseif ($keahlian < 0) {
                                        $keahlian= 5 + $keahlian;
                                    }
                                $pengalaman=$pekerjaan['pengalaman'] - $user['pengalaman'];
                                if ($pengalaman == 0) {
                                        $pengalaman = 5;
                                    }
                                    elseif ($pengalaman > 0 ) {
                                        $pengalaman= 5 - $pengalaman + 0.5;
                                    }
                                    elseif ($pengalaman < 0) {
                                        $pengalaman= 5 + $pengalaman;
                                    }
                                $pelatihan=$pekerjaan['pelatihan'] - $user['pelatihan'];
                                if ($pelatihan == 0) {
                                        $pelatihan= 5;
                                    }
                                    elseif ($pelatihan > 0 ) {
                                        $pelatihan= 5 - $pelatihan + 0.5;
                                    }
                                    elseif ($pelatihan < 0) {
                                        $pelatihan= 5 + $pelatihan;
                                    }
                                $speaking=$pekerjaan['speaking'] - $user['speaking'];
                                if ($speaking == 0) {
                                        $speaking= 5;
                                    }
                                    elseif ($speaking > 0 ) {
                                        $speaking= 5 - $speaking + 0.5;
                                    }
                                    elseif ($speaking < 0) {
                                        $speaking= 5 + $speaking;
                                    }
                                $inggris=$pekerjaan['inggris'] - $user['inggris'];
                                if ($inggris == 0) {
                                        $inggris= 5;
                                    }
                                    elseif ($inggris > 0 ) {
                                        $inggris= 5 - $inggris + 0.5;
                                    }
                                    elseif ($inggris < 0) {
                                        $inggris= 5 + $inggris;
                                    }
                                $leadership=$pekerjaan['leadership'] - $user['leadership'];
                                if ($leadership == 0) {
                                        $leadership= 5;
                                    }
                                    elseif ($leadership > 0 ) {
                                        $leadership= 5 - $leadership + 0.5;
                                    }
                                    elseif ($leadership < 0) {
                                        $leadership= 5 + $leadership;
                                    }
                               
                               

                                $ncfakademik= ($ipk+$konsentrasi)/2;
                                $nsfakademik= $keahlian/1;
                                $ncfpengalaman = $pengalaman/1;
                                $nsfpengalaman = $pelatihan/1;
                                $ncfpersonal = ($speaking+$inggris)/2;
                                $nsfpersonal = $leadership/1;

                                $totalakademik = (0.7 * $ncfakademik) + (0.3 * $nsfakademik);
                                $totalpengalaman = (0.7 * $ncfpengalaman) + (0.3 * $nsfpengalaman);
                                $totalpersonal = (0.7 * $ncfpersonal) + (0.3 * $nsfpersonal);

                                $nilaiakhir = (0.4 * $totalakademik) + (0.35 * $totalpengalaman) + (0.35 * $totalpersonal);
                            
                      
                        ?>   
                                   <tr>
                                        <td><?php echo $namapekerjaan ?></td>
                                        <td>
                                        <?php   echo "Akademik   : ";
                                                echo $ncfakademik; 
                                                echo "<br>"; 
                                                echo "Pengalaman : ";
                                                echo $ncfpengalaman;
                                                echo "<br>"; 
                                                echo "Personal   : ";
                                                echo $ncfpersonal; 
                                        ?>
                                            
                                        </td>
                                        <td>
                                        <?php   echo "Akademik   : ";
                                                echo $nsfakademik; 
                                                echo "<br>"; 
                                                echo "Pengalaman : ";
                                                echo $nsfpengalaman;
                                                echo "<br>"; 
                                                echo "Personal   : ";
                                                echo $nsfpersonal; 
                                        ?>
                                            
                                        </td>
                                        <td>
                                        <?php   echo "Akademik   : ";
                                                echo $totalakademik; 
                                                echo "<br>"; 
                                                echo "Pengalaman : ";
                                                echo $totalpengalaman;
                                                echo "<br>"; 
                                                echo "Personal   : ";
                                                echo $totalpersonal; 
                                        ?>
                                            
                                        </td>
                                        <td>
                                        <?php   
                                                echo "<br>"; 
                                                echo $nilaiakhir;
                                                echo "<br>"; 
                                        ?>
                                            
                                        </td>
                                   </tr>
                                   <?php 
                                   }
                        }

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
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
    <script type="text/javascript">
    $('#jurusan').on('hidden.bs.modal', function () {
    $('#jurusan form')[0].reset();
    });
    </script>
</body>

</html>