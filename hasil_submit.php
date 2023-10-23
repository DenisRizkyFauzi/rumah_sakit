<!DOCTYPE html>
<html>
<head>
    <title>Hasil Data</title>
</head>
<body>
    <h1>Hasil Data</h1>

    <?php
    // Baca data dari file JSON
    $jsonFile = "data.json";
    $jsonData = json_decode(file_get_contents($jsonFile), true);

    // Periksa apakah ada data yang tersimpan
    if (!empty($jsonData)) {
        echo "<table>";
        echo "<tr><th>No. Rekam Medis</th><th>Nama Pasien</th><th>Jenis Pasien</th></tr>";

        foreach ($jsonData as $data) {
            echo "<tr>";
            echo "<td>" . $data['no_rekam_medis'] . "</td>";
            echo "<td>" . $data['nama_pasien'] . "</td>";
            echo "<td>" . $data['jenis_pasien'] . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "Tidak ada data yang tersimpan.";
    }
    ?>
</body>
</html>
