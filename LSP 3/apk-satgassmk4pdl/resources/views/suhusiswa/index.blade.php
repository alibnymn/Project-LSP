@extends('main')

@section('title', 'Dashboard')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Suhu Siswa</h1>
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

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        
        <div class="card">
            <div class="card-header">
                <div class="pull-left">
               <strong>Data Suhu Siswa</strong>
                </div>
                <div class="pull-right">
                    <a href="{{ url('suhusiswa/create')}}" class="btn btn-success btn-sm">
                       <i class="fa fa-plus"></i> Tambah
                    </a>
                </div>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr style="background-color: gray">
                            <th>No</th>
                            {{-- <th>Id Suhu</th> --}}
                            <th>Nama Siswa</th>
                            <th>Suhu</th>
                            <th>Keterangan</th>
                            <th class="text-center">Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($suhu as $item ) 
                        @php
                            $namasiswa=
                            App\Siswa::where('id_siswa', $item->id_siswa)->first()->nama;
                        @endphp
                          <tr>
                          <td>{{ $loop->iteration}}</td>
                          {{-- <td>{{ $item->id_suhu}}</td> --}}
                          <td>{{ $namasiswa}}</td>
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
                          <td class="text-center">
                            <a href="{{ url('suhusiswa/'.$item->id_suhu.'/edit')}}" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>  
                            <form action="{{ url('suhusiswa/'.$item->id_suhu)}}" method="post" class="d-inline" onsubmit="return confirm('Yakin hapus data?')">
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

