<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 'id', 'topic', 'slug', 'product_id', 'summary', 'thumbnail', 'visibility', 'order' ];

    public function topic_to_product()
    {
        return $this->belongsTo(Product::class,'product_id','id');
    }

    public function topic_to_article()
    {
        return $this->hasMany(Article::class,'topic_id','id')->orderBy('order', 'asc');
    }

}
