<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Penyalaan AC</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: lavender;
            margin: 0;
            padding: 0;
        }

        h2, h3 {
            text-align: center;
        }

        .container {
            width: 50%;
            margin: 100px auto;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 30px rgba(0, 0, 30, 0.2);
        }

        input[type="submit"] {
            padding: 10px;
            border: none;
            background-color: lightskyblue;
            color: black;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }

        .info {
            font-size: 16px;
            color: darkslategray;
            background-color: lightskyblue;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
        }

        .result {
            text-align: center;
            padding: 15px;
            font-size: 16px;
            color: black;
            margin-top: 20px;
            border-radius: 100px;
        }

        /* Warna hasil */
        .mati {
            background-color: #d3d3d3; /* Abu-abu */
        }
        .rendah {
            background-color: #a8e6a3; /* Hijau lembut */
        }
        .sedang {
            background-color: #fff4a3; /* Kuning lembut */
            color: black;
        }
        .berat {
            background-color: #f7a1a1; /* Merah lembut */
        }

        .error {
            background-color: #ffcccc; /* Merah muda */
            color: darkred;
        }

    </style>
</head>
<body>
    <div class="container">
        <h2>Sistem Penyalaan AC</h2>

        <div class="info">
            <strong>Kriteria Penyalaan AC:</strong>
            <ul>
                <li><strong>AC Mati:</strong> Suhu di bawah 18°C dan kelembaban di bawah 30%</li>
                <li><strong>AC Menyala Rendah:</strong> Suhu antara 18°C - 22°C dan kelembaban antara 30% - 50%</li>
                <li><strong>AC Menyala Sedang:</strong> Suhu antara 22°C - 28°C dan kelembaban antara 50% - 70%</li>
                <li><strong>AC Menyala Berat:</strong> Suhu di atas 28°C dan kelembaban di atas 70%</li>
            </ul>
        </div>

        <form method="post">
            <label for="suhu">Suhu (°C):</label>
            <br><input type="number" id="suhu" name="suhu" required><br><br>

            <label for="kelembaban">Kelembaban (%):</label>
            <br><input type="number" id="kelembaban" name="kelembaban" required><br><br>

            <input type="submit" name="submit" value="Cek Status AC">
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Mengambil input suhu dan kelembaban
            $suhu = $_POST['suhu'];
            $kelembaban = $_POST['kelembaban'];

            // Validasi jika suhu lebih besar dari kelembaban
            if ($suhu > $kelembaban) {
                echo "<div class='result error'><h3>Kesalahan: Suhu tidak boleh lebih besar dari kelembaban!</h3></div>";
            } else {
                // Logika pengaturan kondisi AC
                if ($suhu < 18 && $kelembaban < 30) {
                    echo "<div class='result mati'><h3>AC Mati</h3></div>";
                } elseif ($suhu >= 18 && $suhu < 22 && $kelembaban >= 30 && $kelembaban < 50) {
                    echo "<div class='result rendah'><h3>AC Menyala Rendah</h3></div>";
                } elseif ($suhu >= 22 && $suhu < 28 && $kelembaban >= 50 && $kelembaban < 70) {
                    echo "<div class='result sedang'><h3>AC Menyala Sedang</h3></div>";
                } elseif ($suhu >= 28 && $kelembaban >= 70) {
                    echo "<div class='result berat'><h3>AC Menyala Berat</h3></div>";
                } else {
                    echo "<div class='result error'><h3>Kondisi tidak memenuhi kriteria</h3></div>";
                }
            }
        }
        ?>
    </div>
</body>
</html>
