<?php

namespace App\Models;

use App\Models\tb_produk;
use App\Models\tb_user;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_pembayaran extends Model
{
    use HasFactory;
    protected $guarded = [];

public function produk()
    {
        return $this->belongsTo(tb_produk::class, 'id_produk','id');
    }
public function user()
    {
        return $this->belongsTo(tb_user::class, 'id_user','id');
    }
}
