<?php

namespace Tests\Feature;

use App\Pessoa;
use Tests\TestCase;

class PessoaTest extends TestCase
{
    public function testConnection()
    {
        $this->assertTrue(Pessoa::count() > 0);
    }
}
