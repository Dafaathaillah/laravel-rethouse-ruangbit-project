<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ManageRoleController extends Controller
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
    $role = $role = DB::table('role')->get(); // Mengambil semua isi tabel    
    return view('admin.role.index', compact('role'));    
    }  
}
