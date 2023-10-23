<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari formulir rekam medis pasien
    $no_rekam_medis = $_POST["no_rekam_medis"];
    $dokter = $_POST["dokter"];
    $diagnosa_awal = $_POST["diagnosa_awal"];
    $jenis_penyakit = $_POST["jenis_penyakit"];
    $tindakan = $_POST["tindakan"];
    $obat = $_POST["obat"];
    $keterangan = $_POST["keterangan"];

    // Data yang akan disimpan dalam file JSON
    $data = array(
        "no_rekam_medis" => $no_rekam_medis,
        "dokter" => $dokter,
        "diagnosa_awal" => $diagnosa_awal,
        "jenis_penyakit" => $jenis_penyakit,
        "tindakan" => $tindakan,
        "obat" => $obat,
        "keterangan" => $keterangan
    );

    // Simpan data ke dalam file JSON
    $jsonFile = "data_rekam_medis.json";
    $jsonData = json_decode(file_get_contents($jsonFile), true);
    $jsonData[] = $data;
    file_put_contents($jsonFile, json_encode($jsonData, JSON_PRETTY_PRINT));

    // Redirect ke halaman hasil.php
    header("Location: hasil.php");
    exit();
}
?>
