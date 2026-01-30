<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use function Laravel\Prompts\table;

class Coupons extends Model
{
    protected $table = 'tblcoupon';

    protected $fillable = [
        'id',
        'name',
        'offer',
        'offer_desc',
        'coupon_code',
        'chk_active',
        'expdate',
        'tracking_url',
        'store',
        'featured',
        'exp_chk',
        'Deal',
        'likes',
        'unlikes',
        'used',
        'sort',
        'addbyuser',
        'enterby',
        'popular',
        'new_arrival',
        'slug',
        'heading',
        'page_desc',
        'season',
        'store_feature',
        'season_active',
        'img',
        'featured_deal',
        'old_price',
        'new_price',
        'category',
        'created_at',
        'updated_at',
        'updated_by_at',
        'updated_by',
        'exclusive',
    ];

    public function storeRelation()
    {
        return $this->belongsTo(Stores::class, 'store', 'id');
    }

    public function store()
    {
        return $this->belongsTo(Stores::class, 'store', 'id');
    }
}
