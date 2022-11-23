<?php
require 'function.php';
require '../dashboard.php';

$user = query("SELECT * FROM user");
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
        <h1>data user</h1>
        <a href="tambah_user.php"> <button type="submit" class="btn btn-primary mb-3">tambah prodak</button></a>
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
            <?php foreach($user as $data) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $data['nama_lengkap']?></td>
                <td><?= $data['username']?></td>
                <td><?= $data['password']?></td>
                <td><?= $data['roles']?></td>
                <td>
                    <a href="edit_user.php?id=<?= $data['id_user']; ?>">edit</a>
                    <a href="hapus_user.php?id=<?= $data['id_user']; ?>" onClick="return confirm('ingin menghapus?')">hapus</a>
                </td>
            </tr>
            <?php $i++;?>
            <?php endforeach; ?>
        </table>
    </div>
    
</body>
</html>