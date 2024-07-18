<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;


    protected $fillable = [
        'name', 'desc', 'type', 'slug', 'status', 'icon_file', 'background_image', 'parent_id', 'created_by', 'updated_by',
    ];
    
        // Relationships
        public function createdByUser()
        {
            return $this->belongsTo(User::class, 'created_by');
        }
    
        public function updatedByUser()
        {
            return $this->belongsTo(User::class, 'updated_by');
        }
         
        public function comapnyID()
        {
            return $this->belongsTo(User::class, 'company_id');
        }
}
