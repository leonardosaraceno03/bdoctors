<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $table = 'plans';

    protected $fillable = [
        'name',
        'duration',
        'price'
    ];

    public function doctors()
    {
        return $this->belongsToMany(Doctor::class);
    }
}
