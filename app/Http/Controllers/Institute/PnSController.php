<?php

namespace App\Http\Controllers\Institute;

use App\Http\Controllers\Controller;
use App\Models\InstitutePns;
use Illuminate\Http\Request;

class PnSController extends Controller
{
    public function showPnSHeader()
    {
        $pns_header = InstitutePns::select('id', 'header_image', 'header_caption', 'header_body')->where('id', 1)->first();
        return view('pages.Institute.pns.header', compact('pns_header'));
    }

    public function uploadImage($imageFile): string
    { //Move Uploaded File to public folder
        $destinationPath = 'images/uploads/pns-institute/';
        $hashed_image_name = $imageFile->hashName();
        $img_path = $destinationPath.$hashed_image_name;
        $imageFile->move(public_path($destinationPath), $hashed_image_name);

        return $img_path;
    }


    public function updatePnSHeader(Request $request)
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
        $pns_header = InstitutePns::find(1);

        isset($imagePath) ? $pns_header->header_image = $imagePath : '';
        $pns_header->header_caption = $request->caption;
        $pns_header->header_body = $request->body;

        $pns_header->save();

        toastr()->success('Products and Solutions Page Header Updated');

        return back();
    }

}
