<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Models\Property;
use App\Models\User;
use Carbon\Carbon;
=======
>>>>>>> origin/auth
use Illuminate\Http\Request;
use DB;

class DashboardAdminController extends Controller
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
<<<<<<< HEAD
    public function admin()
    {
        $users = User::count();
        $property = Property::count();
        $ads = Property::where('start_ads', '!=' , Null)->count();
        return view('admin/dashboard/index', compact('users', 'property', 'ads'));
    }
=======
    public function index()
    {
    //fungsi eloquent menampilkan data menggunakan pagination    
    return view('admin.dashboard.index');    
    }   
>>>>>>> origin/auth
}
