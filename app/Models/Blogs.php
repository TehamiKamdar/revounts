<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{
    protected $table = 'tblblogpost';
    protected $fillable =[
            "id",
            "name",
            'long_des',
            'url',
            'short_des',
            'image',
            'image_alt',
            'meta_title',
            'meta_des',
            'meta_key',
            'category',
            'publish_date',
            'status',
            'featured',
            'name_your',
            'views',
            'tags',
            'r_store',
            'author'
    ];  

     public function categoryRelation()
    {
        return $this->belongsTo(Category::class, 'category', 'id');
    }
}
