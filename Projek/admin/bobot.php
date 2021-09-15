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
                    <h1 class="h3 mb-2 text-gray-800">Data Sub Kriteria</h1>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Sub Kriteria</th>
                                            <th>Nama Kriteria</th>
                                            <th>Bobot</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <td>1</td>
                                        <td>3,5 - <=4</td>
                                        <td>IPK</td>
                                        <td>5</td>
                                        </tr>
                                        <tr>
                                        <td>2</td>
                                        <td>3 - <3,5</td>
                                        <td>IPK</td>
                                        <td>4</td>
                                        </tr>
                                        <tr>
                                        <td>3</td>
                                        <td>2,5 - <3</td>
                                        <td>IPK</td>
                                        <td>3</td>
                                        </tr>
                                        <tr>
                                        <td>4</td>
                                        <td>2 - <2,5</td>
                                        <td>IPK</td>
                                        <td>2</td>
                                        </tr>
                                        <tr>
                                        <td>5</td>
                                        <td><2</td>
                                        <td>IPK</td>
                                        <td>1</td>
                                        </tr>
                                        <tr>
                                        <td>6</td>
                                        <td>Sistem Informasi</td>
                                        <td>Konsentrasi</td>
                                        <td>3</td>
                                        </tr>
                                        <tr>
                                        <td>7</td>
                                        <td>Jaringan</td>
                                        <td>Konsentrasi</td>
                                        <td>2</td>
                                        </tr>
                                        <tr>
                                        <td>8</td>
                                        <td>Animasi</td>
                                        <td>Konsentrasi</td>
                                        <td>1</td>
                                        </tr>
                                        <tr>
                                        <td>9</td>
                                        <td>Manajemen Industri</td>
                                        <td>Konsentrasi</td>
                                        <td>3</td>
                                        </tr>
                                        <tr>
                                        <td>10</td>
                                        <td>Manajemen Industri Penerbangan </td>
                                        <td>Konsentrasi</td>
                                        <td>2</td>
                                        </tr>
                                        <tr>
                                        <td>11</td>
                                        <td>Sistem Industri Manufaktur </td>
                                        <td>Konsentrasi</td>
                                        <td>1</td>
                                        </tr>
                                         <tr>
                                        <td>12</td>
                                        <td>Elektronika Penerbangan</td>
                                        <td>Konsentrasi</td>
                                        <td>2</td>
                                        </tr>
                                        <tr>
                                        <td>13</td>
                                        <td>Telekomunikasi</td>
                                        <td>Konsentrasi</td>
                                        <td>1</td>
                                        </tr>
                                         <tr>
                                        <td>14</td>
                                        <td>Mesin Pesawat Terbang</td>
                                        <td>Konsentrasi</td>
                                        <td>3</td>
                                        </tr>
                                        <tr>
                                        <td>15</td>
                                        <td>Konversi Energi</td>
                                        <td>Konsentrasi</td>
                                        <td>2</td>
                                        </tr>
                                        <tr>
                                        <td>16</td>
                                        <td>Bahan dan Manufaktur</td>
                                        <td>Konsentrasi</td>
                                        <td>1</td>
                                        </tr>
                                        <tr>
                                        <td>17</td>
                                        <td>Perancangan Pesawat Terbang</td>
                                        <td>Konsentrasi</td>
                                        <td>3</td>
                                        </tr>
                                        <tr>
                                        <td>18</td>
                                        <td>Perawatan Pesawat Terbang</td>
                                        <td>Konsentrasi</td>
                                        <td>2</td>
                                        </tr>
                                        <tr>
                                        <td>19</td>
                                        <td>Operasi Penerbangan</td>
                                        <td>Konsentrasi</td>
                                        <td>1</td>
                                        </tr>
                                        <tr>
                                        <td>20</td>
                                        <td>Airframe Power Plant</td>
                                        <td>Konsentrasi</td>
                                        <td>2</td>
                                        </tr>
                                        <tr>
                                        <td>21</td>
                                        <td>Electrical Avioni</td>
                                        <td>Konsentrasi</td>
                                        <td>1</td>
                                        </tr>
                                        <tr>
                                        <td>22</td>
                                        <td>Sangat Baik</td>
                                        <td>Keahlian</td>
                                        <td>5</td>
                                        </tr>
                                        <tr>
                                        <td>23</td>
                                        <td>Baik</td>
                                        <td>Keahlian</td>
                                        <td>4</td>
                                        </tr>
                                        <tr>
                                        <td>24</td>
                                        <td>Cukup</td>
                                        <td>Keahlian</td>
                                        <td>3</td>
                                        </tr>
                                        <tr>
                                        <td>25</td>
                                        <td>Kurang</td>
                                        <td>Keahlian</td>
                                        <td>2</td>
                                        </tr>
                                        <tr>
                                        <td>26</td>
                                        <td>Sangat Kurang</td>
                                        <td>Keahlian</td>
                                        <td>1</td>
                                        </tr>
                                        <tr>
                                        <td>27</td>
                                        <td>Sangat Baik</td>
                                        <td>Public Speaking</td>
                                        <td>5</td>
                                        </tr>
                                        <tr>
                                        <td>28</td>
                                        <td>Baik</td>
                                        <td>Public Speaking</td>
                                        <td>4</td>
                                        </tr>
                                        <tr>
                                        <td>29</td>
                                        <td>Cukup</td>
                                        <td>Public Speaking</td>
                                        <td>3</td>
                                        </tr>
                                        <tr>
                                        <td>30</td>
                                        <td>Kurang</td>
                                        <td>Public Speaking</td>
                                        <td>2</td>
                                        </tr>
                                        <tr>
                                        <td>31</td>
                                        <td>Sangat Kurang</td>
                                        <td>Public Speaking</td>
                                        <td>1</td>
                                        </tr>
                                         <tr>
                                        <td>32</td>
                                        <td>Sangat Baik</td>
                                        <td>Bahasa Inggris</td>
                                        <td>5</td>
                                        </tr>
                                        <tr>
                                        <td>33</td>
                                        <td>Baik</td>
                                        <td>Bahasa Inggris</td>
                                        <td>4</td>
                                        </tr>
                                        <tr>
                                        <td>34</td>
                                        <td>Cukup</td>
                                        <td>Bahasa Inggris</td>
                                        <td>3</td>
                                        </tr>
                                        <tr>
                                        <td>35</td>
                                        <td>Kurang</td>
                                        <td>Bahasa Inggris</td>
                                        <td>2</td>
                                        </tr>
                                        <tr>
                                        <td>36</td>
                                        <td>Sangat Kurang</td>
                                        <td>Bahasa Inggris</td>
                                        <td>1</td>
                                        </tr>
                                         <tr>
                                        <td>37</td>
                                        <td>Sangat Baik</td>
                                        <td>Leadership</td>
                                        <td>5</td>
                                        </tr>
                                        <tr>
                                        <td>38</td>
                                        <td>Baik</td>
                                        <td>Leadership</td>
                                        <td>4</td>
                                        </tr>
                                        <tr>
                                        <td>39</td>
                                        <td>Cukup</td>
                                        <td>Leadership</td>
                                        <td>3</td>
                                        </tr>
                                        <tr>
                                        <td>40</td>
                                        <td>Kurang</td>
                                        <td>Leadership</td>
                                        <td>2</td>
                                        </tr>
                                        <tr>
                                        <td>41</td>
                                        <td>Sangat Kurang</td>
                                        <td>Leadership</td>
                                        <td>1</td>
                                        </tr>
                                        <tr>
                                        <td>42</td>
                                        <td>>4 Tahun</td>
                                        <td>Pengalaman Kerja</td>
                                        <td>5</td>
                                        </tr>
                                        <tr>
                                        <td>43</td>
                                        <td>3-<4 Tahun</td>
                                        <td>Pengalaman Kerja</td>
                                        <td>4</td>
                                        </tr>
                                        <tr>
                                        <td>44</td>
                                        <td>2-<3 Tahun</td>
                                        <td>Pengalaman Kerja</td>
                                        <td>3</td>
                                        </tr>
                                        <tr>
                                        <td>45</td>
                                        <td>1-<2 Tahun</td>
                                        <td>Pengalaman Kerja</td>
                                        <td>2</td>
                                        </tr>
                                        <tr>
                                        <td>46</td>
                                        <td>0-<1 Tahun</td>
                                        <td>Pengalaman Kerja</td>
                                        <td>1</td>
                                        </tr>
                                        <tr>
                                        <td>47</td>
                                        <td>>6 bulan</td>
                                        <td>Pelatihan</td>
                                        <td>4</td>
                                        </tr>
                                        <tr>
                                        <td>48</td>
                                        <td>4-<6 Bulan</td>
                                        <td>Pelatihan</td>
                                        <td>3</td>
                                        </tr>
                                        <tr>
                                        <td>49</td>
                                        <td>2-<4 Bulan</td>
                                        <td>Pelatihan</td>
                                        <td>2</td>
                                        </tr>
                                        <tr>
                                        <td>50</td>
                                        <td>0-<2 Bulan</td>
                                        <td>Pelatihan</td>
                                        <td>1</td>
                                        </tr>

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