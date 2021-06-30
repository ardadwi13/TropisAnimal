@extends('layouts.template')

@section('content')
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Detail Berita</h1>
                       
                            </div>

                            <table class="">
                                  
                                    <tr>
                                        <th width="100px">Nama</th>
                                        <th width="30px">:</th>
                                        <th>{{$berita->nama}}</th>
                                    </tr> 
                                  
                                    <tr>
                                        <th width="100px">Judul Berita</th>
                                        <th width="30px">:</th>
                                        <th>{{$berita->judul_berita}}</th>
                                    </tr> 
                                    <tr>
                                        <th width="100px">berita</th>
                                        <th width="30px">:</th>
                                        <th>{{$berita->berita}}</th>
                                    </tr>
                                    <tr>
                                        <th width="100px">Foto Berita </th>
                                        <th width="30px">:</th>
                                        <th><img src="{{url('img/foto_berita/'.$berita->foto_berita)}}" width="200px"></th>
                                    </tr> 
                                    <tr>
                                        <th><a href="/news" class="btn btn-success btn-sm">Kembali</a></th>
                                    </tr>
                                                       
                            </table>
                        </div>
                  
                </main>
           
@endsection