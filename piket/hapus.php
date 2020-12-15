<?php

include 'koneksi2.php';

$id = $_GET["id"];

if (hapusss($id) > 0) {
    echo " 
    <script>
            alert('Data Berhasil Di Hapus !' );
            document.location.href = 'index-piket.php';
    </script>
";
} else {
    echo " 
    <script>
            alert('Data Tidak Berhasil Di Hapus !' );
            document.location.href = 'index-piket.php';
    </script>
";
}
