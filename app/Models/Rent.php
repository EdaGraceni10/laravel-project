<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rent extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'address',
        'price',
        'images',
        'startDate',
        'endDate',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
