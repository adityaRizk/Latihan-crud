<?php
require 'function.php';
require '../dashboard.php';

if(isset($_POST["submit"])){
    if(tambahBaju($_POST) > 0){
        echo "
        <script type='text/javascript'>
            alert('Data produk berhasil dikirim');
            window.location = 'baju.php';
        </script>
    ";
    }else{
        echo "
        <script type='text/javascript'>
            alert('Data produk gagal dikirim');
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
    <style>
        .main{
            margin-left: 300px;
        }
    </style>
</head>
<body>
    <div class="main">
            <h1>Tambah baju</h1>

        <form action="" method="POST"  enctype="multipart/form-data">
                <label for="merk">Merk</label><br>
                <input type="text" class="form-control" name="merk" id="merk" ><br>

                <label for="ukuran">ukuran</label><br>
                <input type="text" class="form-control" name="ukuran" id="ukuran" ><br>

                <label for="foto">foto</label><br>
                <input type="file" class="form-control" name="foto" id="foto" ><br>

                <label for="harga">harga</label><br>
                <input type="text" class="form-control" name="harga" id="harga" ><br>

                <button type="submit" class="btn btn-success" name="submit">Submit</button>
        </form>
    </div>
    
</body>
</html>