<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 'id', 'name', 'slug' ];

    public function tag_to_elementProduct()
    {
        return ElementProduct::whereRaw("FIND_IN_SET(?, tag_ids)", [$this->id])->get();
    }
}
