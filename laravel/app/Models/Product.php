<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'pricing', 'category_id', 'images'];

    protected $casts = [
        'images' => 'array'
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }
}