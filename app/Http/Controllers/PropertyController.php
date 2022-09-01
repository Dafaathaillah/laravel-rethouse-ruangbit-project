<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $property = $property = DB::table('property')->where('name', 'like', '%' . request('search') . '%')->orWhere('street', 'like', '%' . request('search') . '%')->get();
        return view('user.property.property_list', compact('property'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ad_lists = $ad_lists = DB::table('ad_lists')->get();
        $city = $city = DB::table('city')->get();
        $province = $province = DB::table('province')->get();
        $type_property = $type_property = DB::table('type_property')->get();
        return view('user.property.create_property', compact('city','type_property', 'province','ad_lists'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'image' => 'image|file',
            'type_property_id' => 'required',
            'name' => 'required',
            'price' => 'required',
            'status_property' => 'required',
            'street' => 'required',
            'city_id' => 'required',
            'provience_id' => 'required',
            'description' => 'required',
            'ads_id'=>'required',
            'bedroom' => 'required',
            'bathroom' => 'required',
            'garage' => 'required',
            'property_size' => 'required',
            'area' => 'required',
            'features' => 'required',
            'image_transaction' => 'image|file'
            // 'picture' => 'image|file|max:1024',
        ]);
        if ($request->file('image')) {
            $validateData['image'] = $request->file('image')->store('property-images');
        }

        if ($request->file('image_transaction')) {
            $validateData['image_transaction'] = $request->file('image_transaction')->store('transaction-images');
        }

        Property::create($validateData);
        // return view('user.property.property_list');
        return redirect()->route('property.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $property = Property::find($id);
        return view('user.property.property_detail', compact('property'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $property = DB::table('property')->where('id', $id)->first();;
        return view('user.property.property_edit', compact('property'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'type_property_id' => 'required',
            'name' => 'required',
            'price' => 'required',
            'status_property' => 'required',
            'address' => 'required',
            'city_id' => 'required',
            'provience_id' => 'required',
            'description' => 'required',
        ]);

        Property::find($id)->update($request->all());

        return redirect()->route('user.property.index')->with('success', 'Property Edited');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Property::find($id)->delete();
        return redirect()->route('user.property.property_list')->with('success', 'Property Deleted');
    }
}
