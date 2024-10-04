<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\BOD;
use App\Models\Homepage;
use App\Models\PnS;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function homepage()
    {
        $homepage = Homepage::all();
        return response()->json($homepage);
    }

    public function aboutpage()
    {
        $about = AboutUs::all();
        return response()->json($about);
    }

    public function bod()
    {
        $bod = BOD::all();
        return response()->json($bod);
    }

    public function pns()
    {
        $pns = PnS::all();
        return response()->json($pns);
    }
}
