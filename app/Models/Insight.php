<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Insight extends Model
{
    use HasFactory;

    protected $fillable = [
        'category',
        'caption',
        'body',
        'main_image',
        'excerpt',
        'pdf_file'
    ];
}
