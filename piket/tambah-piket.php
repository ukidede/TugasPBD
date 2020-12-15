<?php
include "koneksi2.php";
if (isset($_POST['tambah'])) {
    $insertSql = mysqli_query($conn, "INSERT into jadwal_piket (Senin,Selasa,Rabu,Kamis,Jumat)
    values
    ('$_POST[Senin]','$_POST[Selasa]','$_POST[Rabu]','$_POST[Kamis]','$_POST[Jumat]')");
    if ($insertSql) {
        echo "<script type='text/javascript'>alert('Data Berhasil Ditambah...!'); location.href=\"index-piket.php\";</script>";
    }
}
