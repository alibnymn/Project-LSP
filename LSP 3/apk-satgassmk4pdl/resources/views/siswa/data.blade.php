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
                    <li class="active"><i class="fa fa-users"></i></li>
                </ol>
            </div>
        </div>
    </div>
</div>  
@endsection

@section('content')
<div class="content mt-3">

    <div class="animated fadeIn">

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        
        <div class="card">
            <div class="card-header">
                <div class="pull-left">
               <strong>Data Siswa</strong>
                </div>
                <div class="pull-right">
                    <a href="{{ url('/siswa/tambah')}}" class="btn btn-success btn-sm">
                       <i class="fa fa-plus"></i> Tambah
                    </a>
                </div>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr style="background-color: gray">
                            <th>No</th>
                            <th>Id Siswa</th>
                            <th>Nama Siswa</th>
                            <th>Kelas</th>
                            <th class="text-center">Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($siswa as $item)
                          <tr>
                          <td>{{ $loop->iteration}}</td>
                          <td>{{ $item->id_siswa}}</td>
                          <td>{{ $item->nama}}</td> 
                          <td>{{ $item->kelas}}</td>
                          <td class="text-center">
                            <a href="{{ url('siswa/edit/'.$item->id_siswa)}}" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>  
                            <form action="{{ url('siswa/'.$item->id_siswa)}}" method="post" class="d-inline" onsubmit="return confirm('Yakin hapus data?')">
                             @method('delete')   
                             @csrf
                             <button class="btn btn-danger btn-sm">
                                <i class="fa fa-trash"></i>      
                            </button> 
                            </form>    
                            </td> 
                          </tr>
                          @endforeach
                    </tbody>
                 </table>
            </div>
        </div>
      
</div> 

</div>
    
@endsection
