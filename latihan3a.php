<?php
    function ganti_style($tulisan, $kelas){
        return "<span class='$kelas'>$tulisan</span>";
    }
?>
<html>
<head>
    <title>Latihan 3a</title>
    <style>
        .ganti-style{
            font-size: 28px;
            font-family: arial;
            color: #1A0547;
            font-style: italic;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <?php
        $tulisan = "Hello World! Here I come!";
        $kelas = "ganti-style";
        echo ganti_style($tulisan, $kelas);
    ?>
</body>
</html>