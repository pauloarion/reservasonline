<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'roles'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'roles' => 'array',
    ];

    public function pessoa()
    {
        return $this->hasOne('App\Pessoa');
    }

    public function getIsAdminAttribute()
    {
        return self::hasRole(UserRole::ROLE_ADMIN);
    }

    public function getIsGerenteAttribute()
    {
        return self::hasRole(UserRole::ROLE_GERENTE);
    }

    public function getIsFuncionarioAttribute()
    {
        return self::hasRole(UserRole::ROLE_FUNCIONARIO);
    }

    public function getIsHospedeAttribute()
    {
        return self::hasRole(UserRole::ROLE_HOSPEDE);
    }

    public function getIsAgenteAttribute()
    {
        return self::hasRole(UserRole::ROLE_AGENTE);
    }

    public function addRole(string $role)
    {
        $roles = $this->getRoles();
        $roles[] = $role;

        $roles = array_unique($roles);
        $this->setRoles($roles);

        return $this;
    }

    public function setRoles(array $roles)
    {
        $this->setAttribute('roles', $roles);
        return $this;
    }

    public function hasRole($role)
    {
        return in_array($role, $this->getRoles());
    }

    public function hasRoles($roles)
    {
        $currentRoles = $this->getRoles();
        foreach ($roles as $role) {
            if (!in_array($role, $currentRoles)) {
                return false;
            }
        }
        return true;
    }

    public function getRoles()
    {
        $roles = $this->getAttribute('roles');

        if (is_null($roles)) {
            $roles = [];
        }

        return $roles;
    }
}
