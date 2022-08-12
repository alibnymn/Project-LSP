<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <title>SATGAS SMKN 4 PADRALANG</title>

</head>

<body>
    
    <!-- NAVBAR -->
    <div class="container">
        <nav class="navbar fixed-top navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand">Daftar Siswa</a>
                <div>
                    <a class="btn btn-outline-light" href="{{ url('/') }}">Home</a>
                </div>
            </div>
        </nav>
        <!-- br disini digunakan untuk jarak atau spasi dengan navbar -->
        <br>
        <br>
        <br>
        <br>
        <CENTER>
            <h3>Berikut adalah Daftar siswa SMKN 4 PADALARANG</h3>
        </CENTER>
        <div class="container-fluid">

            <div class="py-2">
                <!-- Tabel -->
                <h1 align="center">DATA SISWA</h1>
                <table class="table table-dark table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Id Siswa</th>
                            <th>Nama Siswa</th>
                            <th>Kelas</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($siswa as $item)
                          <tr>
                          <td>{{ $loop->iteration}}</td>
                          <td>{{ $item->id_siswa}}</td>
                          <td>{{ $item->nama}}</td> 
                          <td>{{ $item->kelas}}</td>
                          </tr>
                          @endforeach
                    </tbody>
                </table>
            </div>
        </div>
</body>
</html>