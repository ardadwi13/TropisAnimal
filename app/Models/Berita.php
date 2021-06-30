<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Berita extends Model
{
    public function allData()
    {
        return DB::table('tb_berita')->get();
    }

    public function detailData($id)
    {
        return DB::table('tb_berita')->where('id',$id)->first();
    }

    public function addData($data)
    {
        DB::table('tb_berita')->insert($data);
    }

    public function editData($id,$data)
    {
        DB::table('tb_berita')->where('id',$id)->update($data);
    }

    public function deleteData($id)
    {
        DB::table('tb_berita')->where('id',$id)->delete();  
    }

}
