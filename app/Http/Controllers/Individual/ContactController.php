<?php

namespace App\Http\Controllers\Individual;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function showContactHeader()
    {
        $contact = Contact::select('header_image', 'header_caption', 'header_body')
        ->find(1);
        return view('pages.contact.header', compact('contact'));
    }


    public function uploadImage($imageFile): string
    { //Move Uploaded File to public folder
        $destinationPath = 'images/uploads/contact/';
        $hashed_image_name = $imageFile->hashName();
        $img_path = $destinationPath.$hashed_image_name;
        $imageFile->move(public_path($destinationPath), $hashed_image_name);

        return $img_path;
    }

    public function updateContactHeader(Request $request)
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

        $contact = Contact::find(1);

        isset($imagePath) ? $contact->header_image = $imagePath : '';
        $contact->header_caption = $request->caption;
        $contact->header_body = $request->body;

        $contact->save();

        toastr()->success('Contact Header Updated');

        return back();
    }


}
