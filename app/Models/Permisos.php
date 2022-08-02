<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permisos extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'boleta_id',
        'firma'
    ];

    public function boletas(){
        return $this->belongsTo(Boleta::class)->select(['nombres','oficina','fecha','hora_inicio','hora_final','motivo','mensaje','user_id']);
    }

    public function registros()
    {
        return $this->hasMany(Registro::class);
    }
}
