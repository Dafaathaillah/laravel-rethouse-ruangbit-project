<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
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

    public function show($id)
    {
    //menampilkan detail data dengan menemukan/berdasarkan id user
        $role = Role::find($id);
        return view('admin.role.detail', compact('role'));
    }

    public function create()
    {
        return view('admin.role.create');
    }

    public function store(Request $request)
    {
    //melakukan validasi data
        $request->validate([
            'name' => 'required',        
        ]);
        //fungsi eloquent untuk menambah data
        Role::create($request->all());
        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('admin.role.index')
        ->with('success', 'Role Berhasil Ditambahkan');
    }

    public function edit($id)
    {
        //menampilkan detail data dengan menemukan berdasarkan id user untuk diedit
        $role = DB::table('role')->where('id', $id)->first();;
        return view('admin.role.edit', compact('role'));
    }
    
    public function update(Request $request, $id)
    {
        //melakukan validasi data
        $request->validate([
            'name' => 'required',        
            // 'agent_status' => 'required',
        ]);
        //fungsi eloquent untuk mengupdate data inputan kita
        Role::find($id)->update($request->all());
        //jika data berhasil diupdate, akan kembali ke halaman utama
        return redirect()->route('admin.role.index')->with('success', 'User Update Successfully!');;
        }
        
        public function destroy( $id)
        {
        //fungsi eloquent untuk menghapus data
        Role::find($id)->delete();
        return redirect()->route('admin.role.index')->with('success', 'User Destroy Successfully!');
    }
}
