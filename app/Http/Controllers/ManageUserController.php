<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use DB;

class ManageUserController extends Controller
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
<<<<<<< HEAD
    $user = $user = DB::table('users')->simplePaginate(5); // Mengambil semua isi tabel
    return view('admin.users.index', compact('user'));
    }

=======
    $user = $user = DB::table('users')->get(); // Mengambil semua isi tabel    
    return view('admin.users.index', compact('user'));    
    }        
    
>>>>>>> origin/auth
    public function show($id)
    {
    //menampilkan detail data dengan menemukan/berdasarkan id user
    $user = User::find($id);
    return view('admin.users.detail', compact('user'));
    }
<<<<<<< HEAD

=======
    
>>>>>>> origin/auth
    public function store(Request $request)
    {
    //melakukan validasi data
    $request->validate([
        'name' => 'required',
        'email' => 'required',
<<<<<<< HEAD
        'contact' => 'required',
=======
        'contact' => 'required', 
>>>>>>> origin/auth
        'gender' => 'required',
        'agent_status' => 'required',
    ]);
    //fungsi eloquent untuk menambah data
    User::create($request->all());
    //jika data berhasil ditambahkan, akan kembali ke halaman utama
    return redirect()->route('admin.user.index')
    ->with('success', 'User Berhasil Ditambahkan');
    }

    public function edit($id)
    {
    //menampilkan detail data dengan menemukan berdasarkan id user untuk diedit
    $user = DB::table('users')->where('id', $id)->first();;
    return view('admin.users.edit', compact('user'));
    }
<<<<<<< HEAD

=======
    
>>>>>>> origin/auth
    public function update(Request $request, $id)
    {
    //melakukan validasi data
    $request->validate([
        'name' => 'required',
        'email' => 'required',
<<<<<<< HEAD
        'contact' => 'required',
=======
        'contact' => 'required', 
>>>>>>> origin/auth
        'gender' => 'required',
        // 'agent_status' => 'required',
    ]);
    //fungsi eloquent untuk mengupdate data inputan kita
    User::find($id)->update($request->all());
    //jika data berhasil diupdate, akan kembali ke halaman utama
    return redirect()->route('admin.user.index')->with('success', 'User Update Successfully!');;
    }
<<<<<<< HEAD

=======
    
>>>>>>> origin/auth
    public function destroy( $id)
    {
    //fungsi eloquent untuk menghapus data
    User::find($id)->delete();
    return redirect()->route('admin.user.index')->with('success', 'User Destroy Successfully!');
    }

}
