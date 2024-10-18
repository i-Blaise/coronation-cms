<?php

namespace App\Http\Controllers\Institute;

use App\Http\Controllers\Controller;
use App\Models\MarineInsurance;
use Illuminate\Http\Request;

class MarineInsuranceController extends Controller
{
    public function showHeader()
    {
        $marine = MarineInsurance::find(1);
        return view('pages.Institute.marine_insurance.header', compact('marine'));
    }

    public function uploadImage($imageFile): string
    { //Move Uploaded File to public folder
        $destinationPath = 'images/uploads/insitute/marine-insurance/';
        $hashed_image_name = $imageFile->hashName();
        $img_path = $destinationPath.$hashed_image_name;
        $imageFile->move(public_path($destinationPath), $hashed_image_name);

        return $img_path;
    }


    public function updateMarineInsuranceHeader(Request $request)
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

        $marine = MarineInsurance::find(1);

        isset($imagePath) ? $marine->header_image = $imagePath : '';
        $marine->header_caption = $request->caption;
        $marine->header_body = $request->body;

        $marine->save();

        toastr()->success('Marine Insurance Header Updated');

        return back();
    }
}
