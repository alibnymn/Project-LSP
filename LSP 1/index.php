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
    <title>Kehadiran siswa</title>

</head>

<body>
    <!-- NAVBAR -->
    <div class="container">
        <nav class="navbar fixed-top navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand">Daftar Kehadiran siswa</a>
                <div>
                    <a class="btn btn-outline-success" href="input.php">+ Tambah</a>
                </div>
            </div>
        </nav>
        <!-- br disini digunakan untuk jarak atau spasi dengan navbar -->
        <br>
        <br>
        <br>
        <CENTER>
            <h3>Berikut adalah Daftar Kehadiran siswa SMKN 1 PISANG CAU</h3>
        </CENTER>
        <div class="container-fluid">

            <div class="py-2">
                <!-- 2 tombol di bawah fungsi nya untuk mengarahkan ke bagian sorting ASCENDING/DESCENDING  -->
                <a class="text-decoration-none text-white btn btn-primary" href="ascending.php">ASCENDING</a>
                <a class="text-decoration-none text-white btn btn-warning" href="descending.php">DESCENDING</a>

                <!-- Tabel -->
                <h1 align="center">DATA KEHADIRAN SISWA</h1>
                <!-- <p>di bawah ini merupakan ASCEN/DESCEN dengan menggunakan data table dengan mengklik bagian atas [background biru]<br>
          karena memakai data table maka akan ada fungsi lain seperti search,pagination, dan batas data</p> -->
                <table class="table table-bordered bg-body">
                    <thead>
                        <tr class="bg-dark text-white">
                            <th>NO</th>
                            <th>NAMA SISWA</th>
                            <th>KELAS</th>
                            <th>KEHADIRAN</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                //cara masukan file txt atau mengkoneksikan dan kemudian di tampilakn pada tabel 
                $txt_file = file_get_contents('kehadiransiswa.txt');
                $rows = explode("\n", $txt_file);
                array_shift($rows);
                $nomor=1;
                foreach($rows as $row => $data)
                { 
// Explode digunakan untuk memisahkan Item Data dariPemisah tanda (,) array pada PHP dimulaipada index ke-0
                    $row_data = explode(',', $data);
          //menampilkan atau memanggil data dari array yang di inputkan
                    $info[$row]['nama'] = $row_data[0];
                    $info[$row]['kelas'] = $row_data[1];
                    $info[$row]['nilai'] = $row_data[2];
                  ?>
                        <!-- menampilkan data dari input array -->
                        <tr>
                            <td><?php echo $nomor++?></td>
                            <td><?php echo $info[$row]['nama']?></td>
                            <td><?php echo $info[$row]['kelas']?></td>
                            <td><?php echo $info[$row]['nilai']?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

</body>

</html>