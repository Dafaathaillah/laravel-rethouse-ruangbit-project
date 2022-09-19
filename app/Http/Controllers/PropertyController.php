<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     private $mediaCollection = 'image';

    public function index()
    {
        $property = $property = DB::table('property')
            ->where('name', 'like', '%' . request('search') . '%')
            ->orWhere('street', 'like', '%' . request('search') . '%')
            ->orderByDesc('start_ads')
            ->simplePaginate(6);
        $ldate = Carbon::today();
        return view('user.property.property_list', compact('property', 'ldate'));
    }

    public function lowPrice()
    {
        $property = $property = DB::table('property')
        ->orderByDesc('start_ads')
        ->orderBy('price', 'ASC')
        ->simplePaginate(6);
        $ldate = Carbon::today();
        return view('user.property.property_list', compact('property', 'ldate'));
    }

    public function highPrice()
    {
        $property = $property = DB::table('property')
        ->orderByDesc('start_ads')
        ->orderBy('price', 'DESC')
        ->simplePaginate(6);
        $ldate = Carbon::today();
        return view('user.property.property_list', compact('property', 'ldate'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = $users = DB::table('users')->get();
        $ad_lists = $ad_lists = DB::table('ad_lists')->get();
        $city = $city = DB::table('city')->get();
        $province = $province = DB::table('province')->get();
        $type_property = $type_property = DB::table('type_property')->get();
        $ldate = Carbon::today();
        return view('user.property.create_property', compact('city', 'type_property', 'province', 'ad_lists', 'users', 'ldate'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        //  $request->validate([
        //     'image' => 'image|file',
        //     'type_property_id' => 'required',
        //     'name' => 'required',
        //     'price' => 'required',
        //     'status_property' => 'required',
        //     'street' => 'required',
        //     'city_id' => 'required',
        //     'provience_id' => 'required',
        //     'description' => 'required',
        //     'ads_id'=>'required',
        //     'bedroom' => 'required',
        //     'bathroom' => 'required',
        //     'garage' => 'required',
        //     'property_size' => 'required',
        //     'area' => 'required',
        //     'features' => 'required',
        //     'image_transaction' => 'image|file'
        //     // 'picture' => 'image|file|max:1024',
        // ]);
        // if ($request->file('image')) {
        //     $validateData['image'] = $request->file('image')->store('property-images');
        // }

        // if ($request->file('image_transaction')) {
        //     $validateData['image_transaction'] = $request->file('image_transaction')->store('transaction-images');
        // }

        // Property::create($validateData);
        // // return view('user.property.property_list');

        $request->validate([
            'type_property_id' => 'required',
            'name' => 'required',
            'price' => 'required',
            'status_property' => 'required',
            'street' => 'required',
            'city_id' => 'required',
            'provience_id' => 'required',
            'description' => 'required',
            'ads_id' => 'required',
            'bedroom' => 'required',
            'bathroom' => 'required',
            'garage' => 'required',
            'property_size' => 'required',
            'area' => 'required',
            'features' => 'required',
            'image_transaction' => 'image|file'
        ]);

        $prt = new Property();
        $prt->name = $request->input('name');
        $prt->type_property_id = $request->input('type_property_id');
        $prt->price = $request->input('price');
        $prt->status_property = $request->input('status_property');
        $prt->street = $request->input('street');
        $prt->city_id = $request->input('city_id');
        $prt->provience_id = $request->input('provience_id');
        $prt->description = $request->input('description');
        $prt->ads_id = $request->input('ads_id');
        $prt->bedroom = $request->input('bedroom');
        $prt->bathroom = $request->input('bathroom');
        $prt->garage = $request->input('garage');
        $prt->property_size = $request->input('property_size');
        $prt->area = $request->input('area');
        $prt->features = $request->input('features');

        if ($request->hasFile('image_transaction')) {
            $file = $request->file('image_transaction');
            $ext = $file->getClientOriginalName();
            $file->move('storage/transaction-images', $ext);
            $prt->image_transaction = $ext;
        }

        foreach($request->input('image', []) as $file){
            $prt->addMedia(storage_path('tmp/uploads/'. $file))->toMediaCollection($this->mediaCollection);
        }

        $prt->save();
        return redirect()->route('property.index')->with('success', 'Data Berhasil Ditambah');
    }

    public function storeMedia(Request $request){
        $path = storage_path('tmp/uploads');

        if(!file_exists($path)){
            mkdir($path, 0777, true);
        }

        $file = $request->file('file');
        $name = uniqid() . '_' . trim($file->getClientOriginalName());
        $file->move($path,$name);

        return response()->json([
            'name' => $name,
            'original_name' => $file->getClientOriginalName(),
        ]);
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
        $ldate = Carbon::today();
        return view('user.property.property_detail', compact('property', 'ldate'));
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
