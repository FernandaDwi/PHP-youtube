<div style="margin:auto; width:900px;">

<h2><a href="http://localhost/php-youtube/restorant/kategori/insert.php">TAMBAH DATA</a></h2>

<?php


require_once "../function.php";


if (isset($_GET['update']))  {
    $i=$_GET['update'];
    require_once"update.php";
}


if (isset($_GET['hapus'])) {
   $id=$_GET['hapus'];
   require_once "delete.php";
}

echo '<br>';


$sql = "SELECT idkategori FROM tblkategori";
$result = mysqli_query($koneksi, $sql);

$jumlahdata = mysqli_num_rows($result);





$banyak = 3;

$halaman = ceil($jumlahdata /$banyak);

for ($i=1; $i <= $halaman ; $i++){
   echo '<a href="?p='.$i.'">'.$i.'</a>';
   echo '&nbsp &nbsp &nbsp';
}

echo '<br> <br>';

if (isset($_GET['p'])) {
   $p=$_GET['p'];
   $mulai = ($p * $banyak) - $banyak;
   //  3   = (2 * 3) - 3
}else {
   $mulai = 0;
}


echo $halaman;

$sql = "SELECT * FROM tblkategori LIMIT $mulai,$banyak";

$result = mysqli_query($koneksi, $sql);

//var_dump($result);

$jumlah = mysqli_num_rows($result);
//echo '<br>';
//echo $jumlah;


echo '

<table border="1px">
    <tr>
       <th>no</th>
       <th>kategori</th>
       <th>update</th>
    </tr>


';
$no=$mulai +1;
if ($jumlah > 0) {
   while ($row = mysqli_fetch_assoc($result)) {
    echo '<tr>';
      echo '<td>'.$no++.'</td>';
      echo '<td>'.$row['kategori'].'</td>';
      echo '<td><a href="?hapus='.$row['idkategori'].'">'.'hapus'.'</a></td>';
      echo '<td><a href="?update='.$row['idkategori'].'">'.'update'.'</a></td>';
      echo '</tr>';
   }
}

 echo '</table>';

?>




</div>
      
     
   
