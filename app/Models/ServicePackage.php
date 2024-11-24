<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;

class ServicePackage extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 'id', 'name', 'product_id', 'price', 'discounted_price', 'visibility', 'services' ];

    public function servicePackage_to_product()
    {
        return $this->belongsTo(Product::class,'product_id','id');
    }
}
