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


    public function showEngineeringPage()
    {
        $eng = EngineeringInsurance::find(1);
        return view('pages.Institute.eng_insurance.index', compact('eng'));
    }


    public function updateEngInsurance(Request $request)
    {

        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,JPG,webp|max:10000',
            'caption' => 'required',
            'body' => 'required',
            'insurance_body' => 'required',
            'features' => 'required',
        ]);



        if(!is_null($request->file('image')))
        {
            $imagePath = $this->uploadImage($request->file('image'));
        }

        $eng = EngineeringInsurance::find(1);

        $eng->sec1_caption = $request->caption;
        $eng->sec1_body = $request->body;

        if($request->submit == 'plant')
        {
            isset($imagePath) ? $eng->plant_all_risk_image = $imagePath : '';
            $eng->plant_all_risk_body = $request->insurance_body;
            $eng->plant_all_risk_features = $request->features;

        }elseif($request->submit == 'contractors')
        {
            isset($imagePath) ? $eng->contractors_all_risk_image = $imagePath : '';
            $eng->contractors_all_risk_body = $request->insurance_body;
            $eng->contractors_all_risk_features = $request->features;

        }elseif($request->submit == 'machinery')
        {
            isset($imagePath) ? $eng->machinery_breakdown_image = $imagePath : '';
            $eng->machinery_breakdown_body = $request->insurance_body;
            $eng->machinery_breakdown_features = $request->features;

        }elseif($request->submit == 'erection')
        {
            isset($imagePath) ? $eng->erection_all_image = $imagePath : '';
            $eng->erection_all_body = $request->insurance_body;
            $eng->erection_all_features = $request->features;

        }elseif($request->submit == 'computer')
        {
            isset($imagePath) ? $eng->computer_all_risk_image = $imagePath : '';
            $eng->computer_all_risk_body = $request->insurance_body;
            $eng->computer_all_risk_features = $request->features;
        }

        $eng->save();

        toastr()->success('Engineering Insurance Page Updated');

        return back();
    }

}