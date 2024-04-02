<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public $timestamps = false;

    public function menu(){
        $this->belongsTo(Menu::class);
    }
    public function dataPembelian(){
        $this->belongsTo(DataPembelian::class);
    }
}
