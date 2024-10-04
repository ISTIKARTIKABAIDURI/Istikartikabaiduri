<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2c</title>
    <style>
        .ganjil {
            background-color: #003;
            color: #fff;
        }
        .genap {
            background-color: #999;
            color: #000;
        }
        div {
            width: 30px;
            height: 30px;
            display: inline-block;
            text-align: center;
            line-height: 30px;
            margin: 2px;
        }
    </style>
</head>
    <body>

        <?php
        // Loop for creating rows
        for ($i = 1; $i <= 5; $i++) {
            // Loop for creating columns
            for ($j = 1; $j <= $i; $j++) {
                // Check if the current row is odd or even
                if ($i % 2 == 0) {
                    echo "<div class='genap'>$j</div>";
                } else {
                    echo "<div class='ganjil'>$j</div>";
                }
            }
            echo "<br>"; // Move to the next row
        }
        ?>

    </body>
</html>