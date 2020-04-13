<?php

namespace App;

use App\Traits\TracksCreatorAndUpdater;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    use TracksCreatorAndUpdater;

    protected $fillable = [
        'identificacao','sobrenome','nome','nascimento','nascimento_decorator','email','telefone','created_by','updated_by'
    ];

    protected $appends = ['eh_idoso'];

    protected $dates = [
        'nascimento',
    ];

    public function setNascimentoDecoratorAttribute($value)
    {
        $this->attributes['nascimento'] = Carbon::createFromFormat(config('app.date_format'), $value)->format(config('app.date_format_db'));
    }

    public function getNascimentoDecoratorAttribute()
    {
        return Carbon::parse($this->attributes['nascimento'])->format(config('app.date_format'));
    }

    public function setIdentificacaoAttribute($value) {
        $this->attributes['identificacao'] = preg_replace( '/[^0-9]/', '', $value);
    }
    
    public function setNomeAttribute($value) {
        $this->attributes['nome'] = strtoupper($value);
    }

    public function setSobrenomeAttribute($value) {
            $this->attributes['sobrenome'] = strtoupper($value);
    }

    public function getEhIdosoAttribute()
    {
        return Carbon::now()->floatDiffInYears($this->attributes['nascimento']) > 60;
    }

    public function getIdadeAttribute()
    {
        return Carbon::parse($this->attributes['nascimento'])->age;
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
