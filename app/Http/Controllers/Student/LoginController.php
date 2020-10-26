<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct(){
        $this->middleware('guest:student')->except('logout');
    }

    public function index(){
        return view('student.index', ['url' => 'student']);
    }

    public function studentLogin(Request $request){
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if(Auth::guard('student')->attempt(['email' => $request->email, 'password' => $request->password])) {

            return redirect()->intended('/student/dashboard');
        }
        return back()->withInput($request->only('email', 'remember'))->with('login_error','Email or password is incorrect');
    }

    public function logout(){
        Auth::guard('student')->logout();
        return redirect()->route('student.login');
    }
}