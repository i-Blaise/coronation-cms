<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\ContactFormMessage;
use App\Models\FeedbackMessage;
use Illuminate\Http\Request;

class FormsController extends Controller
{
    public function saveContactFormMessage(Request $request){
        $data = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required|numeric',
            'request_related' => 'nullable',
            'enquiry_related' => 'nullable',
            'company_related' => 'nullable',
            'message' => 'required',
            'preferred_date_time' => 'nullable'
        ]);

        $data = $request->all();
        $message = ContactFormMessage::create($data);
        if($message){
            return [
                'status' => 'Success'
            ];
        }else{
            return [
                'status' => 'Failed',
                'message' => 'Error while saving data'
            ];
        }


    }




    public function saveFeedbackMessage(Request $request){
        $data = $request->validate([
            'rating' => 'required|numeric',
            'likely_to_recommend' => 'required|numeric',
            'feedback' => 'nullable'
        ]);

        $data = $request->all();
        $feedback = FeedbackMessage::create($data);
        if($feedback){
            return [
                'status' => 'Success'
            ];
        }else{
            return [
                'status' => 'Failed',
                'message' => 'Error while saving data'
            ];
        }


    }
}
