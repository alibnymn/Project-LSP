<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SATGAS SMK4 PDL</title>
        <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('style/assets/images/logo.png') }}">
    <title>SATGAS SMKN 4 PADRALANG</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div>
                    @auth
                        <a href="{{ url('/home') }}"></a>
                    @else
                        {{-- <a href="{{ route('login') }}">Login</a> --}}

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            <div class="content">
                <!doctype html>
    <!-- NAVBAR -->
    <div class="container">
        <nav class="navbar fixed-top navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand">SATGAS NEPAL</a>
                <div>
                        <a class="btn btn-outline-light" href="{{ url('/') }}">Home</a>
                        <a class="btn btn-outline-light" href="{{ url('/user/suhusiswa') }}">Suhu</a>
                        <a class="btn btn-outline-light" href="{{ url('/user/siswa') }}">siswa</a>
                        <a class="btn btn-outline-light" href="{{ route('login') }}">Login</a>
                </div>
            </div>
        </nav>
        <!-- br disini digunakan untuk jarak atau spasi dengan navbar -->
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="col-md-20">
            <div class="card">
                <div class="card-header bg-dark">
                    <strong class="card-title"><h1>Welcome to satgas smkn 4 padalarang</h1></strong>
                </div>
                <div class="card-body">
                    <img height="250" width="200" src="http://localhost:8000/gambar/picture1.png">
                    <p class="card-text"><p class="card-text"><div class="col-md-20">
                        <div>
                            <h1>Visi</h1>
                            <p> Tamatan Yang Terampil, Kreatif dan Inovatif, serta Ber-Imtaq Tinggi Akan Mampu Bersaing di Era
                                Globalisasi</p>
                                <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit accusantium fugit, quo necessitatibus est sequi et asperiores nihil maxime magnam amet pariatur vel tempore quia, commodi molestiae? Dolorum, quasi minima.</p>
                        </div>
                        <div>
                            <h1>Misi</h1>
                            <p>Disiplin – Belajar – Berlatih – Berkarya – Serta Inovatif dan Kreatif</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis quae quibusdam debitis, libero ratione possimus? Ea eaque commodi, debitis nobis harum eum exercitationem doloremque. Nobis veritatis quidem nisi nulla eveniet!</p></p>
                </div>
            </div>
        </div>        
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
