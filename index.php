<!DOCTYPE html>
<html>
<head>
	
    <title>Rumah Sakit Misi</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Rumah Sakit Misi</h1>

    <!-- Form Input Data Identitas Pasien -->
	<fieldset>
    <h2>Form Input Data Identitas Pasien</h2>
    <form action="process_identitas.php" method="post">
        <label>No. Rekam Medis:</label>
        <input type="text" name="no_rekam_medis"><br>
        <label>Nama Pasien:</label>
        <input type="text" name="nama_pasien"><br>
        <label>Jenis Pasien:</label>
        <input type="text" name="jenis_pasien"><br>
        <label>Nama Perusahaan:</label>
        <input type="text" name="nama_perusahaan"><br>
        <label>Jenis Kelamin:</label>

        <input type="radio" id="jenis_kelamin" name="jenis_kelamin" value="Laki-laki" required> Laki-laki

        <input type="radio" id="jenis_kelamin" name="jenis_kelamin" value="Perempuan" required> Perempuan
    </div>
        <label>Umur:</label>
        <input type="text" name="umur"><br>
        <label>Pekerjaan:</label>
        <input type="text" name="pekerjaan"><br>
        <label>Agama:</label>
        <input type="text" name="agama"><br>
        <label>Alamat:</label>
        <textarea name="alamat"></textarea><br>
        <label>No Telepon:</label>
        <input type="text" name="no_telepon"><br>
        <label>Tanggal Masuk:</label>
        <input type="date" name="tanggal_masuk"><br>
        <input type="submit" value="Simpan">
    </form>
    </fieldset>
    <br><br>
<fieldset>
    <!-- Form Input Data Rekam Medis Pasien -->
    <h2>Form Input Data Rekam Medis Pasien</h2>
    
        <h2>Form Input Data Rekam Medis Pasien</h2>
        <form action="process_rekam_medis.php" method="post">
            <!-- Input fields for patient medical records data -->
            <label>No. Rekam Medis:</label>
            <input type="text" name="no_rekam_medis"><br>
            <label>Dokter:</label>
            <input type="text" name="dokter"><br>
            <label>Diagnosa Awal:</label>
            <textarea name="diagnosa_awal"></textarea><br>
            <label>Jenis Penyakit:</label>
            <input type="text" name="jenis_penyakit"><br>
            <label>Tindakan:</label>
            <textarea name="tindakan"></textarea><br>
            <label>Obat:</label>
            <textarea name="obat"></textarea><br>
            <label>Keterangan:</label>
            <textarea name="keterangan"></textarea><br>

            <input type="submit" value="Simpan">
    </form>
	</fieldset>


    
</body>
</html>
