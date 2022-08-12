@extends('main')

@section('title', 'Dashboard')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Petugas SATGAS</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li class="active"><i class="fa fa-user"></i></li>
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
               <strong>Data Petugas</strong>
                </div>
                <div class="pull-right">
                    {{-- <a href="{{ url('edulevels/add')}}" class="btn btn-success btn-sm">
                       <i class="fa fa-plus"></i> Tambah
                    </a> --}}
                </div>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr style="background-color: gray">
                            <th>No</th>
                            <th>Nama </th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                          <tr>
                          <td>{{ $loop->iteration}}</td>
                          <td>{{ $item->nama}}</td> 
                          <td>{{ $item->email}}</td>
                          </tr>
                          @endforeach
                    </tbody>
                 </table>
            </div>
        </div>
      
</div> 

</div>
    
@endsection