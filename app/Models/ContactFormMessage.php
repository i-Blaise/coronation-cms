<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactFormMessage extends Model
{
    use HasFactory;


    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone_number',
        'request_related',
        'enquiry_related',
        'company_related',
        'message',
        'preferred_date_time'
    ];
}
