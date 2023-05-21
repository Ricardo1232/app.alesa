<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cliente;

class Producto extends Model
{
    use HasFactory;
    public function clientes()
    {
        return $this->belongsToMany(Cliente::class);
    }

    protected $fillable = ['nomb_prod', 'desc_prod', 'cant_prod', 'prec_prod'];
}
