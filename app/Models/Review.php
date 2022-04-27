<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [

        'description'

    ];
    use HasFactory;
    public function rent()
    {
        return $this->belongsTo(Rent::class);
    }
    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
