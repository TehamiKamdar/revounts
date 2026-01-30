<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'tblcategory';

    protected $fillable = [
        'id',
        'name',
        'parent',
        'slug',
        'des',
        'meta',
        'meta_des',
        'featured',
        'update_date',
        'image',
        'icon'
    ];

    public $timestamps = false;
}
