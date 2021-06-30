<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this-> Profile = new Profile();
    }
    public function index()
    {
        $data = [
            'profile' => $this->Profile->allData(),
        ];
        return view('admin.profile.v_profile',$data);
    }
    public function detail($id)
    {
        if (!$this->Profile->detailData($id)){
            abort(404);
        }
        $data = [
            'profile' => $this->Profile->detailData($id),
        ];
        return view('admin.profile.v_detailprofile',$data);
    }

    public function add()
    {
        return view('admin.profile.v_addprofile');
    }

    public function insert()
    {
        Request()->validate([
            'nama' => 'required',
            'judul_konten' => 'required',
            'konten' => 'required',
            'foto_profil' => 'required|mimes:jpg,jpeg,png',
        ],[
            'nama.required'=> 'Nama wajib diisi !!!',
            'judul_konten.required'=> 'Judul konten wajib diisi !!!',
            'konten.required'=> 'konten wajib diisi !!!',
            'foto_profil.required' => 'Foto Profile wajib diisi!!!',
        ]);

        $file = Request()->foto_profil;
        $fileName = Request()->nama .'.'. $file->extension();
        $file->move(public_path('img/foto_profile'), $fileName);
 
         $data = [
             'nama' => Request()->nama,
             'judul_konten' => Request()->judul_konten,
             'konten' => Request()->konten,
             'foto_profil' =>  $fileName,
         ];
 
         $this->Profile->addData($data);
         return redirect()->route('profile')->with('pesan','Data Berhasil disimpan');
    }

    public function edit($id)
    {
        if(!$this->Profile->detailData($id)){
            abort(404);
        }
        $data = [
            'profile' => $this->Profile->detailData($id),
        ];
        return view('admin.profile.v_editprofile',$data);
    }

    public function update($id)
    {
        Request()->validate([
            'nama' => 'required',
            'judul_konten' => 'required',
            'konten' => 'required',
            'foto_profil' => 'mimes:jpg,jpeg,png',
        ],[
            'nama.required'=> 'Nama wajib diisi !!!',
            'judul_konten.required'=> 'Judul konten wajib diisi !!!',
            'konten.required'=> 'konten wajib diisi !!!',
           
        ]);

        if (Request()->foto_profil <> "") {
            $file = Request()->foto_profil;
            $fileName = Request()->nama .'.'. $file->extension();
            $file->move(public_path('img/foto_profile'), $fileName);
     
             $data = [
                 'nama' => Request()->nama,
                 'judul_konten' => Request()->judul_konten,
                 'konten' => Request()->konten,
                 'foto_profil' =>  $fileName,
             ];
     
             $this->Profile->editData($id,$data);
        }else {
            $data = [
                'nama' => Request()->nama,
                'judul_konten' => Request()->judul_konten,
                'konten' => Request()->konten,
              
               
            ];
            $this->Profile->editData($id,$data);
        }

      
         return redirect()->route('profile')->with('pesan','Data Berhasil Update');
    }

    public function delete($id)
    {
        //HAPUS FOTO
        $profile = $this->Profile->detailData($id);
        if ($profile->foto_profil <>"") {
            unlink(public_path('img/foto_profile').'/'.$profile->foto_profil);
        }
        $this->Profile->deleteData($id);
         return redirect()->route('profile')->with('pesan','Data Berhasil di Hapus');

    }

}
