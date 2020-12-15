<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>STT ABHIRAMA DEVARI</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body class="bg-black" id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">Home</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#data1">Data Anggota</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#data2">Data Pengurus</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#data3">Jadwal Piket</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container d-flex h-100 align-items-center">
            <div class="mx-auto text-center">
                <h1 class="mx-auto my-0 text-uppercase">SWASTYASTU</h1>
                <h2 class="text-white-50 mx-auto mt-2 mb-5">Selamat Datang Di website Resmi STT ABHIRAMA DEVARI Banjar Adat Liligundi</h2>
                <a href="../logout.php" class="btn btn-primary js-scroll-trigger" href="#">Logout</a>
            </div>
        </div>
    </header>
    <!-- Data Anggota -->
    <?php
    include "../koneksi.php";
    session_start();
    $tampil = mysqli_query($conn, "SELECT * FROM anggota_stt ");
    ?>

    <section class="dataanggota-section bg-black" id="data1" style="margin-bottom:150px">
        <div class=" container bg-white">
            <table class="table">
                <thead class="thead-dark">
                    <tr align="center">
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Nomer Hp</th>
                        <th>Email</th>
                        <th>Alamat</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    while ($a = mysqli_fetch_array($tampil)) {
                        echo "
                                       <tr>
                                       <td>$a[Nama]</td>
                                       <td>$a[Jenis_kelamin]</td>
                                       <td>$a[Tempat_lahir]</td>
                                       <td>$a[Tanggal_lahir]</td>
                                       <td>$a[Nomer_Hp]</td>
                                       <td>$a[Email]</td>
                                       <td>$a[Alamat]</td>
                                       <td>$a[Status]</td>
                                       <td>
                                       </td>
                                   </tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </section>
    <!-- data Pengurus -->
    <?php
    include "../pengurus/koneksi1.php";
    $hadir = mysqli_query($conn, "SELECT * FROM pengurus");
    ?>

    <section class="datapengurus-section bg-black" id="data2" style="margin-bottom:150px">
        <div class="container bg-white">
            <table class="table">
                <thead class="thead-dark">
                    <tr align="center">
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Nomer Hp</th>
                        <th>Email</th>
                        <th>Alamat</th>
                        <th>Status Kepengurusan</th>
                        <th>Acction</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    while ($a = mysqli_fetch_array($hadir)) {
                        echo "
                                       <tr>
                                       <td>$a[Nama]</td>
                                       <td>$a[Jenis_kelamin]</td>
                                       <td>$a[Tempat_lahir]</td>
                                       <td>$a[Tanggal_lahir]</td>
                                       <td>$a[Nomer_Hp]</td>
                                       <td>$a[Email]</td>
                                       <td>$a[Alamat]</td>
                                       <td>$a[Status_pengurus]</td>
                                       <td>
                                       </td>
                                   </tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </section>
    <!-- Jadwal Piket -->
    <?php
    include "../piket/koneksi2.php";
    $tampill = mysqli_query($conn, "SELECT * FROM jadwal_piket");
    ?>
    <section class="datapengurus-section bg-black" id="data3" style="margin-bottom:150px">
        <div class=" container bg-white">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>Senin</th>
                        <th>Selasa</th>
                        <th>Rabu</th>
                        <th>Kamis</th>
                        <th>Jumat</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    while ($a = mysqli_fetch_array($tampill)) {
                        echo "
                                       <tr>
                                       <td>$a[Senin]</td>
                                       <td>$a[Selasa]</td>
                                       <td>$a[Rabu]</td>
                                       <td>$a[Kamis]</td>
                                       <td>$a[Jumat]</td>
                                       <td>
                                       </td>
                                   </tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </section>
    <!-- Contact -->
    <section class="contact-section bg-black" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Alamat</h4>
                            <hr class="my-4" />
                            <div class="small text-black-50">Jln Mayor Metra, Liligundi, Singarja, Bali</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-envelope text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Email</h4>
                            <hr class="my-4" />
                            <div class="small text-black-50"><a href="#!">STT.ABHIRAMA DEVARI@gmail.com</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-mobile-alt text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Phone</h4>
                            <hr class="my-4" />
                            <div class="small text-black-50">+1 (555) 902-8832</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="social d-flex justify-content-center">
                <a class="mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                <a class="mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                <a class="mx-2" href="#!"><i class="fab fa-github"></i></a>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="footer bg-black small text-center text-white-50">
        <div class="container">Copyright © STT ABHIRAMA DEVARI 2020</div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>