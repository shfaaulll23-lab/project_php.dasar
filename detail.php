<?php
if (
    !isset($_GET["nim"]) ||
    !isset($_GET["nama"]) ||
    !isset($_GET["jurusan"]) ||
    !isset($_GET["email"]) ||
    !isset($_GET["nilai"]) ||
    !isset($_GET["grade"]) ||
    !isset($_GET["status"]) 
) {
    header("Location: index.php");
    exit;
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail</title>
    <style>
         body {
            background-color : #f3f4f6;
            font-family : Arial, sans-serif;
        }

        .card {
            background-color: white;
            max-width: 740px;
            margin: 30px auto;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }

        .tombol {
            background-color: #2563eb;
            color: white;
            padding: 8px 14px;
            border-radius: 5px;
            text-decoration: none;
            display: inline-block;
        }
        ul {
            list-style: none;
            padding: 0;
        }

        li{
            background-color: #f9fafb;
            padding: 12px;
            margin-bottom: 8px;
            border-radius: 5px;
        }
    </style>
    </head>
<body>
    <div class="card">
    <h3>Detail Mahasiswa</h3>
    <ul>
        <li><b>NIM :</b> <?= $_GET["nim"]?> </li>
        <li><b>Nama :</b> <?= $_GET["nama"]?> </li>
        <li><b>Jurusan :</b> <?= $_GET["jurusan"]?> </li>
        <li><b>Email :</b> <?= $_GET["email"]?> </li>
        <li><b>Nilai :</b> <?= $_GET["nilai"]?> </li>
        <li><b>Grade :</b> <?= $_GET["grade"]?> </li>
        <li><b>Status :</b> <?= $_GET["status"]?> </li>
    </ul>
    <a href="index.php" class="tombol">Kembali</a>
    </div>
</body>
</html>
