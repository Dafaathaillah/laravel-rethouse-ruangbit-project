<?php

namespace App\Http\Controllers;

use App\Models\ManageLogo;
use Illuminate\Http\Request;

class ManageLogoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $logo = ManageLogo::simplePaginate(3);
        return view('admin.logo.index', compact('logo'));
        // var_dump($logo);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.logo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->file('logo')->store('images/logo');
        // ddd(request());
        // $request->validate([
        //     'name' => 'required',
        //     'logo' => 'required',
        // ]);
        // $id = ManageLogo::create($request->all())->id;
        // $logos = ManageLogo::find($id);
        // $logos->logo = $this->uploadFile($request,'logo');
        // $logos->update();
        // return redirect()->route('logo.index')-> with('success', 'Logo Berhasil Ditambah');

        $logos = new ManageLogo();
        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $ext = $file->getClientOriginalName();
            $file->move('storage\images\logo', $ext);
            $logos->logo = $ext;
        }

        $logos->name = $request->input('name');
        $logos->save();
        return redirect()->route('logo.index')-> with('success', 'Logo Berhasil Ditambah');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ManageLogo::find($id)->delete();
        return redirect()->route('logo.index')->with('success', 'User Destroy Successfully!');
    }

    public function uploadFile(Request $request,$oke)
    {
            $result ='';
            $file = $request->file($oke);
            $name = $file->getClientOriginalName();
            // $tmp_name = $file['tmp_name'];

            $extension = explode('.',$name);
            $extension = strtolower(end($extension));

            $key = rand().'-'.$oke;
            $tmp_file_name = "{$key}.{$extension}";
            $tmp_file_path = $name;
            $file->move($tmp_file_path,$tmp_file_name);
            // if(move_uploaded_file($tmp_name, $tmp_file_path)){
            $result = url('images/logo/').'/'.$tmp_file_name;
            // }
        return $result;
    }
}
