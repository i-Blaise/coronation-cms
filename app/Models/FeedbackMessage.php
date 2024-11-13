<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeedbackMessage extends Model
{
    use HasFactory;

    protected $table = 'feedback_message';

    protected $fillable = [
        'rating',
        'likely_to_recommend',
        'feedback'
    ];
}
