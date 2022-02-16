<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function property()
    {
        $property = Property::latest()->take(10)->get();
        return response()->json([
            'property' => $property
        ]);
    }

    public function getProperty($id)
    {
        $property = Property::find($id);
        return response()->json([
            'property' => $property
        ]);
    }
}
