<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Boleta extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'fecha',
        'oficina',
        'motivo',
        'mensaje',
        'user_id'
    ];

    public function user(){
        return $this->belongsTo(User::class)->select(['nombres','apellidos','oficina','cargo','dni','email']);
    }
}


