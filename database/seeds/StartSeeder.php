<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class StartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'nombre_usuario'=>'sin_nombre69',
            'nombres'=>'algunos',
            'apellido_paterno'=>'tiene',
            'apellido_materno'=>'tal vez',
            'email'=>'alguncorreo@correo.com',
            'password'=>Hash::make('12345'),
            'admin'=>0
        ]);

        DB::table('users')->insert([
            'nombre_usuario'=>'rod-alfa98',
            'nombres'=>'Rodrigo',
            'apellido_paterno'=>'Alfaro',
            'apellido_materno'=>'Domínguez',
            'email'=>'rodrigoalfarod@gmail.com',
            'password'=>Hash::make('12345'),
            'admin'=>0
        ]);

        DB::table('users')->insert([
            'nombre_usuario'=>'elCacas3000',
            'nombres'=>'Erick',
            'apellido_paterno'=>'el cacas',
            'apellido_materno'=>'Ramírez',
            'email'=>'soyelcacas@gmail.com',
            'password'=>Hash::make('12345'),
            'admin'=>0
        ]);
    }
}
