<?php

require_once "../function.php";

// $id=2;

$sql = "DELETE FROM tblkategori WHERE idkategori = $id";  

$result = mysqli_query ($koneksi, $sql);

header("location:http://localhost/php-youtube/restorant/kategori/select.php");


?>