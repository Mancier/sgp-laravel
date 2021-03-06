<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $fillable=
    [
        'nome',
        'clientes_id',
        'processos_id',
        'caminho'
    ];

    public function cliente(){
        return $this->hasMany('App\Clientes', 'clientes_id');
    }

    public function processos(){
        return $this->belongsTo('App\Processos', 'processos_id');    
    }
}
