<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    use HasFactory;
    protected $table = "tours";
    protected $fillable = [
        "id_destino",
        "nombre",
        "descripcion",
        "precio",
        "dias",
        "reviews",
        "img_fondo",
    ];
}
