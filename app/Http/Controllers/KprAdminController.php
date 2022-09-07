<?php

namespace App\Http\Controllers;

use App\Models\KprAdmin;
use Illuminate\Http\Request;

class KprAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kpradm = KprAdmin::all();
        return view('admin.kpr.index', compact('kpradm'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/kpr/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'logo' => 'required',
            'name' => 'required',
            'suku_bunga' => 'required',
            'tenor_max' => 'required'
        ]);

        $kpradm = new KprAdmin();

        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $ext = $file->getClientOriginalName();
            $file->move('storage\images\kpr', $ext);
            $kpradm->logo = $ext;
        }

        $kpradm->name = $request->input('name');
        $kpradm->suku_bunga = $request->input('suku_bunga');
        $kpradm->tenor_max = $request->input('tenor_max');
        $kpradm->save();
        return redirect()->route('kpr-admin.index')-> with('success', 'KPR Berhasil Ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KprAdmin  $kprAdmin
     * @return \Illuminate\Http\Response
     */
    public function show(KprAdmin $kprAdmin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KprAdmin  $kprAdmin
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kpradm = KprAdmin::find($id);
        return view('admin.kpr.edit', compact('kpradm'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KprAdmin  $kprAdmin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'logo' => 'required',
            'name' => 'required',
            'suku_bunga' => 'required',
            'tenor_max' => 'required'
        ]);

        // $seedsData = $request->all();

        // if ($logo = $request->file('logo')) {
        //     $destinationPath = 'storage\images\logo';
        //     $logo_image = date('YmdHis') . "." . $logo->getClientOriginalExtension();
        //     $logo->move($destinationPath, $logo_image);
        //     $seedsData['logo'] = "$logo_image";
        // }else{
        //     unset($seedsData['logo']);
        // }

        // $logos->update($seedsData);
        $kpradm = KprAdmin::find($id);

        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $ext = $file->getClientOriginalName();
            $file->move('storage\images\kpr', $ext);
            $kpradm->logo = $ext;
        }

        $kpradm->name = $request->input('name');
        $kpradm->suku_bunga = $request->input('suku_bunga');
        $kpradm->tenor_max = $request->input('tenor_max');
        $kpradm->save();
        return redirect()->route('kpr-admin.index')-> with('success', 'KPR Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KprAdmin  $kprAdmin
     * @return \Illuminate\Http\Response
     */
    public function destroy(KprAdmin $kprAdmin)
    {
        //
    }
}
