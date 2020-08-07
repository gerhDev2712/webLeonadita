<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Db;

class Usuario extends Model
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

    public function getNombreUsuario(){
        return $this->nombre_usuario;
    }

    public function getNombres(){
        return $this->nombres;
    }

    public function getApellidoP(){
        return $this->apellido_paterno;
    }

    public function getApellidoM(){
        return $this->apellido_materno;
    }

    public function getEmail(){
        return $this->email;
    }

}