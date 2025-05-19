<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GymClass extends Model
{
    protected $table = 'classes';

    protected $fillable = ['category_id', 'name', 'description', 'content', 'content_html'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function customers()
    {
        return $this->hasMany(Customer::class);
    }
}