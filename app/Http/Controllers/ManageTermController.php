<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Term;
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
        return view('admin.term.index', compact('term'));    
    }   

    public function show($id)
    {
    //menampilkan detail data dengan menemukan/berdasarkan id user
        $term = Term::find($id);
        return view('admin.term.detail', compact('term'));
    }

    public function create()
    {
        return view('admin.term.create');
    }

    public function store(Request $request)
    {
    //melakukan validasi data
        $request->validate([
            'name' => 'required',        
        ]);
        //fungsi eloquent untuk menambah data
        Term::create($request->all());
        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('admin.term.index')
        ->with('success', 'Term and Condition Create Successfully');
    }

    public function edit($id)
    {
        //menampilkan detail data dengan menemukan berdasarkan id user untuk diedit
        $term = DB::table('terms')->where('id', $id)->first();;
        return view('admin.term.edit', compact('term'));
    }
    
    public function update(Request $request, $id)
    {
        //melakukan validasi data
        $request->validate([
            'name' => 'required',        
            // 'agent_status' => 'required',
        ]);
        //fungsi eloquent untuk mengupdate data inputan kita
        Term::find($id)->update($request->all());
        //jika data berhasil diupdate, akan kembali ke halaman utama
        return redirect()->route('admin.term.index')->with('success', 'Term and Condition Update Successfully!');;
        }
        
        public function destroy( $id)
        {
        //fungsi eloquent untuk menghapus data
        Term::find($id)->delete();
        return redirect()->route('admin.term.index')->with('success', 'Term and Condition Destroy Successfully!');
    }
}
