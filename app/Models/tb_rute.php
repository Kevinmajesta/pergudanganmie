<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\tb_supir;

class tb_rute extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function supir()
    {
        return $this->belongsTo(tb_supir::class, 'id_supir','id');
    }
}
