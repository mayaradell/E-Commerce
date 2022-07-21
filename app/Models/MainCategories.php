<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainCategories extends Model
{
    use HasFactory;

    protected $table='main_categories';

    protected $fillable = [
        'translation_lan',
        'translation_of',
        'name',
        'slug',
        'photo',
        'active',
        'created_at',
        'updated_at',
    ];

    public function scopeActive($query){
        return $query ->where('active',1);
    }
}
