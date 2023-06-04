<?php

namespace App\Models;

use App\Models\tb_pegawai;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_outlet extends Model
{
    use HasFactory;
    protected $guarded = [];

public function pegawai()
    {
        return $this->belongsTo(tb_pegawai::class, 'id_pegawai','id');
    }
}