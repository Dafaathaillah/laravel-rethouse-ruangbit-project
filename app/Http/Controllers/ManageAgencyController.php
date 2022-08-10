<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class ManageAgencyController extends Controller
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
    //fungsi eloquent menampilkan data menggunakan pagination
    $agency = $agency = DB::table('agency')->get(); // Mengambil semua isi tabel    
    return view('admin.agency.index', compact('agency'));    
    }   
}
