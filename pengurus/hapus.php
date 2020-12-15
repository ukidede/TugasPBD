<?php

include 'koneksi1.php';

$id = $_GET["id"];

if (hapuss($id) > 0) {
    echo " 
    <script>
            alert('Data Berhasil Di Hapus !' );
            document.location.href = 'index-pengurus.php';
    </script>
";
} else {
    echo " 
    <script>
            alert('Data Tidak Berhasil Di Hapus !' );
            document.location.href = 'index-pengurus.php';
    </script>
";
}
