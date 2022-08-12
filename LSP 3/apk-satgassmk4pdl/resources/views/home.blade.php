@extends('main')

@section('title', 'Dashboard')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Home</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li class="active"><i class="fa fa-home"></i></li>
                </ol>
            </div>
        </div>
    </div>
</div>  
@endsection

@section('content')
<div class="content mt-3">

    <div class="animated fadeIn">
        <div class="container py-5 mb-5 mt-5">
            <div class="animated fadeIn">

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <center>
                    <div class="col-md-20">
                        <div class="card">
                            <div class="card-header bg-success">
                                <strong class="card-title text-light"><h1>Selamat Datang di Pengelola Data Suhu Tubuh SMKN 4 PADALARANG</h1></strong>
                            </div>
                            <div class="card-body text-white bg-warning">
                                <img height="250" width="200" src="http://localhost:8000/gambar/picture1.png">
                                <div class="display-5 fw-bold text-center">
                                    <p><small><h2>Website Pengelola Data suhu SMKN 4 PADALARANG</h2></small></p>
                                </div>
                                <hr>
                                <div>
                                    <h1>Visi</h1>
                                    <p> Tamatan Yang Terampil, Kreatif dan Inovatif, serta Ber-Imtaq Tinggi Akan Mampu Bersaing di Era
                                        Globalisasi</p>
                                        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit accusantium fugit, quo necessitatibus est sequi et asperiores nihil maxime magnam amet pariatur vel tempore quia, commodi molestiae? Dolorum, quasi minima.</p>
                                </div>
                                <div>
                                    <h1>Misi</h1>
                                    <p>Disiplin – Belajar – Berlatih – Berkarya – Serta Inovatif dan Kreatif</p>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis quae quibusdam debitis, libero ratione possimus? Ea eaque commodi, debitis nobis harum eum exercitationem doloremque. Nobis veritatis quidem nisi nulla eveniet!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </center>
        </div>
</div> 

</div>
    
@endsection
