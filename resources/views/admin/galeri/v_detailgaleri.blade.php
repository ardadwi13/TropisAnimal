@extends('layouts.template')

@section('content')
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Detail Galeri</h1>
                       
                            </div>

                            <table class="">
                                   
                                    <tr>
                                        <th width="100px">Nama</th>
                                        <th width="30px">:</th>
                                        <th>{{$galeri->nama}}</th>
                                    </tr> 
                                  
                                    <tr>
                                        <th width="100px">Foto 1 </th>
                                        <th width="30px">:</th>
                                        <th><img src="{{url('img/foto_galeri/galeri1/'.$galeri->galeri1)}}" width="200px"></th>
                                    </tr> 
                                    <tr>
                                        <th width="100px">Foto 2 </th>
                                        <th width="30px">:</th>
                                        <th><img src="{{url('img/foto_galeri/galeri2/'.$galeri->galeri2)}}" width="200px"></th>
                                    </tr> 
                                    <tr>
                                        <th width="100px">Foto 3 </th>
                                        <th width="30px">:</th>
                                        <th><img src="{{url('img/foto_galeri/galeri3/'.$galeri->galeri3)}}" width="200px"></th>
                                    </tr> 
                                    <tr>
                                        <th><a href="/galery" class="btn btn-success btn-sm">Kembali</a></th>
                                    </tr>
                                                       
                            </table>
                        </div>
                  
                </main>
           
@endsection