<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keranjang extends Model
{
    use HasFactory;
    private $guarded = ['id'];
    public $timestamps = false;

    public function menu(){
        $this->belongsTo(Menu::class);
    }
    public function dataPembelian(){
        $this->belongsTo(DataPembelian::class);
    }
}
