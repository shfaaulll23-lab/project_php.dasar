<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pesan</title>
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
            border: none;
            font-size: 16px;
        }

        .tombolabu{
             background-color: #6b6b6b;
            color: white;
            padding: 8px 14px;
            border-radius: 5px;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;

        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        input{
            width: 100%;
            padding: 10px;
            border: 1px solid #d1d5db;
            border-radius: 5px;
            box-sizing: border-box;
        }
    </style>
    </head>
<body>
    <div class="card">
    <h3>Form Pesan Mahasiswa</h3>


        <form action="hasil_pesan.php" method="post">
           <label>Nama</label>
            <input type="text" name="nama">
            <br>
            <br>
            <label>Kelas</label>
            <input type="text" name="kelas">
            <br>
            <br>
            <label>Pesan / Kesan</label>
            <input type="text" name="pesan">
            <br>
            <br>
            <button type="submit" name="kirim"
            class="tombol">Kirim</button>
            <a href="index.php" class="tombolabu">Kembali</a>
        </form>
        
        </div>
</body>
</html>

