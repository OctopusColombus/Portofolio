<?php

include('services\config.php');

$id = $_GET['id'];

$query = "DELETE FROM bobot_user WHERE id ='$id'";

if($conn->query($query)) {
    header("location: alumni.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>