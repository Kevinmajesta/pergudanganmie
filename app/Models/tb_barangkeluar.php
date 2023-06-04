<?php

namespace App\Models;

use App\Models\tb_produk;
use App\Models\tb_gudang;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_barangkeluar extends Model

{
    use HasFactory;
    protected $guarded = [];

public function produk()
    {
        return $this->belongsTo(tb_produk::class, 'id_produk','id');
    }
public function gudang()
    {
        return $this->belongsTo(tb_gudang::class, 'id_gudang','id');
    }
}
