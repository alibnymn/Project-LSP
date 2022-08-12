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
    <title>Edit Petugas</title>

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
				$id_guru = $_GET['id_guru'];
				
				$query = mysqli_query($db, "select * from tb_login where id_guru='$id_guru'");
				while($d = mysqli_fetch_array($query))
				{
                    $id_guru = $d['id_guru'];
                    $username = $d['username'];
                    $nama = $d['nama'];
                    $password = $d['password'];
					
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
                                    <input type="int" name="id_guru" class="form-control" id="exampleInputEmail1"
                                        value="<?php echo $id_guru?>" hidden>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Username</label>
                                    <input type="text" name="username" class="form-control" id="exampleInputEmail1"
                                        value="<?php echo $username?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama</label>
                                    <input type="text" name="nama" class="form-control" id="exampleInputEmail1"
                                        value="<?php echo $nama?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Password</label>
                                    <input type="text" name="password" class="form-control" id="exampleInputEmail1"
                                        value="<?php echo $password?>">
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