@extends('layouts.template')

@section('content')
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Detail Kontak</h1>
                       
                            </div>

                            <table class="">
                                     
                                    <tr>
                                        <th width="100px">Nama</th>
                                        <th width="30px">:</th>
                                        <th>{{$kontak->nama}}</th>
                                    </tr> 
                                  
                                    <tr>
                                        <th width="100px">No Telpon</th>
                                        <th width="30px">:</th>
                                        <th>{{$kontak->no_telpon}}</th>
                                    </tr> 
                                    <tr>
                                        <th width="100px">Email</th>
                                        <th width="30px">:</th>
                                        <th>{{$kontak->email}}</th>
                                    </tr>
                                    <tr>
                                        <th width="100px">Alamat</th>
                                        <th width="30px">:</th>
                                        <th>{{$kontak->alamat}}</th>
                                    </tr>
                                    <tr>
                                        <th><a href="/contact" class="btn btn-success btn-sm">Kembali</a></th>
                                    </tr>
                                                       
                            </table>
                        </div>
                  
                </main>
           
@endsection