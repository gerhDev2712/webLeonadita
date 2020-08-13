<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Http\Controllers\UserController as User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Exception;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nombre_usuario' => ['required', 'string', 'max:255'],
            'nombres' => ['required', 'string', 'max:255'],
            'apellido_paterno' => ['required', 'string', 'max:255'],
            'apellido_materno' => ['string', 'max:255','null'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'admin'=>['required','boolean']
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'nombre_usuario' => $data['nombre_usuario'],
            'nombres' => $data['nombres'],
            'apellido_paterno' => $data['apellido_paterno'],
            'apellido_materno' => $data['apellido_materno'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'admin' => $data['admin']
        ]);
    }

    public function register(Request $request){
        try{
        $data = $request->only('nombre_usuario','nombres','apellido_paterno','apellido_materno','email','password');
        $creating = array('nombre_usuario'=>$data['nombre_usuario'],'nombres'=>$data['nombres'],'apellido_paterno'=>$data['apellido_paterno'],'apellido_materno'=>$data['apellido_materno'],'email'=>$data['email'],'password'=>$data['password'],'admin'=>false);
        $validated = validator($creating);
        if($validated){
            $user = $this->create($creating);
            auth()->login($user,true);
            if($user){
                Session::flash('message','Se ha registrqado e ingresado como usuario exitosamente');
                return redirect()->route('home');
            }
            Session::flash('message','Hubo un error en el registro, favor de llenar correctamente los datos');
            return redirect()->back()->withInput($request->input());
        }
        }catch(Exception $e){
            Session::flash('message','Hubo un error en el registro, favor de llenar correctamente los datos');
            return redirect()->back()->withInput($request->input());
        }
    }
}
