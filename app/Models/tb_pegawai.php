<?php

namespace App\Models;

use App\Models\tb_gudang;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_pegawai extends Model
{
    use HasFactory;
    protected $guarded = [];
    
    public function gudang()
    {
        return $this->belongsTo(tb_gudang::class, 'id_gudang','id');
    }
}
