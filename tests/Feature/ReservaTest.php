<?php

namespace Tests\Feature;

use App\Reserva;
use Carbon\Carbon;
use Tests\TestCase;

class ReservaTest extends TestCase
{

    /** @test */
    public function deveValidarReserva()
    {
        $dados = [
            'data_inicio' => Carbon::createFromDate(2021,9,10),
            'data_fim' => Carbon::createFromDate(2021,9,20),
            'quarto_id' => 1,
            'pessoa_id' => 25,
            'user_id' => 3,
        ];
        $this->assertTrue(Reserva::validar($dados));
    }

    /** @test */
    public function deveInvalidarReserva()
    {
        $dados = [
            'data_inicio' => Carbon::createFromDate(2021,9,10),
            'data_fim' => Carbon::createFromDate(2021,9,20),
            'quarto_id' => 2,
            'pessoa_id' => 25,
            'user_id' => 3,
        ];
        $this->assertFalse(Reserva::validar($dados));
    }

}
