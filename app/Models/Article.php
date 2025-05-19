<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'category_id',
        'title',
        'description',
        'content',
        'content_html',
        'status',
        'created_by',
        'published_at'
    ];

    protected $dates = ['published_at'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}