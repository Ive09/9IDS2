<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etapas extends Model
{
    protected $table="etapas";
    use HasFactory;

    public function servicio()
    {
        return $this->belongsTo(Servicios::class, 'id_servicio');
    }
}
