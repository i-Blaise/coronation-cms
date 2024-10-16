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

    public function uploadImage($imageFile): string
    { //Move Uploaded File to public folder
        $destinationPath = 'images/uploads/career-insuracne/';
        $hashed_image_name = $imageFile->hashName();
        $img_path = $destinationPath.$hashed_image_name;
        $imageFile->move(public_path($destinationPath), $hashed_image_name);

        return $img_path;
    }

    public function updateCareerseHeader(Request $request)
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

        $career = Career::find(1);

        isset($imagePath) ? $career->header_image = $imagePath : '';
        $career->header_caption = $request->caption;
        $career->header_body = $request->body;

        $career->save();

        toastr()->success('Careers Header Updated');

        return back();
    }
}
