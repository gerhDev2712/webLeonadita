<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Db;
use Illuminate\Foundation\Auth\User as Authenticatable;

use App\User;

class UserController extends Authenticatable
{
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','nombre_usuario','nombres','apellido_paterno','apellido_materno','admin'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function index(){

        $users = User::get();

        return $users;      

    }


    /**
     * Getter del nombre de usuario
     * @return Nombre de usuario del usuario
     */
    public function getNombreUsuario(){
        return $this->nombre_usuario;
    }

    /**
     * Getter del nombre de usuario
     * @return Nombres del usuario
     */
    public function getNombres(){
        return $this->nombres;
    }

    /**
     * Getter del nombre de usuario
     * @return Apelldio paterno del usuario
     */
    public function getApellidoP(){
        return $this->apellido_paterno;
    }

    /**
     * Getter del nombre de usuario
     * @return Apellido materno del usuario
     */
    public function getApellidoM(){
        return $this->apellido_materno;
    }

    /**
     * Getter del nombre de usuario
     * @return Correo del usuario
     */
    public function getEmail(){
        return $this->email;
    }

}