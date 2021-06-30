@extends('layouts.template')

@section('content')
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Add Galeri</h1>
                       
                            </div>
                            </br>
                        <form action="/galery/insert" method="POST" enctype="multipart/form-data">
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
                                            <label>Foto 1</label>
                                            <input type="file"name="galeri1" class="form-control @error('galeri1') is-invalid @enderror">
                                            <div class="text-danger">
                                            @error('galeri1')
                                                {{$message}}
                                            @enderror
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>Foto 2</label>
                                            <input type="file" name="galeri2" class="form-control @error('galeri2') is-invalid @enderror">
                                            <div class="text-danger">
                                            @error('galeri2')
                                                {{$message}}
                                            @enderror
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>Foto 3</label>
                                            <input type="file" name="galeri3" class="form-control ">
                                            <div class="text-danger">
                                            @error('galeri3')
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