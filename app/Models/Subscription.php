<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'package_id', 'paid_amount', 'payment_method', 'transaction_keys', 'auto_subscription', 'expire_date', 'date_added', 'account_number', 'status'
    ];

    public function subscription_to_package()
    {
        return $this->belongsTo(Package::class,'package_id','id');
    }

    public function subscription_to_user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function package()
    {
        return $this->belongsTo(Package::class);
    }
}
