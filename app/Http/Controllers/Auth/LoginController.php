<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function admin(Request $request) {
        return view('admin.login');
    }

    public function adminAction(Request $request) {
        $email = $request->get('email');
        $password = $request->get('password');

        if (Auth::guard('admin')->attempt(['email' => $email, 'password' => $password])) {
            $user = User::where('email', $email)->first();
            if ($user->hasRole('admin')) {
                Auth::guard('admin')->login($user);
                return response()->redirectTo('/admin');
            } else {
                return response()->redirectTo('/admin-login')->with('error', 'No cuentas con los privilegios necesarios para acceder a este sitio.');
            }
        } else {
            return response()->redirectTo('/admin-login')->with('error', 'Nombre de usuario o contraseña incorrecto');
        }
    }

}
