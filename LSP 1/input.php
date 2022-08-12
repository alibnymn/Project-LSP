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
    <title>Input Kehadiran siswa</title>

</head>

<body>
    <!-- NAVBAR -->
    <div class="container">
        <nav class="navbar fixed-top navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand">Tambah Data</a>
                <div>
                    <a class="btn btn-outline-success" href="index.php">Back</a>
                </div>
            </div>
        </nav>
        <div class="container-fluid">
            <div class="py-2">
                <br>
                <!-- FORM Input data array-->
                <div class="row my-5 justify-content-center">
                    <div class="card " style="width: 25rem;">
                        <div class="card-body">
                            <form method="POST" action="input_proses.php">
                                <div class="mb-2">
                                    <label for="nama" class="form-label">Nama Siswa</label>
                                    <input type="text" class="form-control" name="nama" id="nama">
                                </div>
                                <div class="mb-2">
                                    <label for="kelas" class="form-label">Kelas</label>
                                    <input type="text" class="form-control" name="kelas" id="kelas">
                                </div>
                                <div class="mb-2">
                                    <label for="kehadiran" class="form-label">Kehadiran</label>
                                    <input type="text" class="form-control" name="kehadiran" id="kehadiran">
                                </div>
                                <button type="submit" name="Submit" value="Simpan"
                                    class="btn btn-primary float-end">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>