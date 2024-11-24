<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RolesAndPermission extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 'id', 'name', 'slug', 'projects', 'products', 'blog', 'doc', 'user' ];

    public function rolesAndPermisson_to_user()
    {
        return $this->hasMany(User::class,'role_id','id');
    }
}
