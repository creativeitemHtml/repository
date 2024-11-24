<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 'id', 'name', 'product_type_id', 'order', 'thumbnail', 'slug', 'sub_title', 'excerpt', 'price', 'purchase_url', 'visibility', 'number_of_purchase', 'directory', 'favicon', 'color_code' ];

    public function product_to_productType()
    {
        return $this->belongsTo(ProductType::class,'product_type_id','id');
    }

    public function product_to_topic()
    {
        return $this->hasMany(Topic::class,'product_id','id')->orderBy('order', 'asc');
    }

    public function product_to_article()
    {
        return $this->hasMany(Article::class,'product_id','id');
    }

    public function product_to_service_package()
    {
        return $this->hasMany(ServicePackage::class,'product_id','id');
    }

    public function product_to_service()
    {
        return $this->hasMany(Service::class,'product_id','id');
    }

}
