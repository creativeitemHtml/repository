<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 'id', 'product_id', 'ad_dimension_id', 'title', 'short_description', 'link_to_click', 'ad_image', 'ad_type', 'status' ];

    public function ad_to_product()
    {
        return $this->belongsTo(Product::class,'product_id','id');
    }

    public function ad_to_adDimension()
    {
        return $this->belongsTo(AdDimesion::class,'ad_dimension_id','id');
    }
}
