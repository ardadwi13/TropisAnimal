@extends('layouts.template')

@section('content')
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Add Kontak</h1>
                       
                            </div>
                            </br>
                        <form action="/contact/insert" method="POST" enctype="multipart/form-data">
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
                                            <label>No Telpon</label>
                                            <input name="no_telpon" class="form-control @error('no_telpon') is-invalid @enderror">
                                            <div class="text-danger">
                                            @error('no_telpon')
                                                {{$message}}
                                            @enderror
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>Email</label>
                                            <input name="email" class="form-control @error('email') is-invalid @enderror">
                                            <div class="text-danger">
                                            @error('email')
                                                {{$message}}
                                            @enderror
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <input name="alamat" class="form-control ">
                                            <div class="text-danger">
                                            @error('alamat')
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