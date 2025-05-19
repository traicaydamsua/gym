<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'gym_location_id',
        'class_id',
        'name',
        'phone_number',
        'email',
        'note',
        'time_start',
        'contact_type'
    ];

    protected $dates = ['time_start'];

    public function gymLocation()
    {
        return $this->belongsTo(GymLocation::class);
    }

    public function gymClass()
    {
        return $this->belongsTo(GymClass::class, 'class_id');
    }
}