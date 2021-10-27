<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class KelompokpenjualModel extends Model
{
    public function allData()
    {
        return DB::table('tb_kelompokpenjual')->get();
    }

    public function detailData($id_kelompokpenjual)
    {
        return DB::table('tb_kelompokpenjual')->where('id_kelompokpenjual', $id_kelompokpenjual)->first();
    }

    public function addData($data)
    {
        DB::table('tb_kelompokpenjual')->insert($data);
    }

    public function editData($id_kelompokpenjual, $data)
    {
        DB::table('tb_kelompokpenjual')
            ->where('id_kelompokpenjual', $id_kelompokpenjual)
            ->update($data);
    }
    public function deleteData($id_kelompokpenjual)
    {
        DB::table('tb_kelompokpenjual')
            ->where('id_kelompokpenjual', $id_kelompokpenjual)
            ->delete();
    }

}
