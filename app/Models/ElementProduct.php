<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ElementProduct extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 'id', 'product_id', 'title', 'summary', 'description', 'element_category_id', 'sub_category_id', 'price_type', 'price', 'like', 'comment', 'downalod', 'file_size', 'file_types', 'tag_ids', 'thumbnail', 'preview_thumbnails', 'file_3d', 'preview_video', 'file', 'previewUrl' ];

    public function product_to_elementCategory()
    {
        return $this->belongsTo(ElementCategory::class,'element_category_id','id');
    }

    public function product_to_elementSubCategory()
    {
        return $this->belongsTo(ElementCategory::class,'sub_category_id','id');
    }

    public function product_to_tag()
    {
        // Assuming 'tag_ids' is a comma-separated string of tag IDs
        $tagIds = explode(',', $this->tag_ids);
        
        // Use the Tag model to retrieve the tags based on the IDs
        return Tag::whereIn('id', $tagIds)->get();
    }

    public function payments()
    {
        return $this->hasMany(ElementProductPayment::class, 'element_product_id');
    }

    public function subscriptionpayments()
    {
        return $this->hasMany(Subscription::class, 'element_product_id');
    }
    
}
