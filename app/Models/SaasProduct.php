<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;

class SaasProduct extends Model
{
    use HasFactory;

    /**
     * Get the column names of the table.
     *
     * @return array
     */

    protected $fillable = ['name', 'slug', 'order', 'status'];

    public function saas_topics()
    {
        return $this->hasMany(Topic::class, 'product_id', 'id')->where('is_saas', 1)->orderBy('order', 'asc');
    }

    public function saas_articles()
    {
        return $this->hasManyThrough(Article::class, Topic::class, 'product_id', 'topic_id', 'id', 'id')->where('is_saas', 1)->orderBy('order', 'asc');
    }
}
