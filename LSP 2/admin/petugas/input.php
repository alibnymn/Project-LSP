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
    <title>Input Data Petugas</title>

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
                                    <label for="exampleInputEmail1">Id_Guru</label>
                                    <input type="int" name="id_guru" class="form-control" id="exampleInputEmail1">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Username</label>
                                    <input type="text" name="username" class="form-control" id="exampleInputEmail1"
                                        placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama</label>
                                    <input type="text" name="nama" class="form-control" id="exampleInputEmail1"
                                        placeholder="Nama">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Password</label>
                                    <input type="text" name="password" class="form-control" id="exampleInputEmail1"
                                        placeholder="password">
                                </div>
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