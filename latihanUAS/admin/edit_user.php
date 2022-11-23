<?php
require 'function.php';
require '../dashboard.php';

$id = $_GET["id"];
$user = query("SELECT * FROM user WHERE id_user = '$id'")[0];


if(isset($_POST["submit"])){
    if(editUser($_POST) > 0){
        echo "
        <script type='text/javascript'>
            alert('Data user berhasil diubah');
            window.location = 'user.php';
        </script>
    ";
    }else{
        echo "
        <script type='text/javascript'>
            alert('Data user gagal diubah');
            window.location = 'user.php';
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
            <h3>Edit user</h3>
    
            <form action="" method="POST" >
                <input type="hidden" name="id_user" value="<?= $user["id_user"]; ?>">

                <label for="nama_lengkap">nama lengkap</label><br>
                <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" value="<?= $user["nama_lengkap"]; ?>"><br>
    
                <label for="username">username</label><br>
                <input type="text" name="username" id="username" class="form-control" value="<?= $user["username"]; ?>"><br>
    
                <label for="password">password</label><br>
                <input type="text" name="password" id="password" class="form-control" value="<?= $user["password"]; ?>"><br>

                <label for="roles">roles</label><br>
                <select name="roles" id="roles" class="form-control">
                    <option value="admin">Admin</option>
                    <option value="customer">Customer</option>
                </select><br>

                <button type="submit" name="submit" class="btn btn-success" >kirim</button>
            </form>
    </div>
</body>
</html>