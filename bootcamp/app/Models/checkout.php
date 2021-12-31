<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class checkout extends Model
{
    use HasFactory,softDeletes;

    protected $fillable = ['user_id','camp_id','card_number','expired','cvc','is_paid'];

    public function setExpiredAttribute($value)
    {
        $this->attributes ['Expired'] = date('Y-m-t', strtotime($value));
    }

    /**
     * Get the user that owns the checkout
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Camp(): BelongsTo
    {
        return $this->belongsTo(Camp::class);
    }
}