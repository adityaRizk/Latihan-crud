<?php
require 'function.php';
require '../dashboard.php';

$produk = query("SELECT * FROM baju");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            width: 90%;

        }
        .main{
            margin-left: 300px;
        }
        th, td{
            text-align: left;
        }
    </style>
</head>
<body>
    <div class="main">
        <h1>data produk</h1>
        <a href="tambah_baju.php"> <button type="submit" class="btn btn-primary mb-3">tambah prodak</button></a>
        <table padding="20px">
            <tr>
                <th>No</th>
                <th>Merk</th>
                <th>Ukuran</th>
                <th>foto</th>
                <th>harga</th>
                <th>aksi</th>
            </tr>
            <?php $i = 1; ?>
            <?php foreach($produk as $data) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $data['merk']?></td>
                <td><?= $data['ukuran']?></td>
                <td><img src="../foto/<?= $data['foto']?>" width="60px"></td>
                <td><?= $data['harga']?></td>
                <td>
                    <a href="edit_baju.php?id=<?= $data['id_baju']; ?>">edit</a>
                    <a href="hapus_baju.php?id=<?= $data['id_baju']; ?>" onClick="return confirm('ingin menghapus?')">hapus</a>
                </td>
            </tr>
            <?php $i++;?>
            <?php endforeach; ?>
        </table>
    </div>
    
</body>
</html>