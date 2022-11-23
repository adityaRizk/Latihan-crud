<?php
require 'function.php';
require '../dashboard.php';

$id = $_GET["id"];
$baju = query("SELECT * FROM baju WHERE id_baju = '$id'")[0];


if(isset($_POST["submit"])){
    if(editBaju($_POST) > 0){
        echo "
        <script type='text/javascript'>
            alert('Data baju berhasil diubah');
            window.location = 'baju.php';
        </script>
    ";
    }else{
        echo "
        <script type='text/javascript'>
            alert('Data baju gagal diubah');
            window.location = 'baju.php';
        </script>
    ";
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="admin.css">
    <style>
        .main{
            margin-left: 300px;
        }
    </style>
</head>
<body>
    <div class="main">
            <h3>Edit produk</h3>
    
            <form action="" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id_baju" value="<?= $baju["id_baju"]; ?>">

                <label for="merk">merk</label><br>
                <input type="text" name="merk" id="merk" class="form-control" value="<?= $baju["merk"]; ?>"><br>
    
                <label for="ukuran">ukuran</label><br>
                <input type="text" name="ukuran" id="ukuran" class="form-control" value="<?= $baju["ukuran"]; ?>"><br>
    
                <label for="foto">foto</label><br>
                <input type="file" name="foto" id="foto" class="form-control" value="<?= $baju["foto"]; ?>"><br>

                <label for="harga">harga</label><br>
                <input type="text" name="harga" id="harga" class="form-control" value="<?= $baju["harga"]; ?>"><br>
    
                <button type="submit" name="submit" class="btn btn-success" >kirim</button>
            </form>
    </div>
</body>
</html>