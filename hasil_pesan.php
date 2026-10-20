<?php
if (
    
    !isset($_POST["nama"]) ||  !isset($_POST["kelas"]) ||  !isset($_POST["pesan"]) )
    
 {
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
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous"/>

    
</head>
<body class="p-3 mb-2 bg-body-secondary">
    <div class="container bg-white my-5 p-5 rounded shadow" style="max-width: 740px;">
    <h3>Pesan Berhasil Dikirim</h3>
    <p>Terima kasih, <b><?= $_POST["nama"] ?>!</b></p>
    <ul class="list-unstyled">
        <li class="bg-light p-3 mb-2 rounded"><b>Nama :</b> <?= $_POST["nama"]?> </li>
        <li class="bg-light p-3 mb-2 rounded"><b>Kelas :</b> <?= $_POST["kelas"]?> </li>
        <li class="bg-light p-3 mb-2 rounded"><b>Pesan / Kesan :</b> <?= $_POST["pesan"]?> </li>
    </ul>
    <a href="index.php" class="btn btn-primary">Kembali ke Data Mahasiswa</a>
    </div>
</body>
</html>