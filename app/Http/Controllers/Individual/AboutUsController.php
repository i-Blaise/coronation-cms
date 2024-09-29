<?php

namespace App\Http\Controllers\Individual;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{

    public function index()
    {
        $about_header = AboutUs::select('id', 'header_image', 'header_caption', 'header_body')->where('id', 1)->first();
        return view('pages.aboutpage.header', compact('about_header'));
    }

    public function uploadImage($imageFile): string
    { //Move Uploaded File to public folder
        $destinationPath = 'images/uploads/aboutus/';
        $hashed_image_name = $imageFile->hashName();
        $img_path = $destinationPath.$hashed_image_name;
        $imageFile->move(public_path($destinationPath), $hashed_image_name);

        return $img_path;
    }


    public function updateAboutHeader(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'caption' => 'required',
            'body' => 'required'
        ]);

        // dd($request->file('image'));
        if(!is_null($request->file('image')))
        {
            $imagePath = $this->uploadImage($request->file('image'));
        }
        $about_header = AboutUs::find(1);

        isset($imagePath) ? $about_header->header_image = $imagePath : '';
        $about_header->header_caption = $request->caption;
        $about_header->header_body = $request->body;

        $about_header->save();

        toastr()->success('About Us Page Header Updated');

        return back();
    }





       //  Section 1

       public function aboutSec1()
       {
           $about = AboutUs::select('id', 'sec1_caption_left', 'sec1_body_left', 'sec1_caption_right', 'sec1_body_right')->where('id', 1)->first();
           return view('pages.aboutpage.section1', compact('about'));
       }


    public function updateSection1(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'caption_right' => 'required',
            'body_right' => 'required',
            'caption_left' => 'required',
            'body_left' => 'required'
        ]);

        $about_header = AboutUs::find(1);

        $about_header->sec1_caption_left = $request->caption_right;
        $about_header->sec1_body_left = $request->body_right;
        $about_header->sec1_caption_right = $request->caption_left;
        $about_header->sec1_body_right = $request->body_left;

        $about_header->save();

        toastr()->success('About Us Page Section 1 Updated');

        return back();
    }



    //  Section 2

    public function aboutSec2()
    {
        $about = AboutUs::select('id', 'sec2_image', 'sec2_caption', 'sec2_body')->where('id', 1)->first();
        return view('pages.aboutpage.section2', compact('about'));
    }


    public function updateSection2(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'caption' => 'required',
            'body' => 'required'
        ]);

        if(!is_null($request->file('image')))
        {
            $imagePath = $this->uploadImage($request->file('image'));
        }

        $about_header = AboutUs::find(1);

        isset($imagePath) ? $about_header->sec2_image = $imagePath : '';
        $about_header->sec2_caption = $request->caption;
        $about_header->sec2_body = $request->body;

        $about_header->save();

        toastr()->success('About Us Page Section 2 Updated');

        return back();
    }





        //  Section 3

    public function aboutSec3()
    {
        $about = AboutUs::select('id', 'sec3_image', 'sec3_caption', 'sec3_body')->where('id', 1)->first();
        return view('pages.aboutpage.section3', compact('about'));
    }


    public function updateSection3(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'caption' => 'required',
            'body' => 'required'
        ]);

        if(!is_null($request->file('image')))
        {
            $imagePath = $this->uploadImage($request->file('image'));
        }

        $about_header = AboutUs::find(1);

        isset($imagePath) ? $about_header->sec3_image = $imagePath : '';
        $about_header->sec3_caption = $request->caption;
        $about_header->sec3_body = $request->body;

        $about_header->save();

        toastr()->success('About Us Page Section 2 Updated');

        return back();
    }







}
