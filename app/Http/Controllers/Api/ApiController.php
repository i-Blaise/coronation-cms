<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\BOD;
use App\Models\HomeInsurance;
use App\Models\Homepage;
use App\Models\Insight;
use App\Models\MotorInsurance;
use App\Models\PnS;
use App\Models\TravelInsurance;
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

    public function individualMotorInsurance()
    {
        $motor = MotorInsurance::all();
        return response()->json($motor);
    }

    public function individualTravelInsurance()
    {
        $travel = TravelInsurance::all();
        return response()->json($travel);
    }

    public function individualHomeInsurance()
    {
        $home = HomeInsurance::all();
        return response()->json($home);
    }

    public function fetchPublishedBlogs()
    {
        $data = Insight::where('publish', true)->get();
        return response()->json($data);
    }

    public function fetchPublishedBlogsCards()
    {
        $data = Insight::where('publish', true)
        ->select('caption', 'category', 'main_image', 'excerpt', 'id')
        ->orderBy('created_at', 'desc')
        ->get();
        return response()->json($data);
    }

    public function fetchPublishedBlogsCardsLatestTwo()
    {
        $data = Insight::where('publish', true)
        ->select('caption', 'category', 'main_image', 'excerpt', 'id')
        ->orderBy('created_at', 'desc')
        ->take(2)
        ->get();
        return response()->json($data);
    }
}
