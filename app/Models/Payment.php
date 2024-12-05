<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Trip;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'trip_id',
        'payment_method',
        'amount',
        'status',
    ];

    public function trip()
    {
        return $this->belongsTo(Trip::class, 'trip_id');
    }
}
