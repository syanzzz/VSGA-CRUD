<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PPDB SMA NEGERI X MEDAN</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>


    <div class="top">
        <div class="container">
            <img src="icon/icon.png" width="100" height="100" style="margin-bottom: -120px; margin-left: -120px;">
            <h4 class="mt-3">PENERIMAAN SISWA BARU ONLINE</h4>
            <h5>SMA NEGERI X MEDAN - SUMATERA UTARA</h5>
            <p class="almt">Jl. Merah Putih No. 202 Medan, Sumatera Utara, 20371, Phone : 0811 XXXX XXXX, Email :
                info@smanmeda.sch.id</p>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg bg-light p-2 start-50 translate-middle mt-5"
        style="width: 1300px; border-radius: 10px; ">
        <div class="container">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item me-3 mt-2">
                        <a href="index.php" class="bi bi-house-door text-secondary" style="font-size: 17px;">
                            Beranda</a>
                    </li>
                    <li class="nav-item me-3 mt-2">
                        <a href="registrasi.php" class="bi bi-person-plus text-secondary" style="font-size: 17px;">
                            Pendaftaran</a>
                    </li>
                    <li class="nav-item me-3 mt-2">
                        <a href="daftar_siswa.php" class="bi bi-clipboard-data text-secondary" style="font-size: 17px;">
                            Daftar
                            Siswa</a>
                    </li>
                    <li class="nav-item me-3 mt-2">
                        <a href="pengumuman.php" class="bi bi-bell text-secondary" style="font-size: 17px; ">
                            Pengumuman</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Cari" aria-label="search">
                    <button class="btn btn-outline-success" type="submit">Cari</button>
                </form>
            </div>
        </div>
    </nav>


    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="box">
                    <img src="img/unbk.jpg" alt="">
                </div>
            </div>
            <div class="col-md-4">
                <div class="box">
                    <form>
                        <div class="mb-2">
                            <label for="exampleInputEmail1" class="form-label">Username</label>
                            <input type="text" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="mb-2">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <button type="submit" class="btn btn-success bi bi-box-arrow-in-right"> Masuk</button>
                        <a href="registrasi.php" type="submit" class="btn btn-primary bi bi-person-plus"> Daftar
                            Baru</a>
                    </form>
                    <hr>
                    <h6>Informasi Terkini :</h6>
                    <ul>
                        <li> <a href="pengumuman.php">Pendaftaran Siswa Baru Tahun Pelajaran Akademik 2022/2023 Telah
                                Dibuka</a></li>
                        <li><a href="pengumuman.php">Syarat Pendaftaran Siswa Baru Tahun Pelajaran 2022/2023</a></li>
                        <li><a href="pengumuman.php">Seleksi Adminitrasi Siswa Baru Tahun Pelajaran 2022/2023</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        <div class="container">
            <p>Copyright &copy <?php echo date('Y'); ?>
                <a href="">SMA NEGERI X MEDAN</a>
            </p>
        </div>
    </div>

    <script src="assets/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>

</html>