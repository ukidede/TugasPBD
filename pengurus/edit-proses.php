<?php
include "koneksi1.php";
if (isset($_POST['update'])) {
    // print_r($_POST);
    $updateSql = mysqli_query($conn, "UPDATE pengurus SET 
        Nama='$_POST[Nama]',
        Jenis_kelamin='$_POST[Jenis_kelamin]',
        Tempat_lahir='$_POST[Tempat_lahir]',
        Tanggal_lahir='$_POST[Tanggal_lahir]',
        Nomer_Hp='$_POST[Nomer_Hp]',
        Email='$_POST[Email]',
        Alamat='$_POST[Alamat]',
        Status_pengurus='$_POST[Status_pengurus]'
        WHERE id='$_POST[id]'
    ");
    if ($updateSql) {
        echo "<script type='text/javascript'>alert('Data Berhasil Diupdate...!'); location.href=\"index-pengurus.php\";</script>";
    } else {
        echo "<script type='text/javascript'>alert('Data gagal Diupdate...!'); location.href=\"index-pengurus.php\";</script>";
    }
}
