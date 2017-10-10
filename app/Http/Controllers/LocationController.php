<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;
use App\Http\Requests;


class LocationController extends Controller
{
    public function getLocation(Request $request)
    {
        $location = Location::where('user_id', $request->user()->id)->latest()->first();
        //dd($request->user()->id);
        if ($location) {
            return response()->json($location);
        } else {
            return response()->json([
                'msg' => 'error',
                'Location' => 'Location Not Found'
            ], 404);
        }

    }

    public function storeLocation(Request $request)
    {
        $request->request->add(['user_id' => $request->user()->id]);
        if (Location::create($request->all())) {
            return response()->json([
                'msg' => 'Location Create successfully'
            ], 201);
        } else {
            return response()->json([
                'msg' => 'error',
                'error' => 'Location cannot create'
            ], 400);
        }

    }
}
