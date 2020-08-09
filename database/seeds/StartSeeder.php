<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\User;

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
            'nombre_usuario'=>'gerh2712',
            'nombres'=>'Gerardo',
            'apellido_paterno'=>'Hernandez',
            'apellido_materno'=>'Hernandez',
            'email'=>'prueba@mail.com',
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

        factory(User::class, 20)->create();

        
    }
}
