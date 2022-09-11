<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User_testing;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use DB;

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
            'email'=>'required|email|unique:users',
            'contact'=>'required',
            'password'=>'required|min:5|max:12'
        ]);

        $user = new User_testing;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->contact = $request->contact;
        $user->gender = $request->gender;
        $user->password = Hash::make($request->password);        
        $save = $user->save();

        if ($save) {
            $request->session()->flash('success', 'Registration was successful, Please login!');
            return redirect('/auth/login');
        } else {
            return back()->with('fail', 'Something wrong, try again later');
        }
        
    }

    protected function authenticated(){
        Auth::logoutOtherDevices($currentPassword);
    }
    public function check(Request $request){
        $user = $user = DB::table('users')->get();
        $credentials = $request->validate([            
            'email'=>'required|email',            
            'password'=>'required|min:3|max:12'
        ]);        
        // $userInfo = User_testing::where('email', '=', $request->email)->first();        
        

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            Auth::logoutOtherDevices(request('password'));
            return redirect()->intended('/admin');            
            dd('berhasil login');
        } else {
            return back()->with('fail', 'Login Failed!');
        }                
    }

    public function logout(Request $request){
        Auth::logout();
 
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/');
    }
}