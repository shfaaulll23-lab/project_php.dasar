<?php
if (
    
    !isset($_POST["nama"]) ||
    !isset($_POST["kelas"]) ||
    !isset($_POST["pesan"]) 
) {
    header("Location: form_pesan.php");
    exit;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pesan</title>

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
    <h3>Pesan Berhasil Dikirim</h3>
    <p>Terima kasih, <b><?= $_POST["nama"] ?>!</b></p>
    <ul>
        <li><b>Nama:</b> <?= $_POST["nama"]?> </li>
        <li><b>Kelas:</b> <?= $_POST["kelas"]?> </li>
        <li><b>Pesan/Kesan:</b> <?= $_POST["pesan"]?> </li>
    </ul>
    <a href="index.php" class="tombol">Kembali ke Data Mahasiswa</a>
    </div>
</body>
</html>