<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;

class ElementCategory extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 'parent_id', 'name', 'slug', 'title', 'subtitle', 'order' ];

    public function elementCategory_to_elementProduct()
    {
        return $this->hasMany(ElementProduct::class,'element_category_id','id');
    }

    public static function getColumnNames()
    {
        return Schema::getColumnListing((new self)->getTable());
    }
}
