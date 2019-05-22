<?php
    function cetak_ganjil ($awal, $akhir) {
      for ($i=$awal; $i<$akhir; $i++) {
        // code...
        if ($i%2 == 1) {
          // code...
          echo "$i";
        }
      }
    }

    //memanggil fungsi
    $a = 10;
    $b = 50;
    echo "<b>Bilangan ganjil dari $a sampai $b : </b><br>";
    cetak_ganjil($a, $b);
 ?>
