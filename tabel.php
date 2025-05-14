<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tabel Perkalian 10x10</title>
    <style>
    body {
        background-color: #9966CC; /* Ungu Lembut */
        font-family: Arial, sans-serif;
        padding: 20px;
        color: #fdf6ff; /* Putih keunguan lembut */
    }
    table {
        border-collapse: collapse;
        margin: auto;
        background-color: #f3e8fd; /* Latar belakang krem keunguan */
        box-shadow: 0 0 10px rgba(153, 102, 204, 0.5); /* Efek glow ungu */
    }
    th, td {
        border: 1px solid #7a52a3;
        padding: 10px 15px;
        text-align: center;
        transition: background-color 0.3s, color 0.3s;
    }
    th {
        background-color: #7a52a3; /* Ungu lebih gelap */
        color: #f3e8fd; /* Teks lembut */
    }
    td:hover {
        background-color: #d4bee9; /* Hover ungu muda */
        color: #000;
        cursor: pointer;
    }
</style>
    
</head>
<body>

<h2 style="text-align: center;">Tabel Perkalian 10 x 10</h2>

<table>
    <thead>
        <tr>
            <th></th>
            <?php
            for ($i = 1; $i <= 10; $i++) {
                echo "<th>$i</th>";
            }
            ?>
        </tr>
    </thead>
    <tbody>
        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "<tr>";
            echo "<th>$i</th>"; // Kolom kepala kiri
            for ($j = 1; $j <= 10; $j++) {
                $hasil = $i * $j;
                echo "<td>$hasil</td>";
            }
            echo "</tr>";
        }
        ?>
    </tbody>
</table>

</body>
</html>
