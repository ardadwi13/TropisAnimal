<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Profile extends Model
{
    public function allData()
    {
        return DB::table('tb_profile')->get();
    }
    public function detailData($id)
    {
        return DB::table('tb_profile')->where('id',$id)->first();
    }

    public function addData($data)
    {
        DB::table('tb_profile')->insert($data);
    }

    public function editData($id,$data)
    {
        DB::table('tb_profile')->where('id',$id)->update($data);
    }

    public function deleteData($id)
    {
        DB::table('tb_profile')->where('id',$id)->delete();  
    }
}
