<?php

namespace App\Http\Controllers\Individual;

use App\Http\Controllers\Controller;
use App\Models\TravelInsurance;
use Illuminate\Http\Request;

class TravelInsuranceController extends Controller
{
    public function index()
    {
        $travel = TravelInsurance::find(1);
        return view('pages.travel_insurance.index', compact('travel'));
    }

    public function showTravelHeader()
    {
        $travel = TravelInsurance::find(1);
        return view('pages.travel_insurance.header', compact('travel'));
    }

    public function uploadImage($imageFile): string
    { //Move Uploaded File to public folder
        $destinationPath = 'images/uploads/travel-insuracne/';
        $hashed_image_name = $imageFile->hashName();
        $img_path = $destinationPath.$hashed_image_name;
        $imageFile->move(public_path($destinationPath), $hashed_image_name);

        return $img_path;
    }

    public function updateTravelInsuranceHeader(Request $request)
    {
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'caption' => 'required',
            'body' => 'required'
        ]);


        if(!is_null($request->file('image')))
        {
            $imagePath = $this->uploadImage($request->file('image'));
        }

        $travel = TravelInsurance::find(1);

        isset($imagePath) ? $travel->header_image = $imagePath : '';
        $travel->header_caption = $request->caption;
        $travel->header_body = $request->body;

        $travel->save();

        toastr()->success('Travel Insurance Header Updated');

        return back();
    }
}
