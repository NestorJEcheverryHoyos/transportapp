<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;
use App\Models\Trip;

class Rating extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'trip_id',
        'rating',
        'comment',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function trip()
    {
        return $this->belongsTo(Trip::class, 'trip_id');
    }
}
