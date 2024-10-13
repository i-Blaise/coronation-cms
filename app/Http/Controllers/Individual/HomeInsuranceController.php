<?php

namespace App\Http\Controllers\Individual;

use App\Http\Controllers\Controller;
use App\Models\HomeInsurance;
use Illuminate\Http\Request;

class HomeInsuranceController extends Controller
{
    public function index()
    {
        $home = HomeInsurance::find(1);
        return view('pages.home_insurance.index', compact('home'));
    }

    public function showHomeHeader()
    {
        $home = HomeInsurance::find(1);
        return view('pages.home_insurance.header', compact('home'));
    }


    public function uploadImage($imageFile): string
    { //Move Uploaded File to public folder
        $destinationPath = 'images/uploads/home-insuracne/';
        $hashed_image_name = $imageFile->hashName();
        $img_path = $destinationPath.$hashed_image_name;
        $imageFile->move(public_path($destinationPath), $hashed_image_name);

        return $img_path;
    }

    public function updateHomeInsuranceHeader(Request $request)
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

        $home = HomeInsurance::find(1);

        isset($imagePath) ? $home->header_image = $imagePath : '';
        $home->header_caption = $request->caption;
        $home->header_body = $request->body;

        $home->save();

        toastr()->success('Home Insurance Header Updated');

        return back();
    }

}
