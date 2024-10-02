<?php

namespace App\Http\Controllers\Individual;

use App\Http\Controllers\Controller;
use App\Models\MotorInsurance;
use Illuminate\Http\Request;

class MotorInsuranceController extends Controller
{
    public function index()
    {
        $motor = MotorInsurance::find(1);
        return view('pages.motor_insurance.index', compact('motor'));
    }


    public function uploadImage($imageFile): string
    { //Move Uploaded File to public folder
        $destinationPath = 'images/uploads/motor-insuracne/';
        $hashed_image_name = $imageFile->hashName();
        $img_path = $destinationPath.$hashed_image_name;
        $imageFile->move(public_path($destinationPath), $hashed_image_name);

        return $img_path;
    }


    public function showMotorHeader()
    {
        $motor = MotorInsurance::find(1);
        return view('pages.motor_insurance.header', compact('motor'));
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

        $motor = MotorInsurance::find(1);

        isset($imagePath) ? $motor->header_image = $imagePath : '';
        $motor->header_caption = $request->caption;
        $motor->header_body = $request->body;

        $motor->save();

        toastr()->success('Motor Insurance Header Updated');

        return back();
    }







    public function updateMotorInsurance(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'caption' => 'required',
            'body' => 'required',
            'body1' => 'required',
            'features' => 'required',
        ]);


        if(!is_null($request->file('image')))
        {
            $imagePath = $this->uploadImage($request->file('image'));
        }

        $motor = MotorInsurance::find(1);

        isset($imagePath) ? $motor->sec1_image = $imagePath : '';
        $motor->sec1_caption = $request->caption;
        $motor->sec1_body = $request->body;

        if($request->submit == 'comp')
        {
            $motor->compliance_ins_body = $request->body1;
            $motor->compliance_ins_features = $request->features;

        }elseif($request->submit == 'tpft')
        {
            $motor->tp_fire_theft_body = $request->body1;
            $motor->tp_fire_theft_features = $request->features;

        }elseif($request->submit == 'tpo')
        {
            $motor->tp_only_body = $request->body1;
            $motor->tp_only_features = $request->features;

        }

        $motor->save();

        toastr()->success('Motor Insurance Page Updated');

        return back();
    }
}
