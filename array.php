<?php

   // array dimensi

//    $nama = array("joni","budi","siti","tejo", 100, 2.5);

//    var_dump($nama);

//    echo "<br>";

//    echo $nama[5];

//    echo "<br>";

//    for ($i=0; $i < 6; $i++){
//       //echo $i;
//       echo $nama[$i]. "<br>";
//    }

// foreach($nama as $k) {
//     echo $k.'<br>';
// }

   // array sosiatif

   $nama = array (
    "joni" => "surabaya",
    "tejo" => "malang",
    "siti" => "sidoarjo",
    "budi" => "jakarta"

   );

   var_dump($nama);

   echo "<br>";

//    echo $nama['budi'];

   foreach($nama as $key => $value){
      echo $key. "=>". $value;

      echo "<br>";
   }


?>