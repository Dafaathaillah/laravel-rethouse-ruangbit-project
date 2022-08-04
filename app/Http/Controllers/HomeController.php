<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function save(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required|min:5|'
        ]);

        $admin = new Admin;
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->password = $request->password;
        $save = $admin->save();

        if ($save) {
            return back()->with('success', 'New User has been succesfuly');
        } else {
            return back()->with('fail', 'Something wrong, try again later');
        }
        
    }
}
