<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 'topic_id', 'article', 'slug', 'visibility', 'order', 'product_id'];

    public function article_to_topic()
    {
        return $this->belongsTo(Topic::class, 'topic_id', 'id');
    }

    public function article_to_product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }

}
