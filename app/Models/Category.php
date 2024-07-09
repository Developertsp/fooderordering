<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Constants\MyConstants; // Import your constants class

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'type', 'icon_file', 'background_image', 'slug', 'status', 'description', 'created_by', 'updated_by'
    ];

    // Use constants directly from MyConstants class
    public static function getCategoryTypes()
    {
        return MyConstants::CATEGORY_TYPES;
    }

    public static function getCategoryStatuses()
    {
        return MyConstants::CATEGORY_STATUSES;
    }
}
