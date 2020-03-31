<?php

namespace App\Http\Controllers\Seguridad;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

//***Autor:***Yefry Montero**//
//***Created_At:***01/01/2020***//
//***Update_At:***29/03/2020***//

class LoginController extends Controller
{
    use AuthenticatesUsers;
    protected $redirectTo = '/pqrs/inconformidad';
    private $maxAttempts = 3;
    private $decayMinutes = 20;

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function index()
    {
        return view('seguridad.index');
    }

    protected function authenticated(Request $request, $user)
    {   
        $roles = $user->roles()->get();
        if ($roles->isNotEmpty()) {
            $user->setSession($roles->toArray());
        } else {
            $this->guard()->logout();
            $request->session()->invalidate();
            return redirect('welcome')->withErrors(['error' => 'Este usuario no tiene un rol activo']);
        }
    }
    public function username()
    {
        return 'usuario';
    }
}
