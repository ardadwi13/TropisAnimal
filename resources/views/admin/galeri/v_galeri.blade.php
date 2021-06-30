@extends('layouts.template')

@section('content')
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Table Galeri</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Galeri</li>
                        </ol>
                        <a href="/galery/add" class="btn btn-primary btn-sm">Add</a> 
                        </br>
                        </br>
                        @if (session('pesan'))
                        <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h4><i class="icon fa fa-check"></i>Success</h4>
                        {{session('pesan')}}
                        </div>
                        @endif
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Data Galeri
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Foto 1</th>
                                                <th>Foto 2</th>
                                                <th>Foto 3</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                    <tbody>
                                    <?php $no=1; ?>
                                    @foreach($galeri as $data) 
                                        <tr>
                                        <td>{{$no++}}</td>
                                        <td>{{$data->nama}}</td>
                                        <td><img src="{{url('img/foto_galeri/galeri1/'.$data->galeri1)}}" width="100px"></td>
                                        <td><img src="{{url('img/foto_galeri/galeri2/'.$data->galeri2)}}" width="100px"></td>
                                        <td><img src="{{url('img/foto_galeri/galeri3/'.$data->galeri3)}}" width="100px"></td>
                                        <td>
                                            <a href="/galery/detail/{{$data->id}}" class="btn btn-sm btn-success">Detail</a>
                                            <a href="/galery/edit/{{$data->id}}" class="btn btn-sm btn-warning">Edit</a>
                                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{ $data->id }}">
                                            Delete
                                            </button>

                                        </td>
                                    </tr>
                                   @endforeach
                                        </tbody>
                                    
                                    </table>
    @foreach ($galeri as $data)
        <div class="modal modal-danger fade" id="delete{{ $data->id }}">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h4 class="modal-title">DELETE</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                                    </div>
                                        <div class="modal-body">
                                             <p>Apakah Anda Yakin Untuk Menghapus Data Ini???</p>
                                                </div>
                                                     <div class="modal-footer">
                                                         <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">No</button>
                                                            <a href="/galery/delete/{{$data->id}}"type="button" class="btn btn-outline">Yes</a>
                                                    </div>
                                            </div>
                                    </div>
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </div>
               @endforeach

        
                </main>

@endsection