update data

<?php

require_once "../function.php";



$sql = "SELECT * FROM tblkategori WHERE idkategori = $id";
$result = mysqli_query($koneksi,$sql);

$row=mysqli_fetch_assoc($result);



// $kategori = 'es mangga';
// $id= 3;
// $sql = "UPDATE tblkategori SET kategori ='$kategori' WHERE  id kategori= $id ";

// $result = mysqli_query($koneksi, $sql);


// echo $sql;

?>



<form action="" method="post">
    kategori :
    <input type="text" name="kategori" value="<?php echo $row['kategori']?>">
    <br>
    <input type="submit" name="simpan" value="simpan">
</form>
<?php


if (isset($_POST['simpan'])) {
    $kategori = $_POST['kategori'];
    
    $sql = "UPDATE tblkategori SET kategori ='$kategori' WHERE  id kategori= $id ";

   $result = mysqli_query($koneksi, $sql);

   header("location:http://localhost/php-youtube/restorant/kategori/select.php");
}


?>