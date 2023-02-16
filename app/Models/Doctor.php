<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $doctor = 'doctors';

    protected $fillable = [
        'address', 'cv', 'avatar', 'telephone', 'performance', 'description', 'visibility', 'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function specializations()
    {
        return $this->belongsToMany(Specialization::class);
    }
}
