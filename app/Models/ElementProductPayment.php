<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ElementProductPayment extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 'element_product_id', 'user_id', 'paid_amount', 'payment_method', 'transaction_keys', 'date_added', 'account_number', 'status' ];

    public function payment_to_elementProduct()
    {
        return $this->belongsTo(ElementProduct::class,'element_product_id','id');
    }

    public function payment_to_user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function product()
    {
        return $this->belongsTo(ElementProduct::class, 'element_product_id');
    }
}
