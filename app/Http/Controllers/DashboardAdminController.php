<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\User;
use Carbon\Carbon;
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
    public function index()
    {
        $users = User::count();
        $property = Property::count();
        $ads = Property::where('start_ads', '!=' , Null)->count();
        $advertise = Property::select(DB::raw("COUNT(*) as count"))
        ->whereYear("created_at",date('Y'))
        ->groupBy(DB::raw("Month(created_at)"))
        ->pluck('count');
        // dd($advertise);
        return view('admin/dashboard/index', compact('users', 'property', 'ads', 'advertise'));
    }
}
