<?php

namespace App\Http\Controllers\Individual;

use App\Http\Controllers\Controller;
use App\Models\Career;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    public function showCareersHeader()
    {
        $career = Career::select('header_image', 'header_caption', 'header_body')
        ->find(1);
        return view('pages.careers.header', compact('career'));
    }

    public function showCareersSection1()
    {
        $career = Career::select('sec1_image', 'sec1_caption', 'sec1_body')
        ->find(1);
        return view('pages.careers.section1', compact('career'));
    }

    public function uploadImage($imageFile): string
    { //Move Uploaded File to public folder
        $destinationPath = 'images/uploads/career-insuracne/';
        $hashed_image_name = $imageFile->hashName();
        $img_path = $destinationPath.$hashed_image_name;
        $imageFile->move(public_path($destinationPath), $hashed_image_name);

        return $img_path;
    }

    public function updateCareersHeader(Request $request)
    {
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,webp,JPG|max:10000',
            'caption' => 'required',
            'body' => 'required'
        ]);


        if(!is_null($request->file('image')))
        {
            $imagePath = $this->uploadImage($request->file('image'));
        }

        $career = Career::find(1);

        isset($imagePath) ? $career->header_image = $imagePath : '';
        $career->header_caption = $request->caption;
        $career->header_body = $request->body;

        $career->save();

        toastr()->success('Careers Header Updated');

        return back();
    }


    public function updateCareersSection1(Request $request)
    {
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,webp,JPG|max:10000',
            'caption' => 'required',
            'body' => 'required'
        ]);


        if(!is_null($request->file('image')))
        {
            $imagePath = $this->uploadImage($request->file('image'));
        }

        $career = Career::find(1);

        isset($imagePath) ? $career->sec1_image = $imagePath : '';
        $career->sec1_caption = $request->caption;
        $career->sec1_body = $request->body;

        $career->save();

        toastr()->success('Careers Section 1 Updated');

        return back();
    }


}
