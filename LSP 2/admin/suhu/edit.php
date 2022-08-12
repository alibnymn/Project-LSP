<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Input Nilai siswa</title>

</head>

<body>
    <?php
    session_start();
    if (!isset($_SESSION['username'])){
        header("Location: ../aksi_login.php");
        exit;
    }
?>
    <?php
				include("db_koneksi.php");				
				$id_suhu = $_GET['id_suhu'];
				
				$query = mysqli_query($db, "SELECT * FROM tb_suhu inner join tb_siswa where tb_suhu.id_siswa = tb_siswa.id_siswa and tb_suhu.id_suhu = '$id_suhu'");
				while($d = mysqli_fetch_array($query))
				{
                    $id_suhu = $d['id_suhu'];
                    $id_siswa = $d['id_siswa'];
                    $suhu = $d['suhu'];
                    $keterangan = $d['keterangan'];
                    $nama = $d['nama'];
                }
			
			?>
    <!-- NAVBAR -->
    <div class="container">
        <nav class="navbar fixed-top navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand">Edit Data</a>
                <div>
                    <a class="btn btn-outline-light" href="index.php">Back</a>
                </div>
            </div>
        </nav>
        <div class="container-fluid">
            <div class="py-2">
                <br>
                <br>
                <div class="card-body">
                    <div class="box-body">
                        <form method="POST" action="edit-aksi.php">
                            <div class="box-body">
                                <div class="form-group">
                                    <input type="int" name="id_suhu" class="form-control" id="exampleInputEmail1"
                                        value="<?php echo $id_suhu?>" hidden>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Suhu Tubuh</label>
                                    <input type="text" name="suhu" class="form-control" id="exampleInputEmail1"
                                        value="<?php echo $suhu?>">
                                </div>
                                <div class="form-group">
                                    <!-- <label for="exampleInputEmail1">Keterangan</label> -->
                                    <input type="text" name="keterangan" class="form-control" id="exampleInputEmail1"
                                        value="<?php echo $keterangan?>" hidden>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">ID Siswa</label>
                                    <select class="form-control select" name="id_siswa" id="id_siswa">
                                        <option value="<?=$id_siswa?>">
                                            <?php echo $id_siswa .$nama?></option>
                                    </select>
                                </div>
                                <!-- /.box-body -->
                                <br>
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                        </form>
                    </div>

                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
                        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
                        crossorigin="anonymous">
                    </script>
</body>

</html>