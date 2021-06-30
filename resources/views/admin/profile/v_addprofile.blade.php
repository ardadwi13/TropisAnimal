@extends('layouts.template')

@section('content')
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Add Profile</h1>
                       
                            </div>
                            </br>
                        <form action="/profile/insert" method="POST" enctype="multipart/form-data">
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
                                            <label>Judul Konten</label>
                                            <input name="judul_konten" class="form-control @error('judul_konten') is-invalid @enderror">
                                            <div class="text-danger">
                                            @error('judul_konten')
                                                {{$message}}
                                            @enderror
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>Konten</label>
                                            <input name="konten" class="form-control @error('konten') is-invalid @enderror">
                                            <div class="text-danger">
                                            @error('konten')
                                                {{$message}}
                                            @enderror
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>Foto Profile</label>
                                            <input type="file" name="foto_profil" class="form-control ">
                                            <div class="text-danger">
                                            @error('foto_profil')
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