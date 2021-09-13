<?php

include('services\config.php');

$id = $_GET['id'];

$query = "DELETE FROM nilai_akhir WHERE id_user = '$id'";

if($conn->query($query)) {
    header("location: spk.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>