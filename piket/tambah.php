<?php

include 'koneksi2.php';
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
        <h2>Tambah Anggota Piket</h2>
        <form action="tambah-piket.php" method="POST" class="was-validation">
            <div class="form-group">
                <label for="Senin">Senin:</label>
                <input type="text" class="form-control" id="Senin" placeholder="Masukkan Nama " name="Senin" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Tolong Isi.</div>
            </div>
            <div class="form-group">
                <label for="Selasa">Selasa :</label>
                <input type="Selasa" class="form-control" id="Selasa" placeholder="Masukkan Nama " name="Selasa" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Tolong Isi.</div>
            </div>
            <div class="form-group">
                <label for="Rabu">Rabu :</label>
                <input type="Rabu" class="form-control" id="Rabu" placeholder="Masukkan Nama " name="Rabu" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Tolong Isi.</div>
            </div>
            <div class="form-group">
                <label for="Kamis">Kamis :</label>
                <input type="Kamis" class="form-control" id="Kamis" placeholder="Masukkan Nama" name="Kamis" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Tolong Isi.</div>
                <div class="form-group">
                    <label for=Jumat">Jumat :</label>
                    <input type="text" class="form-control" id="Jumat" placeholder="Masukkan Nama" name="Jumat" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Tolong Isi.</div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary" name="tambah">Simpan</button>
            <button type="button" class="btn btn-secondary" onclick="self.history.back()">Cancel</button>
        </form>
    </div>

    <script>
        (function() {
                'use strict';
                window.addEventListener('load', function() {}
                    var forms = document.getElementsByClassName('needs-validation');
                    var validation = Array.prototype.filter.call(forms, function(form) {
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