<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;


class DoctorPlan extends Model
{
    protected $fillable = [
        'plan_id',
        'doctor_id',
        'expiration_date',
    ];
}
