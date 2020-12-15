<?php
include "koneksi1.php";
if (isset($_POST['tambah'])) {
    $insertSql = mysqli_query($conn, "INSERT into pengurus (Nama,Jenis_kelamin,Tempat_lahir,Tanggal_lahir,Nomer_Hp,Email,Alamat,Status_pengurus)
    values
    ('$_POST[Nama]','$_POST[Jenis_kelamin]','$_POST[Tempat_lahir]','$_POST[Tanggal_lahir]','$_POST[Nomer_Hp]','$_POST[Email]','$_POST[Alamat]','$_POST[Status_pengurus]')");
    if ($insertSql) {
        echo "<script type='text/javascript'>alert('Data Berhasil Ditambah...!'); location.href=\"index-pengurus.php\";</script>";
    }
}
