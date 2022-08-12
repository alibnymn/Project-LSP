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
                <a class="navbar-brand">Daftar Suhu Siswa</a>
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
            <h3>Berikut adalah Daftar Suhu siswa SMKN 4 PADALARANG</h3>
        </CENTER>
        <div class="container-fluid">
            <div class="animated fadeIn">

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

            <div class="py-2">
                <!-- Tabel -->
                <h1 align="center">DATA SUHU SISWA</h1>
                <table class="table table-dark table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            {{-- <th>Id Suhu</th> --}}
                            <th>Nama Siswa</th>
                            <th>Suhu</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($suhu as $item ) 
                        @php
                        //penurunan atau pewarisan dari kls siswa
                            $dt_siswa=
                            App\Siswa::where('id_siswa', $item->id_siswa)->first();
                        @endphp
                          <tr>
                          <td>{{ $loop->iteration}}</td>
                          {{-- <td>{{ $item->id_suhu}}</td> --}}
                          <td>{{ $dt_siswa->nama}}</td>
                          <td>{{ $item->suhu}}</td> 
                          <td> <?php
                            $a = $item['suhu'];
                            if ($a > 37) {
                                # code...
                                echo "Harus Isolasi";
                            } else {
                                # code...
                                echo "Normal";
                            };?>
                          </td>
                          </tr>
                          @endforeach
                    </tbody>
                </table>
            </div>
        </div>
</body>
</html>