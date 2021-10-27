<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\support\Facades\DB;

class PenjualModel extends Model
{
    public function allData()
    {
        return DB::table('tb_penjual')
            ->leftjoin('tb_kelompokpenjual', 'tb_kelompokpenjual.id_kelompokpenjual', '=', 'tb_kelompokpenjual.id_kelompokpenjual')
            ->get();
    }

}
