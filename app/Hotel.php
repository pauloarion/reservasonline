<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $fillable = [
        'nome','imagem'
    ];

    public function quartos()
    {
        return $this->hasMany('App\Quarto');
    }

    public function reservas()
    {
        return $this->hasManyThrough('App\Reserva', 'App\Quarto');
    }
}
