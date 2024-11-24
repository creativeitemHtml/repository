<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ElementProductComment extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 'element_product_id', 'comment_id', 'user_id', 'comment', 'likes' ];

    public function elementComment_to_elementProduct()
    {
        return $this->belongsTo(ElementProduct::class,'element_product_id','id');
    }

    public function elementComment_to_user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
}
