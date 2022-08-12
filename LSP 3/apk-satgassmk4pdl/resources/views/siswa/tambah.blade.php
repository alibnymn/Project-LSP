@extends('main')

@section('title', 'Dashboard')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Siswa</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li class="active"><i class="fa fa-dashboard"></i></li>
                </ol>
            </div>
        </div>
    </div>
</div>  
@endsection

@section('content')
<div class="content mt-3">

    <div class="animated fadeIn">
        
        <div class="card">
            <div class="card-header">
                <div class="pull-left">
               <strong>Tambah Siswa</strong>
                </div>
                <div class="pull-right">
                    <a href="{{ url('siswa')}}" class="btn btn-secondary btn-sm">
                       <i class="fa fa-undo"></i> Back
                    </a>
                </div>
            </div>
            <div class="card">

                <div class="row">
                    <div class="col-md-4 offset-md-4">
                        <form action="{{ url('siswa')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">id_siswa</label>
                                <input type="int" name="id_siswa" class="form-control" id="exampleInputEmail1">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Siswa</label>
                                <input type="text" name="nama" class="form-control" id="exampleInputEmail1"
                                    placeholder="Nama Siswa">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Kelas</label>
                                <input type="text" name="kelas" class="form-control" id="exampleInputEmail1"
                                    placeholder="kelas">
                            </div>
                            <br>
                            <div class="box-footer">
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
      
</div> 

</div>
    
@endsection
