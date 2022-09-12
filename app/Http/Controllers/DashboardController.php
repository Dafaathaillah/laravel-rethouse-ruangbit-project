<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $property = Property::all();
        $ads = Property::where('start_ads', '!=', Null)->get();
        return view('user.dashboard.dashboard', compact('property', 'ads'));
    }
}
