<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Producto;
class Cliente extends Model
{
    use HasFactory;
    protected $fillable = ['nomb_cli','correo_cli','dir_cli','tel_cli'];
    
    public function productos(){
        return $this->belongsToMany(Producto::class);
    }
}
