@extends('layouts.template')

@section('content')
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Detail Profile</h1>
                       
                            </div>

                            <table class="">
                                   
                                    <tr>
                                        <th width="100px">Nama</th>
                                        <th width="30px">:</th>
                                        <th>{{$profile->nama}}</th>
                                    </tr> 
                                  
                                    <tr>
                                        <th width="100px">Judul Konten</th>
                                        <th width="30px">:</th>
                                        <th>{{$profile->judul_konten}}</th>
                                    </tr> 
                                    <tr>
                                        <th width="100px">Konten</th>
                                        <th width="30px">:</th>
                                        <th>{{$profile->konten}}</th>
                                    </tr>
                                    <tr>
                                        <th width="100px">Foto Profile</th>
                                        <th width="30px">:</th>
                                        <th><img src="{{url('img/foto_profile/'.$profile->foto_profil)}}" width="200px"></th>
                                    </tr> 
                                    <tr>
                                        <th><a href="/profile" class="btn btn-success btn-sm">Kembali</a></th>
                                    </tr>
                                                       
                            </table>
                        </div>
                  
                </main>
           
@endsection