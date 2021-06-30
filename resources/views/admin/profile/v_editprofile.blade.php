@extends('layouts.template')

@section('content')
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Edit Profile</h1>
                       
                            </div>
                            </br>
                        <form action="/profile/update/{{$profile->id}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="content">
                                <div class="row">
                                    <div class="col-sm-6">     
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{$profile->nama}}">
                                            <div class="text-danger">
                                            @error('nama')
                                                {{$message}}
                                            @enderror
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>Judul Konten</label>
                                            <input name="judul_konten" class="form-control @error('judul_konten') is-invalid @enderror" value="{{$profile->judul_konten}}">
                                            <div class="text-danger">
                                            @error('judul_konten')
                                                {{$message}}
                                            @enderror
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>Konten</label>
                                            <input name="konten" class="form-control @error('konten') is-invalid @enderror" value="{{$profile->konten}}">
                                            <div class="text-danger">
                                            @error('konten')
                                                {{$message}}
                                            @enderror
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                        <div class="col-sm-4">
                                        <label>Ganti Foto Profile</label>
                                        <img src="{{url('img/foto_profile/'.$profile->foto_profil)}}" width="150px">
                                        </div>
                                        </br>
                                        <div class="col-sm-8">
                                        <div class="form-group">
                                       
                                        <input type="file" name="foto_profil" class="form-control">
                                        <div class="text-danger">
                                        @error('foto_profil')
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