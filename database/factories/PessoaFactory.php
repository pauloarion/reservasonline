<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Pessoa;
use App\User;
use Faker\Generator as Faker;

$factory->define(Pessoa::class, function (Faker $faker) {
    return [
        'nome' => $faker->firstName,
        'sobrenome' => $faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'identificacao' => $faker->cpf,
        'nascimento' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'email' => $faker->email,
        'user_id' => factory(User::class),
        'created_by' => function (array $pessoa) {
            return App\User::where('name', 'Admin')->first();
         },
        'updated_by' => function (array $pessoa) {
            return App\User::where('name', 'Admin')->first();
         },
        'telefone' => $faker->phoneNumber,      
        'created_at' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'updated_at' => $faker->date($format = 'Y-m-d', $max = 'now'),
    ];
});