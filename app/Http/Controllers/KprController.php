<?php

namespace App\Http\Controllers;

use App\Models\Kpr;
use Illuminate\Http\Request;

class KprController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user/kpr/kpr_index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kpr  $kpr
     * @return \Illuminate\Http\Response
     */
    public function show(Kpr $kpr)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kpr  $kpr
     * @return \Illuminate\Http\Response
     */
    public function edit(Kpr $kpr)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kpr  $kpr
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kpr $kpr)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kpr  $kpr
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kpr $kpr)
    {
        //
    }
}
