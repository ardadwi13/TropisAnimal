@extends('layouts.template')

@section('content')
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Edit Galeri</h1>
                       
                            </div>
                            </br>
                        <form action="/galery/update/{{$galeri->id}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="content">
                                <div class="row">
                                    <div class="col-sm-6">     
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{$galeri->nama}}">
                                            <div class="text-danger">
                                            @error('nama')
                                                {{$message}}
                                            @enderror
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                        <div class="col-sm-4">
                                        <label>Ganti Foto Pertama</label>
                                        <img src="{{url('img/foto_galeri/galeri1/'.$galeri->galeri1)}}" width="150px">
                                        </div>
                                        </br>
                                        <div class="col-sm-8">
                                        <div class="form-group">
                                       
                                        <input type="file" name="galeri1" class="form-control">
                                        <div class="text-danger">
                                        @error('galeri1')
                                            {{$message}}
                                        @enderror
                                        </div>
                                        </div>
                                        </div>
                                        </div>

                                        <div class="col-sm-12">
                                        <div class="col-sm-4">
                                        <label>Ganti Foto Kedua</label>
                                        <img src="{{url('img/foto_galeri/galeri2/'.$galeri->galeri2)}}" width="150px">
                                        </div>
                                        </br>
                                        <div class="col-sm-8">
                                        <div class="form-group">
                                       
                                        <input type="file" name="galeri2" class="form-control">
                                        <div class="text-danger">
                                        @error('galeri2')
                                            {{$message}}
                                        @enderror
                                        </div>
                                        </div>
                                        </div>
                                        </div>

                                        
                                        <div class="col-sm-12">
                                        <div class="col-sm-4">
                                        <label>Ganti Foto Ketiga</label>
                                        <img src="{{url('img/foto_galeri/galeri3/'.$galeri->galeri3)}}" width="150px">
                                        </div>
                                        </br>
                                        <div class="col-sm-8">
                                        <div class="form-group">
                                       
                                        <input type="file" name="galeri3" class="form-control">
                                        <div class="text-danger">
                                        @error('galeri3')
                                            {{$message}}
                                        @enderror
                                        </div>
                                        </div>
                                        </div>
                                        </div>
                                        <div class="col-sm-12">
                                        <div class="form-group">
                                            <button class="btn btn-primary btn-sm">Create</button>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </form>
                            
                        </div>
                  
                </main>
                    
@endsection