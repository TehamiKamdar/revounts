<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $table = 'review';
    protected $fillable = [
        'id',
        'slug',
        'product',
        'store_id',
        'short_desc',
        'long_desc',
        'img',
        'img_alt',
        'country',
        'meta_title',
        'meta_desc',
        'date',
        'views',
        'featured',
        'home',
        'timestamp',
        'editor_choice',
        'product_review',
        'author'
    ];

    public function storeRelation()
    {
        return $this->belongsTo(Stores::class, 'store_id', 'id');
    }

    public function ratingSummary()
{
    return $this->hasMany(ReviewRating::class)
        ->selectRaw('
            review_id,
            COUNT(*) as votes,
            SUM(rate) / COUNT(*) as avg_rating
        ')
        ->groupBy('review_id');
}

}
