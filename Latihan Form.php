<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            max-width: 500px;
            width: 100%;
        }
        h2 {
            text-align: center;
            color: #333333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        td {
            padding: 10px;
            vertical-align: top;
        }
        input[type="text"],
        input[type="date"],
        input[type="file"],
        select,
        textarea {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="radio"],
        input[type="checkbox"] {
            margin-right: 5px;
        }
        input[type="submit"],
        input[type="reset"] {
            padding: 10px 20px;
            margin: 10px 5px 0 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
        }
        input[type="reset"] {
            background-color: #f44336;
            color: white;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        input[type="reset"]:hover {
            background-color: #e53935;
        }
        .output {
            margin-top: 20px;
            padding: 15px;
            background-color: #e0f7fa;
            border-radius: 5px;
            color: #00796b;
        }
        .output h2 {
            color: #004d40;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Formulir Pendaftaran</h2>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $id_mahasiswa = $_POST['id_mahasiswa'];
            $nama = $_POST['nama'];
            $alamat = $_POST['alamat'];
            $jenis_kelamin = $_POST['jenis_kelamin'];
            $tanggal_lahir = $_POST['tanggal_lahir'];
            $jurusan = $_POST['jurusan'];
            $minat = isset($_POST['minat']) ? implode(", ", $_POST['minat']) : "Tidak ada";

            // Proses upload gambar
            if (isset($_FILES['gambar']) && $_FILES['gambar']['error'] == 0) {
                $gambar = $_FILES['gambar']['name'];
                $target_dir = "uploads/";
                $target_file = $target_dir . basename($gambar);

                if (!file_exists($target_dir)) {
                    mkdir($target_dir, 0777, true);
                }

                if (move_uploaded_file($_FILES['gambar']['tmp_name'], $target_file)) {
                    echo "<div class='output'>Gambar berhasil diunggah: <a href='$target_file' target='_blank'>$gambar</a><br>";
                } else {
                    echo "<div class='output'>Terjadi kesalahan saat mengunggah gambar.<br>";
                }
            } else {
                echo "<div class='output'>Tidak ada gambar yang diunggah.<br>";
            }

            // Tampilkan data yang diinput
            echo "<h2>Data Pendaftaran:</h2>";
            echo "ID Mahasiswa: $id_mahasiswa<br>";
            echo "Nama: $nama<br>";
            echo "Alamat: $alamat<br>";
            echo "Jenis Kelamin: $jenis_kelamin<br>";
            echo "Tanggal Lahir: $tanggal_lahir<br>";
            echo "Jurusan: $jurusan<br>";
            echo "Minat: $minat<br></div>";
        }
        ?>

        <form action="" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>Id Mahasiswa</td>
                    <td><input type="text" name="id_mahasiswa" placeholder="Isi Id" required></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama" required></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><textarea name="alamat" rows="4" required></textarea></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>
                        <input type="radio" name="jenis_kelamin" value="Pria" required> Pria
                        <input type="radio" name="jenis_kelamin" value="Wanita" required> Wanita
                    </td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td><input type="date" name="tanggal_lahir" required></td>
                </tr>
                <tr>
                    <td>Jurusan</td>
                    <td>
                        <select name="jurusan" required>
                            <option value="Sistem Informasi">Sistem Informasi</option>
                            <option value="Teknik Informatika">Teknik Informatika</option>
                            <option value="Ilmu Komputer">Ilmu Komputer</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Minat</td>
                    <td>
                        <input type="checkbox" name="minat[]" value="Programming"> Programming
                        <input type="checkbox" name="minat[]" value="Animasi"> Animasi
                        <input type="checkbox" name="minat[]" value="Desain"> Desain
                        <input type="checkbox" name="minat[]" value="Mapala"> Mapala
                    </td>
                </tr>
                <tr>
                    <td>Gambar</td>
                    <td><input type="file" name="gambar"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Daftar">
                        <input type="reset" value="Batal">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>