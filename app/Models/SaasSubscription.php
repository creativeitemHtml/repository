<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaasSubscription extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'package_id',
        'price',
        'payment_method',
        'transaction_keys',
        'expiry',
        'upgrade_from_package_id',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function package()
    {
        return $this->belongsTo(PricingPackage::class, 'package_id');
    }
}
