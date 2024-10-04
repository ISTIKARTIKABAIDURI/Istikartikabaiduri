<!DOCTYPE html>
    <html>
        <head>
            <title>Looping di PHP</title>
        </head>
    <body>

        <h2>Looping menggunakan For :</h2>
            <ul>

                <?php
                for ($i = 1; $i <= 10; $i++) {
                    echo "<li>Urutan ke-$i</li>";
                }
                ?>
            </ul>

            <h2>Looping menggunakan While :</h2>
            <ul>

                <?php
                $j = 1;
                while ($j <= 10) {
                    echo "<li>Urutan ke-$j</li>";
                    $j++;
                }
                ?>
            </ul>

</body>
</html>