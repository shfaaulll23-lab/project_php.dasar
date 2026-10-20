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
        "jurusan" => "Teknik Mesin",
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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Tugas PHP Dasar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous"/>

</head>
<body  class="p-3 mb-2 bg-body-secondary">
    <div class="container my-5 p-5 bg-white rounded shadow">
        
<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h3>Daftar Mahasiswa</h3>
        <p>Mini website PHP Dasar</p>
    </div>
    <a href="form_pesan.php" class="btn btn-primary">Isi Form Pesan</a>
</div>
    
    
    <table class="table table-bordered ">
        <thead class="table-primary">
            <tr>
            <th>No</th>
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
            <?php $no =1; ?>
            <?php foreach($mahasiswa as $data): ?>
                <?php
                if ($data["nilai"] >= 80){
                    $grade = "A";
                } elseif ($data["nilai"] >= 70) {
                    $grade = "B";
                }elseif ($data["nilai"] >= 60){
                    $grade = "C";
                }else {
                    $grade = "D";
                }

                if ($data["nilai"] >= 70){
                    $status = "Lulus";
                    $warna = "text-success fw-bold";
                } else  {
                    $status = "Tidak Lulus";
                    $warna = "text-danger fw-bold";
                }

                ?>



            <tr>
                <td> <?= $no ?> </td>
                <td> <?= $data["nim"] ?> </td>
                <td> <?= $data["nama"] ?> </td>
                <td> <?= $data["jurusan"] ?> </td>
                <td><?= $data["nilai"]?> </td>
                <td><?= $grade ?> </td> 
                <td class="<?= $warna ?>"> <?= $status ?> </td>
                <td><a href="detail.php?nim=<?= $data["nim"] ?>&nama=<?= $data["nama"] ?>&jurusan=<?= $data["jurusan"] ?>&email=<?= $data["email"] ?>&nilai=<?= $data["nilai"] ?>&grade=<?= $grade ?>&status=<?= $status ?>" class="btn btn-primary">Lihat Detail</a></td>
            </tr>
            <?php $no++; ?>
            <?php endforeach ?>
        </tbody>
    </table>
    </div>
    

</body>
</html>
   