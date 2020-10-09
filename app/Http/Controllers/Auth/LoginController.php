<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{


    use AuthenticatesUsers;

    protected function authenticated(Request $request, $user)
{
    if($user->role_id==1){
        return redirect()->route('administrador.index');
    }else{
        return redirect()->route('cliente.index');



    }
}
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
