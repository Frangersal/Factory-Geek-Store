<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    //--Funciones de manejo de relaciones--
    public function roles()
    {
        // Relacion ('User'/Usuaro) (Pertenece a muchos / muchos a muchos) ('Role'/Rol)
        return $this->belongsToMany('App\Models\Role', 'roles_users', 'user_id', 'role_id');
    }
    //--Funciones de manejo de roles--
    //Funcion 'Tiene algun rol'
    public function hasAnyRoles($roles){
        //Si el parametro $roles esta en la funcion roles como atributo 'name' retornar true
        if($this->roles()->whereIn('name', $roles)->first()){
            return true;
        }
        //...de lo contrario retornar false
        return false;
    }
    //Si el parametro $roles esta en la funcion roles como atributo 'name' retornar true
    public function hasRole($role){
        if($this->roles()->where('name', $role)->first()){
            return true;
        }
        //...de lo contrario retornar false
        return false;
    }
}
