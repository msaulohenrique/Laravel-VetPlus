<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Permissao extends Model
{
    protected $table = 'usuarios_permissoes';

    protected $fillable = [
        'usuario_id',
        'cargo_id'
    ];

    public $timestamps = false;

    public function cargo() {
        return $this->belongsTo(\App\Models\Cargo::class, 'cargo_id');
    }

    public function user() {
        return $this->belongsTo(\App\Models\User::class, 'usuario_id');
    }
}
