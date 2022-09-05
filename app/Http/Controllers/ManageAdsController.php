<?php

namespace App\Http\Controllers;

use App\Models\Ads;
use App\Models\Property;
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
    $ads = Property::simplePaginate(7); // Mengambil semua isi tabel
    return view('admin.ads.index', compact('ads'));
    }

    public function edit($id)
    {
        $ads = Property::find($id);
        return view('admin.ads.edit', compact('ads'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'start_ads' => 'required',
            'end_ads' => 'required'
        ]);
        $ads = Property::find($id);


        $ads->start_ads = $request->input('start_ads');
        $ads->end_ads = $request->input('end_ads');
        $ads->update();
        return redirect()->route('admin.ads.index')-> with('success', 'Ads Berhasil Ditambah');
    }

}
