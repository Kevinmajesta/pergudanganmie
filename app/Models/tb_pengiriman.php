<?php

namespace App\Models;

use App\Models\tb_ekspedisi;
use App\Models\tb_supir;
use App\Models\tb_pembayaran;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_pengiriman extends Model
{
    use HasFactory;
    protected $guarded = [];

public function pembayaran()
    {
        return $this->belongsTo(tb_pembayaran::class, 'id_transaksi','id');
    }
public function ekspedisi()
    {
        return $this->belongsTo(tb_ekspedisi::class, 'id_resi','id');
    }
    public function supir()
    {
        return $this->belongsTo(tb_supir::class, 'id_supir','id');
    }
}