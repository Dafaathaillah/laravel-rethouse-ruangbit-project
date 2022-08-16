<?php

namespace App\Http\Controllers;
use App\Models\Agency;
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

    public function show($id)
    {
    //menampilkan detail data dengan menemukan/berdasarkan id user
        $agency = Agency::find($id);
        return view('admin.agency.detail', compact('agency'));
    }

    public function create()
    {
        return view('admin.agency.create');
    }

    public function store(Request $request)
    {
    //melakukan validasi data
        $request->validate([
            'name' => 'required',        
        ]);
        //fungsi eloquent untuk menambah data
        Agency::create($request->all());
        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('admin.agency.index')
        ->with('success', 'Agency Create Successfully');
    }

    public function edit($id)
    {
        //menampilkan detail data dengan menemukan berdasarkan id user untuk diedit
        $agency = DB::table('agency')->where('id', $id)->first();;
        return view('admin.agency.edit', compact('agency'));
    }
    
    public function update(Request $request, $id)
    {
        //melakukan validasi data
        $request->validate([
            'name' => 'required',        
            // 'agent_status' => 'required',
        ]);
        //fungsi eloquent untuk mengupdate data inputan kita
        Agency::find($id)->update($request->all());
        //jika data berhasil diupdate, akan kembali ke halaman utama
        return redirect()->route('admin.agency.index')->with('success', 'Agency Update Successfully!');;
        }
        
        public function destroy( $id)
        {
        //fungsi eloquent untuk menghapus data
        Agency::find($id)->delete();
        return redirect()->route('admin.agency.index')->with('success', 'Agency Destroy Successfully!');
    }
}
