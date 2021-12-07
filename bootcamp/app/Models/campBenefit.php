<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class campBenefit extends Model
{
    use HasFactory;
    protected $fillable = ['camp_id','name'];
}
