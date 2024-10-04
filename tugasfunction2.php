<?php

function perkalian ($a, $b)
{
    $hasil = $a * $b;
    return $hasil;
}
    $hasil = perkalian(3, 4);
    echo $hasil;
    echo "<br>";

    $a = 4;
    $b = 5;

    echo 'Hasil Perkalian ' . $a . 'X' . $b . ' adalah' . perkalian($a, $b);

?>