<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Models\Cliente;
use App\Models\Categoria;

class Producto extends Model
{
    use HasFactory;
    use SoftDeletes;
    public function clientes()
    {
        return $this->belongsToMany(Cliente::class);
    }

    protected $fillable = ['nomb_prod', 'desc_prod', 'cant_prod', 'prec_prod'];
}
