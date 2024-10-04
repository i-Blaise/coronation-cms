<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use Illuminate\Http\Request;

class AboutpageController extends Controller
{
    public function index()
    {
        $about = AboutUs::all();
        return response()->json($about);
    }
}
