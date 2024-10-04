<?php
    function pangkat($angka, $pangkat){
        return pow($angka, $pangkat);
    }

    // pangkat 4 = 625
    $angka = 5;
    $pangkat = 4;

    $hasil = pangkat($angka, $pangkat);

    echo "5 pangkat 4 = " . $hasil;
?>