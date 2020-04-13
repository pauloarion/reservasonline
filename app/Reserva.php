<?php

namespace App;

use Exception;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    protected $fillable = [
        'data_fim','data_inicio','quarto_id','pessoa_id','user_id',
    ];

    protected $dates = [
        'data_fim','data_inicio',
    ];

    public static function validar($data)
    {
        $quarto = Quarto::find($data["quarto_id"]);
        $reservas = Reserva::where('quarto_id', $data["quarto_id"])->get();
        if(is_null($data["data_inicio"])){throw new Exception('Data inicial obrigatória.');}
        if(is_null($data["data_fim"])){throw new Exception('Data final obrigatória.');}
        if(!is_null($reservas) && !empty($reservas))
        {
            $inicio = $data["data_inicio"];
            while ($inicio <= $data["data_fim"]) {
                $filtered = $reservas->filter(function ($value, $key) use ($inicio) {
                    return $value->data_inicio <= $inicio && $value->data_fim >= $inicio;
                });
                if($filtered->count() >= $quarto->quantidade)
                {
                    return false;
                }
                $inicio->addDay();
            }
        }
        return true;
    }
    
    /**Quarto de hotel reservado. */
    public function quarto()
    {
        return $this->belongsTo('App\Quarto');
    }

    /**Hóspede da reserva. */
    public function pessoa()
    {
        return $this->belongsTo('App\Pessoa');
    }

    /**Usuário criador da reserva. */
    public function usuario()
    {
        return $this->belongsTo('App\User');
    } 
}
