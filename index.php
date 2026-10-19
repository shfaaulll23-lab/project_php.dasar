<?php

$mahasiswa = [
    [
        "nim" => "25001",
        "nama" => "fattah syach",
        "jurusan" => "Teknik mesin",
        "email" => "fattah@upi.edu",
        "nilai" => 90
    ],

    [
        "nim" => "25333",
        "nama" => "aqeela",
        "jurusan" => "Ilmu Komunikasi",
        "email" => "aqeela@upi.edu",
        "nilai" => 85
    ],

    [
        "nim" => "25123",
        "nama" => "arya mohan",
        "jurusan" => "Teknik geofisika",
        "email" => "mohan@upi.edu",
        "nilai" => 70
    ],

    [
        "nim" => "25777",
        "nama" => "raisa",
        "jurusan" => "Kedokteran",
        "email" => "raisa@upi.edu",
        "nilai" => 60
    ],

    [
        "nim" => "25404",
        "nama" => "jolina",
        "jurusan" => "Sastra Rusia",
        "email" => "jolina@upi.edu",
        "nilai" => 65
    ],
];

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Tugas php Dasar</title>
<style>
    * {
        box-sizing: border-box;
    }

    body {
        margin: 0;
        padding: 40px 20px;
        font-family: "Segoe UI", Tahoma, Arial, sans-serif;
        color: #1f2937;
        background: linear-gradient(135deg, #eef2ff 0%, #f1f5f9 100%);
        min-height: 100vh;
    }

    .container {
        max-width: 1000px;
        margin: 0 auto;
        background: #ffffff;
        padding: 30px;
        border-radius: 16px;
        box-shadow: 0 10px 30px rgba(15, 23, 42, 0.08);
    }

    .header {
        display: flex;
        justify-content: space-between;
        align-items: flex-end;
        margin-bottom: 24px;
        gap: 16px;
        flex-wrap: wrap;
    }

    .header h3 {
        margin: 0 0 6px 0;
        font-size: 26px;
        font-weight: 700;
        color: #111827;
    }

    .header p {
        margin: 0;
        color: #4b5563;
        font-size: 15px;
    }

    .btn {
        display: inline-block;
        background: #1d4ed8;
        color: #ffffff;
        padding: 10px 18px;
        border-radius: 8px;
        text-decoration: none;
        font-size: 14px;
        font-weight: 600;
        transition: background 0.2s, transform 0.1s;
    }

    .btn:hover {
        background: #1e40af;
        transform: translateY(-1px);
    }

    .btn-sm {
        padding: 7px 14px;
        font-size: 13px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        font-size: 15px;
    }

    thead th {
        background: #eef2ff;
        color: #1f2937;
        text-align: left;
        font-weight: 700;
        padding: 14px 12px;
    }

    tbody td {
        padding: 14px 12px;
        border-bottom: 1px solid #e5e7eb;
        vertical-align: middle;
    }

    tbody tr:hover {
        background: #f8fafc;
    }

    tbody tr:last-child td {
        border-bottom: none;
    }

    .status-lulus {
        font-weight: 600;
        color: #111827;
    }

    .status-tidak-lulus {
        font-weight: 700;
        color: #dc2626;
    }
</style>
</head>
<body>
    <div class="container">
        <div class="header">
            <div>
                <h3>Daftar Mahasiswa</h3>
                <p>Mini Website PHP Dasar</p>
            </div>
            <a class="btn" href="form_pesan.php">Isi Form Pesan</a>
        </div>

        <table>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Jurusan</th>
                    <th>Nilai</th>
                    <th>Grade</th>
                    <th>Status</th>
                    <th>Detail</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                <?php foreach($mahasiswa as $data): ?>
                    <?php
                    if ($data["nilai"] >= 80){
                        $grade = "A";
                    } elseif ($data["nilai"] >= 70) {
                        $grade = "B";
                    } elseif ($data["nilai"] >= 60){
                        $grade = "C";
                    } else {
                        $grade = "D";
                    }

                    if ($data["nilai"] >= 70){
                        $status = "Lulus";
                        $kelasStatus = "status-lulus";
                    } else {
                        $status = "Tidak Lulus";
                        $kelasStatus = "status-tidak-lulus";
                    }
                    ?>

                    <tr>
                        <td><?= $no ?></td>
                        <td><?= $data["nim"] ?></td>
                        <td><?= ucwords($data["nama"]) ?></td>
                        <td><?= $data["jurusan"] ?></td>
                        <td><?= $data["nilai"] ?></td>
                        <td><?= $grade ?></td>
                        <td class="<?= $kelasStatus ?>"><?= $status ?></td>
                        <td>
                            <a class="btn btn-sm" href="detail.php?nim=<?= urlencode($data["nim"]) ?>&nama=<?= urlencode($data["nama"]) ?>&jurusan=<?= urlencode($data["jurusan"]) ?>&email=<?= urlencode($data["email"]) ?>&nilai=<?= urlencode($data["nilai"]) ?>&grade=<?= urlencode($grade) ?>&status=<?= urlencode($status) ?>">Lihat Detail</a>
                        </td>
                    </tr>
                    <?php $no++; ?>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</body>
</html>