<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentMilestone extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 'id', 'title', 'project_id', 'service_package_id', 'user_id', 'amount', 'payment_method', 'transaction_keys', 'status' ];

    public function paymentMilestone_to_user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function PaymentMilestone_to_project()
    {
        return $this->belongsTo(Project::class,'project_id','id');
    }

    public function paymentMilestone_to_service()
    {
        return $this->belongsTo(ServicePackage::class,'service_package_id','id');
    }
}
