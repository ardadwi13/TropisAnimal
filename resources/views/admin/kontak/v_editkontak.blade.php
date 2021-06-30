@extends('layouts.template')

@section('content')
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Edit Kontak</h1>
                       
                            </div>
                            </br>
                        <form action="/contact/update/{{$kontak->id}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="content">
                                <div class="row">
                                    <div class="col-sm-6">     
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{$kontak->nama}}">
                                            <div class="text-danger">
                                            @error('nama')
                                                {{$message}}
                                            @enderror
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>No Telepon</label>
                                            <input name="no_telpon" class="form-control @error('no_telpon') is-invalid @enderror" value="{{$kontak->no_telpon}}">
                                            <div class="text-danger">
                                            @error('no_telpon')
                                                {{$message}}
                                            @enderror
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>Email</label>
                                            <input name="email" class="form-control @error('email') is-invalid @enderror" value="{{$kontak->email}}">
                                            <div class="text-danger">
                                            @error('email')
                                                {{$message}}
                                            @enderror
                                            </div>
                                        </div>

                                        
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <input name="alamat" class="form-control @error('alamat') is-invalid @enderror" value="{{$kontak->alamat}}">
                                            <div class="text-danger">
                                            @error('alamat')
                                                {{$message}}
                                            @enderror
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