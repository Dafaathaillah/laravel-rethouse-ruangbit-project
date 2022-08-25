<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $property = Property::all();
        return view('user.dashboard.dashboard', compact('property'));
    }
}
