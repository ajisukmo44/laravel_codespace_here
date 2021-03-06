<?php

namespace App\Http\Controllers\API;

use App\Space;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SpaceController extends Controller
{
    public function getSpaces(Request $request)
    {
        $space = new Space();
        return $space->getSpaces($request->lat, $request->lng, $request->rad)->get();
    }
}
