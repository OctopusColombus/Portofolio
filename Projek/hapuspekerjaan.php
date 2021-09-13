<?php

include('services\config.php');

$id = $_GET['id'];

$query = "DELETE FROM pekerjaan WHERE id = '$id'";

if($conn->query($query)) {
    header("location: pekerjaan.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>