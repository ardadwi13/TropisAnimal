@extends('layouts.template')

@section('content')
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Table Berita</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Berita</li>
                        </ol>
                        <a href="/news/add" class="btn btn-primary btn-sm">Add</a> 
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
                                Data Berita
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Foto Berita</th>
                                                <th>Judul Berita</th>
                                                <th>Isi Berita</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                    <tbody>
                                    <?php $no=1; ?>
                                    @foreach($berita as $data) 
                                        <tr>
                                        <td>{{$no++}}</td>
                                        <td>{{$data->nama}}</td>
                                        <td><img src="{{url('img/foto_berita/'.$data->foto_berita)}}" width="100px"></td>
                                        <td>{{$data->judul_berita}}</td>
                                        <td>{{$data->berita}}</td>
                                        <td>
                                            <a href="/news/detail/{{$data->id}}" class="btn btn-sm btn-success">Detail</a>
                                            <a href="/news/edit/{{$data->id}}" class="btn btn-sm btn-warning">Edit</a>
                                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{ $data->id }}">
                                            Delete
                                            </button>

                                        </td>
                                    </tr>
                                   @endforeach
                                        </tbody>
                                    
                                    </table>
    @foreach ($berita as $data)
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
                                                            <a href="/news/delete/{{$data->id}}"type="button" class="btn btn-outline">Yes</a>
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