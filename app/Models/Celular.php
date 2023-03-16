<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Celular extends Model
{
    use HasFactory;

    protected $table = "celulares";
    protected $fillable = [
        'marca',
        'ano',
        'valor',
        'modelo',
        'garantia',
        'descrição',
        'processador',
        'memória ram',
        'sistema operacional',
    ];


}
