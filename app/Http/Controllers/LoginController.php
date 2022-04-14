<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{


    // // public function __construct()
    // {
        // parent::__construct();
        // $this->middleware('guest')->except('actionLogout');
    // }

    public function login()
    {
        $title = 'login admin';
        if (Auth::check()) {
            return redirect('index');
        }else {
            return view('admin.login', compact('title'));

        }

    }

    public function actionLogin(request $request)
    {

        $data = $request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);

        // dd($data);
        if (Auth::Attempt($data)) {

            if (Auth::user()->role=='admin') {
                return redirect()->route('index');
            }elseif (Auth::user()->role=='user') {
                return redirect()->route('index.user');
            }elseif (Auth::user()->role=='hrd') {
                return redirect('hrd');
            }else {
                request()->session()->regenerate();
                // return redirect(RouteServiceProvider::HOME);
                // return redirect()->route('index');
                return redirect('/');
             }


        }else {
            Session::flash('error','email atau password salah');
            return redirect('/');
        }

    }


    public function actionRegistrasi(Request $request)
    {
        $insert = $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:user',
            'password'=>'required|min:3|max:255',
            'role'=>'required'
        ]);
        $insert['password'] = bcrypt($insert['password']);

        $user = User::create($insert);

        if ($user) {
            return redirect()->route('login')->with(['success'=>'pendaftaran success']);
        }

    }


    public function actionLogout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/');
    }
}
