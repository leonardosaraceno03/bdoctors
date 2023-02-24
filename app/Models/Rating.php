<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $fillable = ['doctor_id', 'rating_id'];
    public function doctors()
    {
        return $this->belongsToMany(Doctor::class, 'doctor_rating');
    }
}
