<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $doctor = 'doctors';

    protected $fillable = [
        'address', 'cv', 'avatar', 'telephone', 'performance', 'description', 'visibility', 'user_id', 'specialization_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function specializations()
    {
        return $this->belongsToMany(Specialization::class);
    }

    public function plans()
    {
        return $this->belongsToMany(Plan::class, 'doctor_plan')->withPivot(['expiration_date']);;
    }

    public function ratings()
    {
        return $this->belongsToMany(Rating::class, 'doctor_rating');
    }

    public function messages()
    {
        return $this->hasMany(Message::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
