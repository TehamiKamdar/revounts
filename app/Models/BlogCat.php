<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogCat extends Model
{
    use HasFactory;

     protected $table = 'tblblogcat';

    protected $fillable = [
        'id',
        'name',
        'slug',
        'des',
         'icon',
        'meta_title',
        'meta_des',
        'meta_key'
       
    ];

    public $timestamps = false;
}
