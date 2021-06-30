<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class BeritaController extends Controller
{
    public function __construct()
    {
        $this-> Berita = new Berita();
    }

   public function index()
   {
    $data = [
        'berita' => $this->Berita->allData(),
    ];
       return view('admin.berita.v_berita',$data);
   }

   public function detail($id)
    {
        if (!$this->Berita->detailData($id)){
            abort(404);
        }
        $data = [
            'berita' => $this->Berita->detailData($id),
        ];
        return view('admin.berita.v_detailberita',$data);
    }

    public function add()
    {
        return view('admin.berita.v_addberita');
    }

    public function insert()
    {
        Request()->validate([
            'nama' => 'required',
            'judul_berita' => 'required',
            'berita' => 'required',
            'foto_berita' => 'required|mimes:jpg,jpeg,png',
        ],[
            'nama.required'=> 'Nama wajib diisi !!!',
            'judul_berita.required'=> 'Judul Berita wajib diisi !!!',
            'berita.required'=> 'Berita wajib diisi !!!',
            'foto_berita.required' => 'Foto Berita wajib diisi!!!',
        ]);

        $file = Request()->foto_berita;
        $fileName = Request()->nama .'.'. $file->extension();
        $file->move(public_path('img/foto_berita'), $fileName);
 
         $data = [
             'nama' => Request()->nama,
             'judul_berita' => Request()->judul_berita,
             'berita' => Request()->berita,
             'foto_berita' =>  $fileName,
         ];
 
         $this->Berita->addData($data);
         return redirect()->route('berita')->with('pesan','Data Berhasil disimpan');
    }
    public function edit($id)
    {
        if(!$this->Berita->detailData($id)){
            abort(404);
        }
        $data = [
            'berita' => $this->Berita->detailData($id),
        ];
        return view('admin.berita.v_editberita',$data);
    }
    public function update($id)
    {
        Request()->validate([
            'nama' => 'required',
            'judul_berita' => 'required',
            'berita' => 'required',
            'foto_berita' => 'mimes:jpg,jpeg,png',
        ],[
            'nama.required'=> 'Nama wajib diisi !!!',
            'judul_berita.required'=> 'Judul konten wajib diisi !!!',
            'berita.required'=> 'konten wajib diisi !!!',
           
        ]);

        if (Request()->foto_berita <> "") {
            $file = Request()->foto_berita;
            $fileName = Request()->nama .'.'. $file->extension();
            $file->move(public_path('img/foto_berita'), $fileName);
     
             $data = [
                 'nama' => Request()->nama,
                 'judul_berita' => Request()->judul_berita,
                 'berita' => Request()->berita,
                 'foto_berita' =>  $fileName,
             ];
     
             $this->Berita->editData($id,$data);
        }else {
            $data = [
                'nama' => Request()->nama,
                'judul_berita' => Request()->judul_berita,
                'berita' => Request()->berita,
              
               
            ];
            $this->Berita->editData($id,$data);
        }

      
         return redirect()->route('berita')->with('pesan','Data Berhasil Update');
    }
    public function delete($id)
    {
        //HAPUS FOTO
        $berita = $this->Berita->detailData($id);
        if ($berita->foto_berita <>"") {
            unlink(public_path('img/foto_berita').'/'.$berita->foto_berita);
        }
        $this->Berita->deleteData($id);
         return redirect()->route('berita')->with('pesan','Data Berhasil di Hapus');

    }
}
