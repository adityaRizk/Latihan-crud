<?php
require '../koneksi.php';

function query($query){
    
    global $conn;
    $row = [];
    $result = mysqli_query($conn, $query);
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function tambahBaju($data){
    global $conn;

    $merk = $data['merk'];
    $ukuran = $data['ukuran'];
    $foto = $_FILES["foto"]["name"];
    $files = $_FILES["foto"]["tmp_name"];
    $harga = $data['harga'];

    mysqli_query($conn, "INSERT INTO baju VALUES(NULL, '$merk','$ukuran','$foto','$harga')");
    move_uploaded_file($files, "../foto/".$foto);

    return mysqli_affected_rows($conn);
}

function hapusBaju($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM baju WHERE id_baju = '$id'");
    return mysqli_affected_rows($rows);
}

function editBaju($data){
    global $conn;

    $id = $data["id_baju"];    
    $merk = $data["merk"];
    $foto = $_FILES["foto"]["name"];
    $files = $_FILES["foto"]["tmp_name"];
    $ukuran = $data["ukuran"];
    $harga = $data["harga"];


    if(empty($foto)){

    $query = "UPDATE baju SET 
    merk = '$merk',
    ukuran = '$ukuran',
    harga = '$harga'  WHERE id_baju = '$id'
    ";

    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);

    }else{

    $query = "UPDATE baju SET 
    merk = '$merk',
    foto = '$foto',
    ukuran = '$ukuran',
    harga = '$harga'  WHERE id_baju = '$id'
    ";

    move_uploaded_file($files, "../foto/".$foto);
    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
    }
    
}

function tambahUser($data){
    global $conn;

    $nama_lengkap = $data['nama_lengkap'];
    $username = $data['username'];
    $password = $data["password"];
    $roles = $data['roles'];

    mysqli_query($conn, "INSERT INTO user VALUES(NULL, '$nama_lengkap','$username','$password','$roles')");
    return mysqli_affected_rows($conn);
}

function hapusUser($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM user WHERE id_user = '$id'");
    return mysqli_affected_rows($rows);
}


function editUser($data){
    global $conn;

    $id = $data["id_user"];    
    $nama_lengkap = $data["nama_lengkap"];
    $password = $data["password"];
    $roles = $data["roles"];

    $query = "UPDATE user SET 
    nama_lengkap = '$nama_lengkap',
    username = '$username',
    password = '$password',
    roles = '$roles'  WHERE id_user = '$id'
    ";

    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
    
}


?>