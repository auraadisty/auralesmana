<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tabel Perkalian</title>
    <style>
        body {
            background-color: #f5f5dc; /* krem */
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        table {
            width: 80%;
            margin: auto;
            border-collapse: collapse;
            background-color: #fff8e1; /* krem lebih terang */
            box-shadow: 0 0 10px rgba(128, 0, 0, 0.5); /* maroon shadow */
        }
        th, td {
            border: 1px solid maroon;
            padding: 10px;
            text-align: center;
            font-weight: bold;
            color: maroon;
        }
        th {
            background-color: maroon;
            color: white;
        }
        h1 {
            text-align: center;
            color: maroon;
            margin-bottom: 30px;
        }
    </style>
</head>
<body>

    <h1>Tabel Perkalian 10 x 10</h1>

    <table>
        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= 10; $j++) {
                $hasil = $i * $j;
                echo "<td>$hasil</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>

</body>
</html>
