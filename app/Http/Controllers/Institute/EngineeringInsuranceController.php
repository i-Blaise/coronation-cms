<?php

namespace App\Http\Controllers\Institute;

use App\Http\Controllers\Controller;
use App\Models\EngineeringInsurance;
use Illuminate\Http\Request;

class EngineeringInsuranceController extends Controller
{
    public function showHeader()
    {
        $eng = EngineeringInsurance::find(1);
        return view('pages.Institute.eng_insurance.header', compact('eng'));
    }

    public function uploadImage($imageFile): string
    { //Move Uploaded File to public folder
        $destinationPath = 'images/uploads/insitute/eng-insurance/';
        $hashed_image_name = $imageFile->hashName();
        $img_path = $destinationPath.$hashed_image_name;
        $imageFile->move(public_path($destinationPath), $hashed_image_name);

        return $img_path;
    }


    public function updateEngineeringInsuranceHeader(Request $request)
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

        $eng = EngineeringInsurance::find(1);

        isset($imagePath) ? $eng->header_image = $imagePath : '';
        $eng->header_caption = $request->caption;
        $eng->header_body = $request->body;

        $eng->save();

        toastr()->success('Engineering Insurance Header Updated');

        return back();
    }

}
