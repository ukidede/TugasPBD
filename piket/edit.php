<?php

include 'koneksi2.php';
$id = $_GET["id"];
$stt = queryy("SELECT * FROM Jadwal_piket WHERE id = $id ")[0];
if (isset($_POST["submit"])) {
    if (edittt($_GET) > 0) {

        echo " 
                        <script>
                                alert('Data Berhasil Di Edit !' );
                                document.location.href = 'home.php';
                        </script>
                ";
    } else {
        echo " 
                <script>
                        alert('Data Gagal Di Edit !' );
                        document.location.href = 'home.php';
                </script>
                ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit Data</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <h2>Edit Jadwal Piket</h2>
        <form action="edit-proses.php" method="POST" class="needs-validation" novalidate>
            <input type="hidden" name="id" value="<?= $stt["id"]; ?> ">
            <div class="form-group">
                <label for="Senin">Senin</label>
                <input type="text" class="form-control" id="Senin" placeholder="Masukkan Nama" name="Senin" required value="<?= $stt["Senin"]; ?>">
            </div>
            <div class="form-group">
                <label for="Selasa">Selasa</label>
                <input type="Selasa" class="form-control" id="Selasa" placeholder="Masukkan Nama" name="Selasa" required value="<?= $stt["Selasa"]; ?>">
            </div>
            <div class="form-group">
                <label for="Rabu">Rabu</label>
                <input type="Rabu" class="form-control" id="Rabu" placeholder="Masukkan Nama" name="Rabu" required value="<?= $stt["Rabu"]; ?>">
            </div>
            <div class="form-group">
                <label for="Kamis">Kamis</label>
                <input type="Kamis" class="form-control" id="Kamis" placeholder="Masukkan Nama" name="Kamis" required value="<?= $stt["Kamis"]; ?>">
            </div>
            <div class="form-group">
                <label for="Jumat">Jumat</label>
                <input type="text" class="form-control" id="Jumat" placeholder="Masukkan Nama" name="Jumat" required value="<?= $stt["Jumat"]; ?>">
            </div>
            <button type="submit" class="btn btn-primary" name="update">Simpan</button>
            <button type="button" class="btn btn-secondary" onclick="self.history.back()">Cancel</button>
    </div><br>
    </form>
    </div>

    <script>
        (function() {
            'use strict';
            window.addEventListener('load', function() {
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