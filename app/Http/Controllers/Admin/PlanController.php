<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Plan;

class PlanController extends Controller
{
    public function index()
    {
        $bronze = Plan::whereId(1)->first();
        $silver = Plan::whereId(2)->first();
        $gold = Plan::whereId(3)->first();
        $doctor = Auth::user();

        return view('admin.doctors.sponsor', compact('bronze', 'silver', 'gold', 'doctor'));
    }
}
