<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{
    use HasFactory;

    protected $fillable = [
        'horaRegreso',
        'permisos_id',
        'firmaRegistro'
    ];

    public function permisos(){
        //return $this->belongsTo(Permisos::class)->select(['id','user_id', 'boleta_id', 'firma']);
        return $this->hasMany(Permisos::class);  
    }
}
