<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;


class LoginController extends Controller
{
    use AuthenticatesUsers;

    // protected $redirectTo = '/home';

   
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function authenticated($request, $user){
        // if($user->hasRole('Super Admin')){
        //     return redirect('/dashboard');
        // } else {
        //     return redirect('/selection');
        // }

        return redirect('/dashboard');

    }
}
