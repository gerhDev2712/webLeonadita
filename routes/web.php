<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController as User;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Ruta raíz, se encarga ya sea de redirigir a welcome en caso de que el usuario no esté autenticado
// o a home en caso de que el usuario lo esté
Route::get('/', function () {

    return view('Inicio');

    /*if(!Auth::check()){
        return view('welcome');
    }

    $usuario = User::find(Auth::id());
    return view('home',['usuario'=>$usuario]);*/

})->name('index');

Auth::routes();

//Ruta encargada de redirigir a home (default creada por Laravel)
Route::get('/dashboard',['uses'=>'DashboardController@index','as'=>'dashboard']);

//Ruta encargada de realizar el proceso de autenticacion
Route::post('/login',['uses'=>'Auth\LoginController@login','as'=>'login']);
Route::post('/register',['uses'=>'Auth\RegisterController@register','as'=>'register']);

/*Route::get('/users',function(){
    $users = User::get();
    return $users;
})->name('users');*/

Route::get('/users',['uses'=>'UserController@index'])->name('users');

Route::resource('/usuarios', 'UsersController')->middleware('auth');