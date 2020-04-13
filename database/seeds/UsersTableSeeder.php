<?php

use App\Pessoa;
use App\User;
use App\UserRole;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $dados = [
            'name' => "Admin",
            'email' => "admin@mail.com",
            'password' => bcrypt("1"),
            'roles' => array(UserRole::ROLE_ADMIN),
        ];
        if (User::where('email', '=', $dados['email'])->count()) {
            $usuario = User::where('email', '=', $dados['email'])->first();
            $usuario->update($dados);
            echo "Usuario Alterado!";
        } else {
            User::create($dados);
            echo "Usuario Criado!";
        }

        $dados = [
            'name' => "Gerente",
            'email' => "gerente@mail.com",
            'password' => bcrypt("1"),
            'roles' => array(UserRole::ROLE_GERENTE),
        ];
        if (User::where('email', '=', $dados['email'])->count()) {
            $usuario = User::where('email', '=', $dados['email'])->first();
            $usuario->update($dados);
            echo "Usuario Alterado!";
        } else {
            User::create($dados);
            echo "Usuario Criado!";
        }

        $dados = [
            'name' => "Funcionario",
            'email' => "funcionario@mail.com",
            'password' => bcrypt("1"),
            'roles' => array(UserRole::ROLE_FUNCIONARIO),
        ];
        if (User::where('email', '=', $dados['email'])->count()) {
            $usuario = User::where('email', '=', $dados['email'])->first();
            $usuario->update($dados);
            echo "Usuario Alterado!";
        } else {
            User::create($dados);
            echo "Usuario Criado!";
        }

        $dados = [
            'name' => "Agente",
            'email' => "agente@mail.com",
            'password' => bcrypt("1"),
            'roles' => array(UserRole::ROLE_AGENTE),
        ];
        if (User::where('email', '=', $dados['email'])->count()) {
            $usuario = User::where('email', '=', $dados['email'])->first();
            $usuario->update($dados);
            echo "Usuario Alterado!";
        } else {
            User::create($dados);
            echo "Usuario Criado!";
        }


        $dados = [
            'name' => "Hospede",
            'email' => "hospede@mail.com",
            'password' => bcrypt("1"),
            'roles' => array(UserRole::ROLE_HOSPEDE),
        ];
        if (User::where('email', '=', $dados['email'])->count()) {
            $usuario = User::where('email', '=', $dados['email'])->first();
            $usuario->update($dados);
            echo "Usuario Alterado!";
        } else {
            User::create($dados);
            echo "Usuario Criado!";
        }

        factory(App\User::class, 50)->create();
    }
}
