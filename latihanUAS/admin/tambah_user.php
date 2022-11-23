<?php
require 'function.php';
require '../dashboard.php';

if(isset($_POST["submit"])){
    if(tambahUser($_POST) > 0){
        echo "
        <script type='text/javascript'>
            alert('Data user berhasil dikirim');
            window.location = 'user.php';
        </script>
    ";
    }else{
        echo "
        <script type='text/javascript'>
            alert('Data user gagal dikirim');
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
    <style>
        .main{
            margin-left: 300px;
        }
    </style>
</head>
<body>
    <div class="main">
            <h1>Tambah user</h1>

        <form action="" method="POST">
                <label for="nama_lengkap">nama lengkap</label><br>
                <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" ><br>

                <label for="username">username</label><br>
                <input type="text" class="form-control" name="username" id="username" ><br>

                <label for="password">password</label><br>
                <input type="text" class="form-control" name="password" id="password" ><br>

                <label for="roles">roles</label><br>
                <select name="roles" id="roles" class="form-control">
                    <option value="admin">Admin</option>
                    <option value="customer">Customer</option>
                </select><br>
                <button type="submit" class="btn btn-success" name="submit">Submit</button>
        </form>
    </div>
    
</body>
</html>