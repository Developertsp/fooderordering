<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RestaurantSchedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'day',
        'opening_time',
        'closing_time',
        'is_closed',
        'created_by',
        'company_id'
    ];
}
