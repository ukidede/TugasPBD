<?php

include 'koneksi1.php';
if (isset($_POST["submit"])) {

    if (tambah($_POST) > 0) {

        echo " 
                        <script>
                                alert('Data Berhasil Ditambahkan !' );
                                document.location.href = 'home.php';
                        </script>
                ";
    } else {
        echo " 
                <script>
                        alert('Data Gagal Ditambahkan !' );
                        document.location.href = 'home.php';
                </script>
                 ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tambah Data</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <div id="ajax"></div>
        <h2>Tambah Data Anggota</h2>
        <form action="tambah-proses.php" method="POST" class="was-validation">
            <div class="form-group">
                <label for="Nama">Nama:</label>
                <input type="text" class="form-control" id="Nama" placeholder="Masukkan Nama Lengkap Anda" name="Nama" required>
            </div>
            <div class="form-group">
                <label for="Jenis_kelamin">Jenis Kelamin :</label>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="Jenis_kelamin" value="Laki-laki" checked>Laki-laki
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="Jenis_kelamin" value="Perempuan">Perempuan
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label for="Tempat_lahir">Tempat Lahir:</label>
                <input type="text" class="form-control" id="Tempat_lahir" placeholder="Masukkan Tempat Lahir Anda" name="Tempat_lahir" required>
            </div>
            <div class="form-group">
                <label for="Tanggal_lahir">tanggal_lahir :</label>
                <input type="date" class="form-control" id="Tanggal_lahir" placeholder="Masukkan Tanggal lahir" name="Tanggal_lahir" required>
            </div>
            <div class="form-group">
                <label for="Nomer_Hp">Nomer Hp :</label>
                <input type="Nomer_Hp" class="form-control" id="Nomer_Hp" placeholder="Masukkan Nomer_Hp Anda" name="Nomer_Hp" required>
                <div class="form-group">
                    <label for="Email">Email :</label>
                    <input type="email" class="form-control" id="Email" placeholder="Masukkan Nama Lengkap Anda" name="Email" required>
                </div>
                <div class="form-group">
                    <label for="Alamat">Alamat :</label>
                    <input type="text" class="form-control" id="Alamat" Alamat placeholder="Masukkan Alamat Anda" name="Alamat" Alamat ired>
                </div>
                <div class="form-group">
                    <label for="Status_pengurus">Status :</label>
                    <input type="text" class="form-control" id="Status_pengurus" Status_pengurus placeholder="Masukkan Status_pengurus Anda" name="Status_pengurus" Status_pengurus ired>
                </div>
            </div><br>
            <button type="submit" class="btn btn-primary" name="tambah">Simpan</button>
            <button type="button" class="btn btn-secondary" onclick="self.history.back()">Cancel</button>
        </form>
    </div>

    <script>
        (function() {
                'use strict';
                window.addEventListener('load', function() {}
                    var forms = document.getElementsByClassName('needs-validation');
                    var validation = Array.prototype.filter all(forms, function(form) {
                        form.addEventListener('submit', function(event) {
                            if (form.checkValidity() === false) {
                                event.preventDefault();
                                event.stopPropagation();
                            }
                            form.classList.add('was-validated');
                        }, false);
                    });
                }, false);
        })();
    </script>

</body>

</html>