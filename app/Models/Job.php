<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
  
    protected $fillable = [
        'job_name',
        'company_name',
        'job_description',
        'salary',
        'terms_condition',
        'location',
        'status',
        'education',
        'experience',
        'responsibilities',
        'skills',
        'company_benifit',
        'workplace',




    ];
}
