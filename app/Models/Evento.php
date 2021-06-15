<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use HasFactory;

    public $table = 'evento';
    public $timestamps = false;
    protected $guarded = [];


    public function organizador() {
        return $this->belongsTo(User::class, 'user_rut', 'rut');
    }

    public function solicitudes() {
        return $this->hasMany(SolicitudEvento::class, 'evento_id');
    }

}
