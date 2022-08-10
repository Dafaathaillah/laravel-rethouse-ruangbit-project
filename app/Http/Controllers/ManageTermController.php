<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ManageTermController extends Controller
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
    $term = $term = DB::table('terms')->get(); // Mengambil semua isi tabel    
    return view('admin.terms.index', compact('term'));    
    }   
}
