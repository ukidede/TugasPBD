<?php
include "koneksi2.php";
if (isset($_POST['update'])) {
    // print_r($_POST);
    $updateSql = mysqli_query($conn, "UPDATE Jadwal_piket SET 
        Senin='$_POST[Senin]',
        Selasa='$_POST[Selasa]',
        Rabu='$_POST[Rabu]',
        Kamis='$_POST[Kamis]',
        Jumat='$_POST[Jumat]'
        WHERE id='$_POST[id]'
    ");
    if ($updateSql) {
        echo "<script type='text/javascript'>alert('Data Berhasil Diupdate...!'); location.href=\"index-piket.php\";</script>";
    } else {
        echo "<script type='text/javascript'>alert('Data gagal Diupdate...!'); location.href=\"index-piket.php\";</script>";
    }
}
