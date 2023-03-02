<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

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
        return $this->belongsToMany(Doctor::class, 'doctor_plan');
    }

    public function date()
    {
        return Carbon::now();
    }
}
