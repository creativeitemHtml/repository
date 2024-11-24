<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 'title', 'slug', 'blog_category_id', 'tags', 'details', 'excerpt', 'read_time', 'blogger_id', 'thumbnail', 'banner', 'is_featured', 'visibility', 'likes', 'ability_to_comment', 'meta_title', 'meta_description', 'meta_keywords', 'canonical_url', 'custom_url', 'og_title', 'og_description', 'og_image', 'json_ld', 'created_at', 'update_at' ];

    public function blog_to_blogCategory()
    {
        return $this->belongsTo(BlogCategory::class,'blog_category_id','id');
    }

    public function blog_to_user()
    {
        return $this->belongsTo(User::class,'blogger_id','id');
    }

}
