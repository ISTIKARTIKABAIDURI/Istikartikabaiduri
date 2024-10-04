<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Latihan 2b</title>
    <style>
        .kotak {
            width: 30px;
            height: 30px;
            border: 1px solid black;
            text-align: center;
            line-height: 30px;
            float: left;
            margin: 3px;
        }
        .clear {
            clear: both;
        }
    </style>
</head>

    <body>
        <?php
            
            $rows = 5;
            
            for ($i = 1; $i <= $rows; $i++) {
               
                for ($j = 1; $j <= $i; $j++) {
                    echo "<div class='kotak'>$j</div>";
                }
                
                echo "<div class='clear'></div>";
            }
        ?>

    </body>
</html>