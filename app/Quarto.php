<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quarto extends Model
{
    protected $fillable = [
        'nome','imagem','categoria','hotel_id','quantidade'
    ];

    public function hotel()
    {
        return $this->belongsTo('App\Hotel');
    }
}
