<?php
include "connection.php";

$nim = $_GET['id']; 
mysqli_query($conn, "DELETE FROM mahasiswa WHERE nim = '$nim'");
header("Location: mahasiswa.php");
exit();
?>
