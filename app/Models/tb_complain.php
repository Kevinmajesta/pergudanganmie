<?php

namespace App\Models;

use App\Models\tb_pembayaran;
use App\Models\tb_user;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_complain extends Model
{
    use HasFactory;
    protected $guarded = [];

public function pembayaran()
    {
        return $this->belongsTo(tb_pembayaran::class, 'id_transaksi','id');
    }
public function user()
    {
        return $this->belongsTo(tb_user::class, 'id_user','id');
    }
}
