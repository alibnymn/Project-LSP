</html>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>SATGAS SMKN 4 PADRALANG</title>

</head>
<?php
    session_start();
    if (!isset($_SESSION['username'])){
        header("Location: ../aksi_login.php");
        exit;
    }
?>

<body>
    <!-- NAVBAR -->
    <div class="container">
        <nav class="navbar fixed-top navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand">Satgas SMKN 4 PADALARANG</a>
                <div>
                    <a class="btn btn-outline-light" href="home.php">Home</a>
                    <a class="btn btn-outline-light" href="suhu/index.php">Suhu Siswa</a>
                    <a class="btn btn-outline-light" href="siswa/index.php">Siswa</a>
                    <a class="btn btn-outline-light" href="petugas/index.php">Petugas</a>
                    <a class="btn btn-outline-light" href="logout.php">Log Out</a>
                </div>
            </div>
    </div>
    </nav>
    <!-- br disini digunakan untuk jarak atau spasi dengan navbar -->
    <div class="container py-5 mb-5 mt-5">
        <?php
            include "db_koneksi.php";
            $query = mysqli_query($db, "SELECT * FROM tb_login ")or die(mysqli_error());
            $nomor = 1;
            while($data = mysqli_fetch_array($query)){
            ?>
        <p class="fs-4 border-bottom border-dark">Selamat Datang, <?php echo $data['nama']?></p>
        <?php }?>
        <div class="display-5 fw-bold text-center">Di Website Pengelola Data Suhu Tubuh Siswa SMK NEGERI 4 PADALARANG
        </div>
        <hr>
        <div>
            <h1>Visi</h1>
            <p> Tamatan Yang Terampil, Kreatif dan Inovatif, serta Ber-Imtaq Tinggi Akan Mampu Bersaing di Era
                Globalisasi</p>
        </div>
        <div>
            <h1>Misi</h1>
            <p>Disiplin – Belajar – Berlatih – Berkarya – Serta Inovatif dan Kreatif</p>
        </div>

        <center>
            <img src="gambar.jpg" class="img-fluid shadow-lg" alt="...">
        </center>
    </div>
</body>

</html>