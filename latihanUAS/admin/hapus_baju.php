<?php
require 'function.php';

$id = $_GET["id"];

    if(hapusBaju($id) > 0){
        echo "
        <script type='text/javascript'>
            alert('Data produk gagal dihapus');
            window.location = 'baju.php';
        </script>
    ";
    }else{
        echo "
        <script type='text/javascript'>
            alert('Data produk berhasil dihapus');
            window.location = 'baju.php';
        </script>
    ";
    }

?>