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
        
        <div class="card">
            <div class="card-header">
                <div class="pull-left">
               <strong>Edit Suhu Siswa</strong>
                </div>
                <div class="pull-right">
                    <a href="{{ url('suhusiswa')}}" class="btn btn-secondary btn-sm">
                       <i class="fa fa-undo"></i> Back
                    </a>
                </div>
            </div>
            <div class="card">

                <div class="row">
                    <div class="col-md-4 offset-md-4">
                        <form action="{{ url('suhusiswa/'.$suhusiswa->id_suhu)}}" method="post">
                            @method('PUT')
                            @csrf
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1"></label>
                                    <input type="int" name="id_suhu" class="form-control" id="exampleInputEmail1" value="{{$suhusiswa->id_suhu}}" hidden>
                                </div>
                                <div class="form-group">
                                    <select class="form-control select2" name="id_siswa">
                                        @foreach($siswa as $s)
                                        <option value="{{ $s->id_siswa }}" {{ ($suhusiswa->id_siswa == $s->id_siswa)  ? 'selected' : ''}}>{{ $s->nama }}</option>
                                        @endforeach 
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Suhu</label>
                                    <input type="text" name="suhu" class="form-control" id="exampleInputEmail1"
                                        placeholder="Nama Siswa" value="{{$suhusiswa->suhu}}">
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
