<?php

namespace App\Http\Controllers\Institute;

use App\Http\Controllers\Controller;
use App\Models\InstituteMotorInsurance;
use Illuminate\Http\Request;

class MotorInsuranceController extends Controller
{
    public function showHeader()
    {
        $motor = InstituteMotorInsurance::find(1);
        return view('pages.Institute.motor_insurance.header', compact('motor'));
    }

    public function uploadImage($imageFile): string
    { //Move Uploaded File to public folder
        $destinationPath = 'images/uploads/insitute/motor-insurance/';
        $hashed_image_name = $imageFile->hashName();
        $img_path = $destinationPath.$hashed_image_name;
        $imageFile->move(public_path($destinationPath), $hashed_image_name);

        return $img_path;
    }


    public function updateMotorInsuranceHeader(Request $request)
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

        $motor = InstituteMotorInsurance::find(1);

        isset($imagePath) ? $motor->header_image = $imagePath : '';
        $motor->header_caption = $request->caption;
        $motor->header_body = $request->body;

        $motor->save();

        toastr()->success('Motor Insurance Header Updated');

        return back();
    }

}
