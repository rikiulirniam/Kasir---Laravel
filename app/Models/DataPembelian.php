<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPembelian extends Model
{
    use HasFactory;
    private $guarded = ['id'];
    public $timestamps = false;

    public function detail(){
        $this->hasMany(Detail::class);
    }
}
