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
    <!-- NAVBAR -->
    <div class="container">
        <nav class="navbar fixed-top navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand">Daftar Suhu Siswa</a>
                <div>
                    <a class="btn btn-outline-light" href="home.php">Home</a>
                </div>
            </div>
        </nav>
        <!-- br disini digunakan untuk jarak atau spasi dengan navbar -->
        <br>
        <br>
        <br>
        <CENTER>
            <h3>Berikut adalah Daftar Suhu siswa SMKN 4 PADALARANG</h3>
        </CENTER>
        <div class="container-fluid">

            <div class="py-2">
                <!-- 2 tombol di bawah fungsi nya untuk mengarahkan ke bagian sorting ASCENDING/DESCENDING  -->

                <!-- Tabel -->
                <h1 align="center">DATA NILAI SISWA</h1>
                <table class="table table-dark table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Id Siswa</th>
                            <th>Nama Siswa</th>
                            <th>Suhu Tubuh</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <?php 
		include "db_koneksi.php";
		$query = mysqli_query($db, "SELECT * FROM tb_suhu inner join tb_siswa where tb_suhu.id_siswa = tb_siswa.id_siswa and tb_suhu.id_suhu")or die(mysqli_error());
		$nomor = 1;
		while($data = mysqli_fetch_array($query)){
		?>
                    <tbody>
                        <tr>
                            <td><?php echo $nomor++; ?></td>
                            <td><?php echo $data['id_siswa']; ?></td>
                            <td><?php echo $data['nama']; ?></td>
                            <td><?php echo $data['suhu']; ?></td>
                            <td><?php echo $data['keterangan']; ?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
</body>

</html>