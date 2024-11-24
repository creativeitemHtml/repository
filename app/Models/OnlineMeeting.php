<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OnlineMeeting extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 'id', 'project_id', 'customer_id', 'medium', 'link', 'timestamp' ];

    public function onlineMeetings_to_user()
    {
        return $this->belongsTo(User::class,'customer_id','id');
    }

    public function onlineMeetings_to_project()
    {
        return $this->belongsTo(Project::class,'project_id','id');
    }
}
