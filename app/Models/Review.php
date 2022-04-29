<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [

        'description',
        'rent_id',
        'user_id'

    ];
    use HasFactory;
    public function rent()
    {
        return $this->belongsTo(Rent::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
