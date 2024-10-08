<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Nilai Pemrograman Internet</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        h2, h3 {
            text-align: center;
            color: #333;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        input[type="text"], input[type="number"] {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        input[type="submit"] {
            padding: 10px;
            border: none;
            background-color: #007bff;
            color: white;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .result {
            margin-top: 20px;
            background-color: #e9ecef;
            padding: 15px;
            border-radius: 5px;
        }

        .result p {
            font-size: 16px;
            color: #333;
        }

        .result span {
            font-weight: bold;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Menentukan Nilai Mahasiswa</h2>
        <form method="post" action="">
            <label for="nama">Nama Mahasiswa:</label>
            <input type="text" name="nama" id="nama" required>

            <label for="nim">NIM:</label>
            <input type="number" name="nim" id="nim" required>

            <label for="nilai">Nilai:</label>
            <input type="number" name="nilai" id="nilai" required>

            <input type="submit" name="submit" value="Submit">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nama = $_POST['nama'];
            $nim = $_POST['nim'];
            $nilai = $_POST['nilai'];

            function konversiNilai($nilai) {
                if ($nilai >= 85) {
                    return 'A';
                } elseif ($nilai >= 80) {
                    return 'B+';
                } elseif ($nilai >= 75) {
                    return 'B';
                } elseif ($nilai >= 70) {
                    return 'C+';
                } elseif ($nilai >= 65) {
                    return 'C';
                } elseif ($nilai >= 60) {
                    return 'D';
                } else {
                    return 'E';
                }
            }

            $nilaiHuruf = konversiNilai($nilai);

            echo "<div class='result'>";
            echo "<h3>Hasil Nilai</h3>";
            echo "<p>Nama: <span>" . htmlspecialchars($nama) . "</span></p>";
            echo "<p>NIM: <span>" . htmlspecialchars($nim) . "</span></p>";
            echo "<p>Nilai Angka: <span>" . htmlspecialchars($nilai) . "</span></p>";
            echo "<p>Nilai Huruf: <span>" . htmlspecialchars($nilaiHuruf) . "</span></p>";
            echo "</div>";
        }
        ?>
    </div>

</body>
</html>
