<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 'id', 'user_id', 'title', 'description', 'attachment_name', 'attachment', 'budget_estimation', 'timeline', 'project_price', 'project_deadline', 'status', 'completion_progress' ];

    public function project_to_user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function project_MilestonePayments()
    {
        return $this->hasMany(PaymentMilestone::class, 'project_id', 'id');
    }

    public function getTotalPaidAmount()
    {
        return $this->project_MilestonePayments()
                    ->where('status', 1)
                    ->sum('amount');
    }
}
