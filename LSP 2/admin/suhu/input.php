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
    <title>Input Suhu Tubuh siswa</title>

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
                <a class="navbar-brand">Tambah Data</a>
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
                        <form method="POST" action="input-aksi.php">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1"></label>
                                    <input type="int" name="id_suhu" class="form-control" id="exampleInputEmail1"
                                        placeholder="Id Suhu" hidden>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Suhu Tubuh</label>
                                    <input type="text" name="suhu" class="form-control" id="exampleInputEmail1"
                                        placeholder="suhu">
                                </div>
                                <div class="form-group">
                                    <!-- <label for="exampleInputEmail1">Siswa</label> -->
                                    <select class="form-control select" name="id_siswa">
                                        <option selected="" disabled="">Pilih Siswa</option>
                                        <?php 
		                                include "db_koneksi.php";
		                                $query = mysqli_query($db, "SELECT * FROM tb_siswa ORDER BY id_siswa")or die(mysqli_error());
		                                while($data = mysqli_fetch_array($query)){
		                                ?>
                                        <option><?php echo $data['id_siswa']." ".$data["nama"];?></option>
                                        <?php } ?>
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