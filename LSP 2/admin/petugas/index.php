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

<body>
    <?php
    session_start();
    if (!isset($_SESSION['username'])){
        header("Location: ../aksi_login.php");
        exit;
    }
?>
    <!-- NAVBAR -->
    <div class="container">
        <nav class="navbar fixed-top navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand">Daftar Petugas</a>
                <div>
                    <a class="btn btn-outline-light" href="../home.php">Home</a>
                    <a class="btn btn-outline-light" href="input.php">+ Tambah</a>
                </div>
            </div>
        </nav>
        <!-- br disini digunakan untuk jarak atau spasi dengan navbar -->
        <br>
        <br>
        <br>
        <CENTER>
            <h3>Berikut adalah Daftar Petugas Satgas SMKN 4 PADALARANG</h3>
        </CENTER>
        <div class="container-fluid">

            <div class="py-2">
                <!-- Tabel -->
                <h1 align="center">DATA Petugas</h1>
                <table class="table table-dark table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Id Guru</th>
                            <th>Username</th>
                            <th>Nama Guru</th>
                            <th>password</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>

                    <?php 
		include "db_koneksi.php";
		$query = mysqli_query($db, "SELECT * FROM  tb_login")or die(mysqli_error());
		$nomor = 1;
		while($data = mysqli_fetch_array($query)){
		?>
                    <tbody>
                        <tr>
                            <td><?php echo $nomor++; ?></td>
                            <td><?php echo $data['id_guru']; ?></td>
                            <td><?php echo $data['username']; ?></td>
                            <td><?php echo $data['nama']; ?></td>
                            <td><?php echo $data['password']; ?></td>
                            <td>
                                <a class="edit" href="edit.php?id_guru=<?php echo $data['id_guru']; ?>"><button
                                        type="button" class="btn btn-warning">Edit</button></a>
                                <a class="hapus" href="hapus.php?id_guru=<?php echo $data['id_guru']; ?>"><button
                                        type="button" class="btn btn-danger">Hapus</button></a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
</body>

</html>