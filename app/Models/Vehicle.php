<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;
use App\Models\Trip;

class Vehicle extends Model
{
    use HasFactory;

    protected $fillable = [
        'number',
        'licence_plate',
        'make',
        'model',
        'capacity',
        'status',
        'driver_id',
    ];

    public function driver()
    {
        return $this->belongsTo(User::class, 'driver_id');
    }

    public function trips()
    {
        return $this->hasMany(Trip::class);
    }
}