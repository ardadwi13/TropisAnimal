<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galeri;

class GaleriController extends Controller
{
    public function __construct()
    {
        $this-> Galeri = new Galeri();
    }
    public function index()
    {
        $data = [
            'galeri' => $this->Galeri->allData(),
        ];
        return view('admin.galeri.v_galeri',$data);
    }

    public function detail($id)
    {
        if (!$this->Galeri->detailData($id)){
            abort(404);
        }
        $data = [
            'galeri' => $this->Galeri->detailData($id),
        ];
        return view('admin.galeri.v_detailgaleri',$data);
    }

    public function add()
    {
        return view('admin.galeri.v_addgaleri');
    }

    public function insert()
    {
        Request()->validate([
            'nama' => 'required',
            'galeri1' => 'required|mimes:jpg,jpeg,png',
            'galeri2' => 'required|mimes:jpg,jpeg,png',
            'galeri3' => 'required|mimes:jpg,jpeg,png',
        ],[
            'nama.required'=> 'Nama wajib diisi !!!',
            'galer1.required'=> 'Foto Pertama wajib diisi !!!',
            'galeri2.required'=> 'Foto Kedua diisi !!!',
            'galeri3.required' => 'Foto Ketiga wajib diisi!!!',
        ]);

        $file1 = Request()->galeri1;
        $fileName1 = Request()->nama .'.'. $file1->extension();
        $file1->move(public_path('img/foto_galeri/galeri1'), $fileName1);

        $file2 = Request()->galeri2;
        $fileName2 = Request()->nama .'.'. $file2->extension();
        $file2->move(public_path('img/foto_galeri/galeri2'), $fileName2);

        $file3 = Request()->galeri3;
        $fileName3 = Request()->nama .'.'. $file3->extension();
        $file3->move(public_path('img/foto_galeri/galeri3'), $fileName3);
 
         $data = [
             'nama' => Request()->nama,
             'galeri1' =>  $fileName1,
             'galeri2' =>  $fileName2,
             'galeri3' =>  $fileName3,
         ];
 
         $this->Galeri->addData($data);
         return redirect()->route('galeri')->with('pesan','Data Berhasil disimpan');
    }

    public function edit($id)
    {
        if(!$this->Galeri->detailData($id)){
            abort(404);
        }
        $data = [
            'galeri' => $this->Galeri->detailData($id),
        ];
        return view('admin.galeri.v_editgaleri',$data);
    }

    public function update($id)
    {
        Request()->validate([
            'nama' => 'required',
            'galeri1' => 'mimes:jpg,jpeg,png',
            'galeri2' => 'mimes:jpg,jpeg,png',
            'galeri3' => 'mimes:jpg,jpeg,png',
        ],[
            'nama.required'=> 'Nama wajib diisi !!!',
       
           
        ]);

        if (Request()->galeri1 <> "") {
            $file1 = Request()->galeri1;
            $fileName1 = Request()->nama .'.'. $file1->extension();
            $file1->move(public_path('img/foto_galeri/galeri1'), $fileName1);
     
             $data = [
                 'nama' => Request()->nama,
                 'galeri1' =>  $fileName1,
              
             ];
     
             $this->Galeri->editData($id,$data);
        }
        elseif (Request()->galeri2 <> "") {
            $file2 = Request()->galeri2;
            $fileName2 = Request()->nama .'.'. $file2->extension();
            $file2->move(public_path('img/foto_galeri/galeri2'), $fileName2);
     
             $data = [
                 'nama' => Request()->nama,
                
                 'galeri2' =>  $fileName2,
                 
             ];
     
             $this->Galeri->editData($id,$data);
        }
        elseif (Request()->galeri3 <> "") {
            $file3 = Request()->galeri3;
            $fileName3 = Request()->nama .'.'. $file3->extension();
            $file3->move(public_path('img/foto_galeri/galeri3'), $fileName3);
     
             $data = [
                 'nama' => Request()->nama,
                
                 'galeri3' =>  $fileName3,
             ];
     
             $this->Galeri->editData($id,$data);
        }
        else {
            $data = [
                'nama' => Request()->nama,
               
            ];
            $this->Galeri->editData($id,$data);
        }

      
         return redirect()->route('galeri')->with('pesan','Data Berhasil Update');
    }
    public function delete($id)
    {
        //HAPUS FOTO
        $galeri = $this->Galeri->detailData($id);
        if ($galeri->galeri1 <>"") {
            unlink(public_path('img/foto_galeri/galeri1').'/'.$galeri->galeri1);
        }elseif ($galeri->galeri2 <>"") {
            unlink(public_path('img/foto_galeri/galeri2').'/'.$galeri->galeri2);
        }elseif ($galeri->galeri3 <>"") {
            unlink(public_path('img/foto_galeri/galeri3').'/'.$galeri->galeri3);
        }
        $this->Galeri->deleteData($id);
         return redirect()->route('galeri')->with('pesan','Data Berhasil di Hapus');

    }
}
