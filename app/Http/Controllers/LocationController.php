<?php

namespace App\Http\Controllers;

use App\Models\History;
use App\Models\Location;

use Illuminate\Http\Request;
use App\Http\Requests;


class LocationController extends Controller
{
    public function getLocation(Request $request)
    {
        $location = Location::where('user_id', $request->user()->id)->get();
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

        $user_id = $request->user()->id;
        $request->request->add(['user_id' => $user_id]);
        History::create($request->all());
        $location = Location::where('user_id', $user_id)->first();
        if ($location){
            $location->latitude = $request->get("latitude");
            $location->longitude = $request->get("longitude");
            $location->save();
            return response()->json([
                'msg' => 'Location Update successfully'
            ], 201);
        }else{
            Location::create($request->all());
            return response()->json([
                'msg' => 'Location Create successfully'
            ], 201);
        }

    }
}
