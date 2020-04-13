<?php

use App\Pessoa;
use App\Quarto;
use App\Reserva;
use Illuminate\Database\Seeder;

class ReservaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dados = [
            'data_inicio' => Carbon\Carbon::createFromDate(2021,9,10),
            'data_fim' => Carbon\Carbon::createFromDate(2021,9,20),
            'quarto_id' => 1,
            'pessoa_id' => 10,
            'user_id' => 3,
        ];
        if (!Reserva::where('quarto_id', '=', $dados['quarto_id'])->count()) {
            Reserva::create($dados);
        }

        $pessoas = Pessoa::all()->random(10);
        foreach ($pessoas as $pessoa) {
            $dados = [
                'data_inicio' => Carbon\Carbon::createFromDate(2021,9,10),
                'data_fim' => Carbon\Carbon::createFromDate(2021,9,20),
                'quarto_id' => 2,
                'pessoa_id' => $pessoa->id,
                'user_id' => 3,
            ];
            Reserva::create($dados);
        } 
        
    }
}
