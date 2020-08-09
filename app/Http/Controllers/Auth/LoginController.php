<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Db;
use App\Http\Controllers\UserController as User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Funcion creada con el fin de realizar el login del usuario
     * @param $request = Datos ingresados por el usuario dentro del formulario
     */
    public function login(Request $request){
        
        $email = $request->only('email');
        //Buscamos el usuario que tenga el mismo correo que el ingresado
        $user=User::where('email','=',$email['email'])->first();

        if(empty($user)){
            //Buscamos el usuario que tenga el mismo nombre de usuario que el ingresado
            $user=User::where('nombre_usuario','=',$email['email'])->first();    
        }
        
        if(!empty($user)){

            //Obtenemos contraseña del request
            $password=$request->only('password');
            //Verificamos si la contraseña ingresada es la adecuada
            if(password_verify($password['password'], $user->password)){

                //Autenticamos al usuario
                auth()->login($user,true);
                Session::forget('message');

                //retornamos a home
                return redirect()->route('home');
            }

            //Retornamos a la vista anterior con un mensaje
            Session::flash('message','La constraseña ingresada no corresponde al usuario');
            return redirect()->back()->withInput($request->input());
        }
        
        //Retornamos a la vista anterior con un mensaje
        Session::flash('message','El nombre de usuario o correo ingresado no existe ingresado no existe');
        return redirect()->back()->withInput($request->input());
        
    }
}
