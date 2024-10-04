<!DOCTYPE html>
<html>
<head>
    <title>Perbedaan isset() dan empty()</title>
</head>
<body>

<h2>Perbedaan isset() dan empty()</h2>

        <?php

        // Variabel untuk contoh
        $var1 = "";
        $var2 = 0;
        $var3 = null;
        $var4 = "Halo";

        // Contoh penggunaan isset()
        echo "<h3>isset()</h3>";
        echo "Variabel \$var1 : " . (isset($var1) ? "ada" : "tidak ada") . "<br>"; // ada (walaupun kosong)
        echo "Variabel \$var2 : " . (isset($var2) ? "ada" : "tidak ada") . "<br>"; // ada (walaupun 0)
        echo "Variabel \$var3 : " . (isset($var3) ? "ada" : "tidak ada") . "<br>"; // tidak ada (karena null)
        echo "Variabel \$var4 : " . (isset($var4) ? "ada" : "tidak ada") . "<br>"; // ada 

        // Contoh penggunaan empty()
        echo "<h3>empty()</h3>";
        echo "Variabel \$var1 : " . (empty($var1) ? "kosong" : "tidak kosong") . "<br>"; // kosong
        echo "Variabel \$var2 : " . (empty($var2) ? "kosong" : "tidak kosong") . "<br>"; // kosong (karena 0 dianggap kosong)
        echo "Variabel \$var3 : " . (empty($var3) ? "kosong" : "tidak kosong") . "<br>"; // kosong
        echo "Variabel \$var4 : " . (empty($var4) ? "kosong" : "tidak kosong") . "<br>"; // tidak kosong

        ?>

</body>
</html>