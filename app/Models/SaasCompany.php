<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;

class SaasCompany extends Model
{
    use HasFactory;

    /**
     * Get the column names of the table.
     *
     * @return array
     */
    protected $fillable = [ 'user_id', 'saas_id', 'company_name', 'company_slug', 'db_name', 'config' ];
    
}
