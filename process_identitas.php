<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari formulir
    $no_rekam_medis = $_POST["no_rekam_medis"];
    $nama_pasien = $_POST["nama_pasien"];
    $jenis_pasien = $_POST["jenis_pasien"];
    $nama_perusahaan = $_POST["nama_perusahaan"];
    $jenis_kelamin = $_POST["jenis_kelamin"];
    $umur = $_POST["umur"];
    $pekerjaan = $_POST["pekerjaan"];
    $agama = $_POST["agama"];
    $alamat = $_POST["alamat"];
    $no_telepon = $_POST["no_telepon"];
    $tanggal_masuk = $_POST["tanggal_masuk"];

    // Data yang akan disimpan dalam file JSON
    $data = array(
        "no_rekam_medis" => $no_rekam_medis,
        "nama_pasien" => $nama_pasien,
        "jenis_pasien" => $jenis_pasien,
        "nama_perusahaan" => $nama_perusahaan,
        "jenis_kelamin" => $jenis_kelamin,
        "umur" => $umur,
        "pekerjaan" => $pekerjaan,
        "agama" => $agama,
        "alamat" => $alamat,
        "no_telepon" => $no_telepon,
        "tanggal_masuk" => $tanggal_masuk
    );

    // Simpan data ke dalam file JSON
    $jsonFile = "data.json";
    $jsonData = json_decode(file_get_contents($jsonFile), true);
    $jsonData[] = $data;
    file_put_contents($jsonFile, json_encode($jsonData, JSON_PRETTY_PRINT));
}

// Setelah data disimpan, redirect ke halaman hasil submit
header("Location: hasil_submit.php");
exit();
?>
