<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GymLocation extends Model
{
    protected $fillable = [
        'name',
        'address',
        'phone_number',
        'title',
        'description',
        'thumbnail',
        'images',
        'schedule_image'
    ];

    protected $casts = [
        'images' => 'array',
    ];

    public function customers()
    {
        return $this->hasMany(Customer::class);
    }
}