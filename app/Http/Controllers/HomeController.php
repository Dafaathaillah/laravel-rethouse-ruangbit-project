<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User_testing;
use Illuminate\Support\Facades\Hash;

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
            'email'=>'required|email|unique:user_testing',
            'contact'=>'required',
            'password'=>'required|min:5|'
        ]);

        $user = new User_testing;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->contact = $request->contact;
        $user->gender = $request->gender;
        $user->password = Hash::make($request->password);        
        $save = $user->save();

        if ($save) {
            return back()->with('success', 'New User has been succesfuly');
        } else {
            return back()->with('fail', 'Something wrong, try again later');
        }
        
    }
}
