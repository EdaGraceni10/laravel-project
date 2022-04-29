<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resevation extends Model
{  protected $fillable = [

    'startDate',
    'endDate',
    'NoOfPerson',
    'user_id',
    'rent_id',
    'fullName',
    'email'

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
