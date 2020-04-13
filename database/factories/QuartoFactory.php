<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Hotel;
use App\Quarto;
use Faker\Generator as Faker;

$factory->define(Quarto::class, function (Faker $faker) {
    return [
        'nome' => "Quarto",
        'categoria' => $faker->randomElement(['standard','executivo','deluxe','solteiro','solteiro_duplo']),
        'imagem' => "q" . rand(1,5) . ".jpeg",
        'quantidade' => 10,
        'created_at' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'updated_at' => $faker->date($format = 'Y-m-d', $max = 'now'),
    ];
});

$factory->state(App\Quarto::class, 'standard', [
    'nome' => 'Standard',
    'categoria' => 'standard',
    'imagem' => "q1.jpeg",
]);

$factory->state(App\Quarto::class, 'executivo', [
    'nome' => 'Executivo',
    'categoria' => 'executivo',
    'imagem' => "q5.jpeg",
]);

$factory->state(App\Quarto::class, 'deluxe', [
    'nome' => 'Deluxe',
    'categoria' => 'deluxe',
    'imagem' => "q4.jpeg",
]);

$factory->state(App\Quarto::class, 'solteiro', [
    'nome' => 'Solteiro',
    'categoria' => 'solteiro',
    'imagem' => "q2.jpeg",
]);

$factory->state(App\Quarto::class, 'solteiro_duplo', [
    'nome' => 'Solteiro Duplo',
    'categoria' => 'solteiro_duplo',
    'imagem' => "q3.jpeg",
]);