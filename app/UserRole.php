<?php

namespace App;

class UserRole {

    const ROLE_ADMIN = 'ROLE_ADMIN';
    const ROLE_GERENTE = 'ROLE_GERENTE';
    const ROLE_FUNCIONARIO = 'ROLE_FUNCIONARIO';
    const ROLE_AGENTE = 'ROLE_AGENTE';
    const ROLE_HOSPEDE = 'ROLE_HOSPEDE';
   
    
    public static function getRoleList()
    {
        return [
            static::ROLE_ADMIN =>'Administrador',
            static::ROLE_GERENTE => 'Gerente',
            static::ROLE_FUNCIONARIO => 'Funcionário',
            static::ROLE_AGENTE => 'Agente de Turismo',
            static::ROLE_HOSPEDE => 'Hóspede',
        ];
    }

    public static function getAdminRoleList($user)
    {
        if ($user->is_admin){
            return static::getRoleList();
        }

        if ($user->is_gerente){
            return array_filter(static::getRoleList(), function($k) {
                return $k == static::ROLE_FUNCIONARIO || $k == static::ROLE_AGENTE || $k == static::ROLE_HOSPEDE;
            }, ARRAY_FILTER_USE_KEY);
        }

        if ($user->is_funcionario){
            return array_filter(static::getRoleList(), function($k) {
                return $k == static::ROLE_AGENTE || $k == static::ROLE_HOSPEDE;
            }, ARRAY_FILTER_USE_KEY);
        }
    }
}