<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ManageAdsController extends Controller
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
    $ads = $ads = DB::table('advertisements')->get(); // Mengambil semua isi tabel    
    return view('admin.ads.index', compact('ads'));    
    }   
}
