<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Formulir Kunjungan Perpustakaan</title>
    <style>
        body {
            background-color: #800000; /* Maroon */
            font-family: Arial, sans-serif;
            padding: 20px;
            text-align: center;
        }
        form {
            background-color: #fff8e1; /* Krem */
            padding: 20px;
            border: 2px solid #f5f5dc;
            width: 400px;
            margin: auto;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
            border-radius: 10px;
            text-align: left; /* Form input tetap rapi ke kiri */
        }
        label {
            display: block;
            margin-bottom: 8px;
            color: #800000;
            font-weight: bold;
        }
        input, select {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #800000;
            border-radius: 5px;
        }
        button {
            background-color: #800000;
            color: white;
            padding: 10px;
            width: 100%;
            border: none;
            border-radius: 5px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
        }
        button:hover {
            background-color: #f5f5dc;
            color: #800000;
            border: 1px solid #800000;
        }
        h2 {
            text-align: center;
            color: #800000;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

    <h2>Formulir Kunjungan Perpustakaan</h2>

    <form action="proses-kunjungan.php" method="post">
        
        <label for="tanggal">Tanggal Kunjungan:</label>
        <input type="date" name="tanggal" id="tanggal" required>

        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" placeholder="Tulis nama lengkap" required>
 	
	<label for="tipe_anggota">Tipe Anggota:</label>
        <select name="tipe_anggota" id="tipe_anggota">
            <option value="">-- Pilih --</option>
            <option value="Dosen">Dosen</option>
            <option value="Mahasiswa">Mahasiswa</option>
		<option value="Staf">Staf</option>

        <label for="nomor">Nomor Keanggotaan:</label>
        <input type="text" name="nomor" id="nomor" placeholder="NIM/NIP">
 
	<label for="fakultas"Fakultas:</label>
        <input type="text" name="fakultas" id="fakultas" placeholder="Asal Fakultas">

        <label for="jenis_kelamin">Jenis Kelamin:</label>
        <select name="jenis_kelamin" id="jenis_kelamin">
            <option value="">-- Pilih --</option>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>

        <label for="tujuan">Tujuan Kunjungan:</label>
        <input type="text" name="tujuan" id="tujuan" placeholder="Tulis tujuan kunjungan" required>

        <button type="submit">Kirim</button>
    </form>

</body>
</html>
