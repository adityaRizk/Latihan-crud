<?php
require 'function.php';

$id = $_GET["id"];

    if(hapusUser($id) > 0){
        echo "
        <script type='text/javascript'>
            alert('Data user gagal dihapus');
            window.location = 'user.php';
        </script>
    ";
    }else{
        echo "
        <script type='text/javascript'>
            alert('Data user berhasil dihapus');
            window.location = 'user.php';
        </script>
    ";
    }

?>