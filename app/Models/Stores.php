<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stores extends Model
{
    protected $table = 'tblstores';

    protected $fillable = [
        'id',
        'name',
        'long_desc',
        'store_url',
        'direct_url',
        'tracking_url',
        'meta',
        'meta_des',
        'meta_key',
        'meta_date',
        'img',
        'img_alt',
        'network',
        'Category',
        'featured',
        'for_sitemap',
        'season',
        'enterby',
        'status',
        'short_desc',
        'publish_date',
        'top_sort',
        'top',
        'views',
        'trending',
        'facebook',
        'pinterest',
        'twitter',
        'instagram',
        'youtube',
        'google',
        'android',
        'ios',
        'amp_meta_desc',
        'created_at',
        'banner_img',
        'updated_at',
        'updated_by',
        'updated_by_at',
        'no_coupons'
    ];
}
