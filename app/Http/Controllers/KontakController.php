<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kontak;

class KontakController extends Controller
{
    public function __construct()
    {
        $this-> Kontak = new Kontak();
    }
    public function index()
    {
        $data = [
            'kontak' => $this->Kontak->allData(),
        ];
        return view('admin.kontak.v_kontak',$data);
    }

    public function detail($id)
    {
        if (!$this->Kontak->detailData($id)){
            abort(404);
        }
        $data = [
            'kontak' => $this->Kontak->detailData($id),
        ];
        return view('admin.kontak.v_detailkontak',$data);
    }

    public function add()
    {
        return view('admin.kontak.v_addkontak');
    }

    public function insert()
    {
        Request()->validate([
            'nama' => 'required',
            'no_telpon' => 'required|numeric|min:12',
            'email' => 'required|email',
            'alamat' => 'required',
        ],[
            'nama.required'=> 'Nama wajib diisi !!!',
            'no_telpon.required'=> 'No Telpon wajib diisi !!!',
            'email.required'=> 'email wajib diisi !!!',
            'alamat.required' => 'alamat wajib diisi!!!',
        ]);

         $data = [
             'nama' => Request()->nama,
             'no_telpon' => Request()->no_telpon,
             'email' => Request()->email,
             'alamat' => Request()->alamat,
         ];
 
         $this->Kontak->addData($data);
         return redirect()->route('kontak')->with('pesan','Data Berhasil disimpan');
    }
    
    public function edit($id)
    {
        if(!$this->Kontak->detailData($id)){
            abort(404);
        }
        $data = [
            'kontak' => $this->Kontak->detailData($id),
        ];
        return view('admin.kontak.v_editkontak',$data);
    }

    public function update($id)
    {
        Request()->validate([
            'nama' => 'required',
            'no_telpon' => 'required|numeric|min:12',
            'email' => 'required|email',
            'alamat' => 'required',
        ],[
            'nama.required'=> 'Nama wajib diisi !!!',
            'no_telpon.required'=> 'No Telpon wajib diisi !!!',
            'email.required'=> 'email wajib diisi !!!',
            'alamat.required' => 'alamat wajib diisi!!!',
        ]);

         $data = [
             'nama' => Request()->nama,
             'no_telpon' => Request()->no_telpon,
             'email' => Request()->email,
             'alamat' => Request()->alamat,
         ];
 
         $this->Kontak->editData($id,$data);
         return redirect()->route('kontak')->with('pesan','Data Berhasil Update');
    }
    public function delete($id)
    {
       
        $this->Kontak->deleteData($id);
         return redirect()->route('kontak')->with('pesan','Data Berhasil di Hapus');

    }
    
}
