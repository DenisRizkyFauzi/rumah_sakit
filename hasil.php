<!DOCTYPE html>
<html>
<head>
    <title>Hasil Data</title>
</head>
<body>
    <h1>Hasil Data Rekam Medis Pasien</h1>

    <?php
    $jsonFile = "data_rekam_medis.json";

    if (file_exists($jsonFile)) {
        // Baca data dari file JSON
        $jsonData = json_decode(file_get_contents($jsonFile), true);

        // Periksa apakah ada data yang tersimpan
        if (!empty($jsonData)) {
            echo "<table border='1'>";
            echo "<tr><th>No. Rekam Medis</th><th>Dokter</th><th>Diagnosa Awal</th><th>Jenis Penyakit</th><th>Tindakan</th><th>Obat</th><th>Keterangan</th></tr>";

            foreach ($jsonData as $data) {
                echo "<tr>";
                echo "<td>" . $data['no_rekam_medis'] . "</td>";
                echo "<td>" . $data['dokter'] . "</td>";
                echo "<td>" . $data['diagnosa_awal'] . "</td>";
                echo "<td>" . $data['jenis_penyakit'] . "</td>";
                echo "<td>" . $data['tindakan'] . "</td>";
                echo "<td>" . $data['obat'] . "</td>";
                echo "<td>" . $data['keterangan'] . "</td>";
                echo "</tr>";
            }

            echo "</table>";
        } else {
            echo "Tidak ada data rekam medis yang tersimpan.";
        }
    } else {
        echo "File JSON tidak ditemukan.";
    }
    ?>
</body>
</html>
