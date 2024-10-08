<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Kelulusan Siswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }

        h2, h3 {
            text-align: center;
            color: #333;
        }

        .container {
            width: 80%;
            margin: 50px auto;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 30px rgba(0, 0, 30, 0.5);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 12px;
            text-align: center;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        .status-lulus {
            color: green;
            font-weight: bold;
        }

        .status-tidak-lulus {
            color: red;
            font-weight: bold;
        }

        .footer {
            text-align: center;
            margin-top: 30px;
            font-size: 16px;
            color: #555;
        }

        .stats {
            margin-top: 30px;
            text-align: center;
            font-size: 18px;
        }

        .footer p {
            margin: 10px 0;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Daftar Kelulusan Siswa</h2>

    <?php
    $siswa = [
        ["nama" => "Andi", "matematika" => 85, "bahasa_inggris" => 70, "ipa" => 80],
        ["nama" => "Budi", "matematika" => 60, "bahasa_inggris" => 50, "ipa" => 65],
        ["nama" => "Cici", "matematika" => 75, "bahasa_inggris" => 80, "ipa" => 70],
        ["nama" => "Dodi", "matematika" => 95, "bahasa_inggris" => 85, "ipa" => 90],
        ["nama" => "Eka", "matematika" => 50, "bahasa_inggris" => 60, "ipa" => 55],
    ];

    $lulus_count = 0;
    $tidak_lulus_count = 0;
    ?>

    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Nilai Rata-Rata</th>
                <th>Status</th>
                <th>Mata Pelajaran yang Harus Diperbaiki</th>
            </tr>
        </thead>
        <tbody>

        <?php
        foreach ($siswa as $data) {
            // Hitung rata-rata nilai setiap siswa
            $rata_rata = ($data["matematika"] + $data["bahasa_inggris"] + $data["ipa"]) / 3;

            // Tentukan status kelulusan
            if ($rata_rata >= 75) {
                $status = "Lulus";
                $status_class = "status-lulus";
                $lulus_count++;
                $mata_pelajaran_terendah = "-"; // Tidak ada yang harus diperbaiki
            } else {
                $status = "Tidak Lulus";
                $status_class = "status-tidak-lulus";
                $tidak_lulus_count++;

                // Tentukan mata pelajaran dengan nilai terendah
                $nilai_terendah = min($data["matematika"], $data["bahasa_inggris"], $data["ipa"]);
                $mata_pelajaran_terendah = array_search($nilai_terendah, $data);


            }

            // Tampilkan hasil
            echo "<tr>";
            echo "<td>" . $data["nama"] . "</td>";
            echo "<td>" . number_format($rata_rata, 2) . "</td>";
            echo "<td class='" . $status_class . "'>" . $status . "</td>";
            echo "<td>" . $mata_pelajaran_terendah . "</td>";
            echo "</tr>";
        }
        ?>

        </tbody>
    </table>

    <div class="stats">
        <h3>Statistik Kelulusan</h3>
        <p>Jumlah total siswa yang lulus: <?php echo $lulus_count; ?></p>
        <p>Jumlah total siswa yang tidak lulus: <?php echo $tidak_lulus_count; ?></p>
    </div>
</div>

<div class="footer">
    <p>&copy; 2024 Universitas Udayana - Jalan Raya Kampus Unud</p>
</div>

</body>
</html>
