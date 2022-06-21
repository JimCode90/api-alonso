<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destino extends Model
{
    use HasFactory;
    protected $table = "destinos";
    protected $fillable = [
        "pais",
        "descripcion",
        "img_fondo",
        "img_bandera",
    ];

    public function tours (){
        return $this->hasMany(Tour::class,'id_destino', 'id');
    }
}
