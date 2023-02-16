<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    public function doctors()
    {
        return $this->belongsToMany(Doctor::class);
    }
}
