<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jogo extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'categoria',
        'ano_criacao',
        'valor'
    ];

    public function categoria(){
        return $this->belongsTo(categoria_id::class);
    }
}
