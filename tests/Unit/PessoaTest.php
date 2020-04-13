<?php

namespace Tests\Unit;

use App\Pessoa;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;

class PessoaTest extends TestCase
{
    /** @test */
    public function deveRemoverSimbolosNaoNumericosNaIdentificacao()
    {               
        Auth::shouldReceive('check')->andReturn(false);
        $pessoa = new Pessoa;
        $pessoa->identificacao = "040.365.256.58";
        $this->assertEquals("04036525658",$pessoa->identificacao);
    }

    /** @test */
    public function deveDeixarEmMaiusculoONome()
    {               
        Auth::shouldReceive('check')->andReturn(false);
        $pessoa = new Pessoa;
        $pessoa->nome = "Pedro";
        $this->assertEquals("PEDRO",$pessoa->nome);
    }

    /** @test */
    public function deveDeixarEmMaiusculoOSobrenome()
    {               
        Auth::shouldReceive('check')->andReturn(false);
        $pessoa = new Pessoa;
        $pessoa->sobrenome = "Silva";
        $this->assertEquals("SILVA",$pessoa->sobrenome);
    }

    /** @test */
    public function ehIdosoDeveRetornarTrueSeMaiorIgualA60Anos()
    {               
        Auth::shouldReceive('check')->andReturn(false);
        $pessoa = new Pessoa;
        $pessoa->nascimento = Carbon::now()->subYear(60);
        $this->assertTrue($pessoa->eh_idoso);
    }

    /** @test */
    public function ehIdosoDeveRetornarFalseSeMenor60Anos()
    {               
        Auth::shouldReceive('check')->andReturn(false);
        $pessoa = new Pessoa;
        $pessoa->nascimento = Carbon::now()->subYear(59);
        $this->assertFalse($pessoa->eh_idoso);
    }
}
