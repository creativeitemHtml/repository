<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 'id', 'name', 'stripe_package_id', 'price', 'discounted_price', 'interval', 'interval_period', 'download_limit', 'visibility', 'feature_list' ];

    public function subscriptions()
    {
        return $this->hasMany(Subscription::class);
    }

}
