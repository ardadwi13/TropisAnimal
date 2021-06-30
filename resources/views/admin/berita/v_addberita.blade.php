@extends('layouts.template')

@section('content')
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Add Berita</h1>
                       
                            </div>
                            </br>
                        <form action="/news/insert" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="content">
                                <div class="row">
                                    <div class="col-sm-6">     
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input name="nama" class="form-control @error('nama') is-invalid @enderror">
                                            <div class="text-danger">
                                            @error('nama')
                                                {{$message}}
                                            @enderror
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>Judul Berita</label>
                                            <input name="judul_berita" class="form-control @error('judul_berita') is-invalid @enderror">
                                            <div class="text-danger">
                                            @error('judul_berita')
                                                {{$message}}
                                            @enderror
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>Isi Berita</label>
                                            <input name="berita" class="form-control @error('berita') is-invalid @enderror">
                                            <div class="text-danger">
                                            @error('berita')
                                                {{$message}}
                                            @enderror
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>Foto Berita</label>
                                            <input type="file" name="foto_berita" class="form-control ">
                                            <div class="text-danger">
                                            @error('foto_berita')
                                                {{$message}}
                                            @enderror
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <button class="btn btn-primary btn-sm">Create</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                            
                        </div>
                  
                </main>
                    
@endsection