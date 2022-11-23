<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        .dashboard{
            position: absolute;
            width: 280px;
            height: 100vh;
            background-color: yellow;
            padding: 20px;
            box-sizing: border-box;
        }
        li{
            margin:20px 0;
            list-style: none;
        }
        li a{
            text-decoration: none;
            font-size: 30px;
            font-weight: 600;
        }
    </style>
</head>
<body>
    <div class="dashboard">
        <ul>
            <li><a href="baju.php">Prodak</a></li>
            <li><a href="user.php">User</a></li>
        </ul>
    </div>
</body>
</html>