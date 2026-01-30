<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReviewRating extends Model
{
    use HasFactory;
    protected $table = 'review_ratings';

      public $timestamps = false; // 👈 IMPORTANT
    protected $fillable = [
        'id',
        'rate',
        'review_id',
        'user_ip',
        'created_at'
    ];
}
