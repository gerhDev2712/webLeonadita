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
    }
}
