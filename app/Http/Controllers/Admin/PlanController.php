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
        $plans = Plan::all();
        // $bronze = Plan::whereId(1)->first();
        // $silver = Plan::whereId(2)->first();
        // $gold = Plan::whereId(3)->first();
        $doctor = Auth::user();

        return view('admin.plans.index', compact('plans', 'doctor'));
    }

    public function showPayment($plan)
    {
        $plan = Plan::findOrFail($plan);
        return view('admin.plans.payment', compact('plan'));
    }
    
}
