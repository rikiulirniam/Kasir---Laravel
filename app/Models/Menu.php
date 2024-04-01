<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    private $guarded = ['id'];
    public $timestamps = false;

    public function keranjang(){
        $this->hasMany(Detail::class);
    }
}
