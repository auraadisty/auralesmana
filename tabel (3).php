<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Formulir Kunjungan Perpustakaan</title>
    <style>
        body {
            background-color: #f5f5dc; /* krem */
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        form {
            background-color: #fff8e1;
            padding: 20px;
            border: 1px solid maroon;
            width: 400px;
            margin: auto;
            box-shadow: 0 0 10px rgba(128, 0, 0, 0.5);
            border-radius: 10px;
        }
        label {
            display: block;
            margin-bottom: 8px;
            color: maroon;
            font-weight: bold;
        }
        input, select {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid maroon;
            border-radius: 5px;
        }
        button {
            background-color: maroon;
            color: white;
            padding: 10px;
            width: 100%;
            border: none;
            border-radius: 5px;
            font-weight: bold;
        }
        h2 {
            text-align: center;
            color: maroon;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

    <form action="proses-kunjungan.php" method="post">
        <h2>Formulir Kunjungan</h2>
        
        <label for="nama">Nama Lengkap:</label>
        <input type="text" name="nama" id="nama" required>

        <label for="kelas">Kelas / Unit:</label>
        <input type="text" name="kelas" id="kelas" required>

        <label for="keperluan">Keperluan:</label>
        <select name="keperluan" id="keperluan" required>
            <option value="">-- Pilih --</option>
            <option value="Membaca">Membaca</option>
            <option value="Mencari Buku">Mencari Buku</option>
            <option value="Mengembalikan Buku">Mengembalikan Buku</option>
            <option value="Lain-lain">Lain-lain</option>
        </select>

        <button type="submit">Kirim</button>
    </form>

</body>
</html>
