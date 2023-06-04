<?php

namespace App\Models;

use App\Models\tb_pembayaran;
use App\Models\tb_rute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_ekspedisi extends Model
{
    use HasFactory;
    protected $guarded = [];

public function pembayaran()
    {
        return $this->belongsTo(tb_pembayaran::class, 'id_transaksi','id');
    }
public function rute()
    {
        return $this->belongsTo(tb_rute::class, 'id_rute','id');
    }
}